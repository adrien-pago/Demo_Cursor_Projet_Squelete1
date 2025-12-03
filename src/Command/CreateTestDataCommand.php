<?php
declare(strict_types=1);

namespace App\Command;

use App\Entity\Accompagnement;
use App\Entity\CarteDuJour;
use App\Entity\CompositionAccompagnement;
use App\Entity\CompositionDessert;
use App\Entity\CompositionEntree;
use App\Entity\CompositionFormule;
use App\Entity\CompositionLieu;
use App\Entity\CompositionPlat;
use App\Entity\CompositionSalade;
use App\Entity\Dessert;
use App\Entity\Entree;
use App\Entity\Formule;
use App\Entity\Lieu;
use App\Entity\Plat;
use App\Entity\Salade;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:create-test-data',
    description: 'Crée les données de test (plats, menus, etc.)'
)]
final class CreateTestDataCommand extends Command
{
    public function __construct(
        private readonly EntityManagerInterface $em
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Création des données de test');

        // Créer les formules
        $formuleSalade = $this->getOrCreate(Formule::class, ['name' => 'salade'], function() {
            $f = new Formule();
            $f->setName('salade');
            return $f;
        });
        $formuleMenu = $this->getOrCreate(Formule::class, ['name' => 'menu complet'], function() {
            $f = new Formule();
            $f->setName('menu complet');
            return $f;
        });
        $formuleMess = $this->getOrCreate(Formule::class, ['name' => 'Mess'], function() {
            $f = new Formule();
            $f->setName('Mess');
            return $f;
        });
        $io->success('Formules créées');

        // Créer les lieux
        $lieu1 = $this->getOrCreate(Lieu::class, ['name' => 'Restaurant'], function() {
            $l = new Lieu();
            $l->setName('Restaurant');
            return $l;
        });
        $lieu2 = $this->getOrCreate(Lieu::class, ['name' => 'À emporter'], function() {
            $l = new Lieu();
            $l->setName('À emporter');
            return $l;
        });
        $lieu3 = $this->getOrCreate(Lieu::class, ['name' => 'Livraison bureau'], function() {
            $l = new Lieu();
            $l->setName('Livraison bureau');
            return $l;
        });
        $io->success('Lieux créés');

        // Créer les entrées
        $entrees = [
            'Salade verte' => 'Salade verte fraîche',
            'Soupe du jour' => 'Soupe du jour maison',
            'Velouté de légumes' => 'Velouté de légumes de saison',
        ];
        $entreeEntities = [];
        foreach ($entrees as $name => $desc) {
            $entreeEntities[$name] = $this->getOrCreate(Entree::class, ['name' => $name], function() use ($name, $desc) {
                $e = new Entree();
                $e->setName($name)->setDescription($desc);
                return $e;
            });
        }
        $io->success('Entrées créées');

        // Créer les plats
        $plats = [
            'Poulet rôti' => 'Poulet rôti aux herbes',
            'Saumon grillé' => 'Saumon grillé avec citron',
            'Lasagnes' => 'Lasagnes bolognaise',
        ];
        $platEntities = [];
        foreach ($plats as $name => $desc) {
            $platEntities[$name] = $this->getOrCreate(Plat::class, ['name' => $name], function() use ($name, $desc) {
                $p = new Plat();
                $p->setName($name)->setDescription($desc);
                return $p;
            });
        }
        $io->success('Plats créés');

        // Créer les accompagnements
        $accompagnements = [
            'Riz' => 'Riz basmati',
            'Frites' => 'Frites maison',
            'Légumes de saison' => 'Légumes de saison cuits à la vapeur',
        ];
        $accompagnementEntities = [];
        foreach ($accompagnements as $name => $desc) {
            $accompagnementEntities[$name] = $this->getOrCreate(Accompagnement::class, ['name' => $name], function() use ($name, $desc) {
                $a = new Accompagnement();
                $a->setName($name)->setDescription($desc);
                return $a;
            });
        }
        $io->success('Accompagnements créés');

        // Créer les desserts
        $desserts = [
            'Tarte aux pommes' => 'Tarte aux pommes maison',
            'Mousse au chocolat' => 'Mousse au chocolat',
            'Salade de fruits' => 'Salade de fruits frais',
        ];
        $dessertEntities = [];
        foreach ($desserts as $name => $desc) {
            $dessertEntities[$name] = $this->getOrCreate(Dessert::class, ['name' => $name], function() use ($name, $desc) {
                $d = new Dessert();
                $d->setName($name)->setDescription($desc);
                return $d;
            });
        }
        $io->success('Desserts créés');

        // Créer les salades
        $salades = [
            'Salade César' => 'Salade César avec poulet',
            'Salade niçoise' => 'Salade niçoise traditionnelle',
            'Salade composée' => 'Salade composée du jour',
        ];
        $saladeEntities = [];
        foreach ($salades as $name => $desc) {
            $saladeEntities[$name] = $this->getOrCreate(Salade::class, ['name' => $name], function() use ($name, $desc) {
                $s = new Salade();
                $s->setName($name)->setDescription($desc);
                return $s;
            });
        }
        $io->success('Salades créées');

        // Créer les menus du jour
        $today = new \DateTime('today');
        $tomorrow = (clone $today)->modify('+1 day');

        // Menu d'aujourd'hui
        $menu1 = $this->createMenu($today, '4.50', $formuleSalade, $formuleMenu, $lieu1, $lieu2);
        $this->addComposition($menu1, CompositionEntree::class, $entreeEntities['Salade verte']);
        $this->addComposition($menu1, CompositionEntree::class, $entreeEntities['Soupe du jour']);
        $this->addComposition($menu1, CompositionPlat::class, $platEntities['Poulet rôti']);
        $this->addComposition($menu1, CompositionPlat::class, $platEntities['Saumon grillé']);
        $this->addComposition($menu1, CompositionAccompagnement::class, $accompagnementEntities['Riz']);
        $this->addComposition($menu1, CompositionAccompagnement::class, $accompagnementEntities['Frites']);
        $this->addComposition($menu1, CompositionDessert::class, $dessertEntities['Tarte aux pommes']);
        $this->addComposition($menu1, CompositionDessert::class, $dessertEntities['Mousse au chocolat']);
        $this->addComposition($menu1, CompositionSalade::class, $saladeEntities['Salade César']);
        $this->addComposition($menu1, CompositionSalade::class, $saladeEntities['Salade niçoise']);
        $io->success('Menu du jour créé pour ' . $today->format('d/m/Y'));

        // Menu de demain
        $menu2 = $this->createMenu($tomorrow, '4.50', $formuleSalade, $formuleMenu, $lieu1, $lieu2);
        $this->addComposition($menu2, CompositionEntree::class, $entreeEntities['Velouté de légumes']);
        $this->addComposition($menu2, CompositionPlat::class, $platEntities['Lasagnes']);
        $this->addComposition($menu2, CompositionAccompagnement::class, $accompagnementEntities['Légumes de saison']);
        $this->addComposition($menu2, CompositionDessert::class, $dessertEntities['Salade de fruits']);
        $this->addComposition($menu2, CompositionSalade::class, $saladeEntities['Salade composée']);
        $io->success('Menu du jour créé pour ' . $tomorrow->format('d/m/Y'));

        $this->em->flush();
        $io->success('Toutes les données de test ont été créées avec succès !');

        return Command::SUCCESS;
    }

    private function getOrCreate(string $entityClass, array $criteria, callable $factory): object
    {
        $repo = $this->em->getRepository($entityClass);
        $entity = $repo->findOneBy($criteria);
        
        if (!$entity) {
            $entity = $factory();
            $this->em->persist($entity);
        }
        
        return $entity;
    }

    private function createMenu(\DateTime $date, string $price, Formule $formuleSalade, Formule $formuleMenu, Lieu $lieu1, Lieu $lieu2): CarteDuJour
    {
        $menu = $this->em->getRepository(CarteDuJour::class)->findOneBy(['date' => $date]);
        
        if (!$menu) {
            $menu = new CarteDuJour();
            $menu->setDate($date)
                ->setPrice($price)
                ->setAvailable(true)
                ->setLocked(false);
            $this->em->persist($menu);

            // Ajouter les formules
            $compFormule1 = new CompositionFormule();
            $compFormule1->setCarteDuJour($menu)->setFormule($formuleSalade);
            $this->em->persist($compFormule1);

            $compFormule2 = new CompositionFormule();
            $compFormule2->setCarteDuJour($menu)->setFormule($formuleMenu);
            $this->em->persist($compFormule2);

            // Ajouter les lieux
            $compLieu1 = new CompositionLieu();
            $compLieu1->setCarteDuJour($menu)->setLieu($lieu1)->setActive(true);
            $this->em->persist($compLieu1);

            $compLieu2 = new CompositionLieu();
            $compLieu2->setCarteDuJour($menu)->setLieu($lieu2)->setActive(true);
            $this->em->persist($compLieu2);
        }
        
        return $menu;
    }

    private function addComposition(CarteDuJour $menu, string $compositionClass, object $item): void
    {
        // S'assurer que le menu est persisté et flushé pour avoir un ID
        if (!$menu->getId()) {
            $this->em->flush();
        }

        $repo = $this->em->getRepository($compositionClass);
        $itemProperty = $this->getItemProperty($compositionClass);
        
        // Vérifier si la composition existe déjà
        $existing = $repo->createQueryBuilder('c')
            ->where('c.carteDuJour = :menuId')
            ->andWhere('c.' . $itemProperty . ' = :itemId')
            ->setParameter('menuId', $menu->getId())
            ->setParameter('itemId', $item->getId())
            ->getQuery()
            ->getOneOrNullResult();

        if (!$existing) {
            $comp = new $compositionClass();
            $comp->setCarteDuJour($menu);
            $setter = 'set' . ucfirst($itemProperty);
            $comp->$setter($item);
            $this->em->persist($comp);
        }
    }

    private function getItemProperty(string $compositionClass): string
    {
        return match($compositionClass) {
            CompositionEntree::class => 'entree',
            CompositionPlat::class => 'plat',
            CompositionAccompagnement::class => 'accompagnement',
            CompositionDessert::class => 'dessert',
            CompositionSalade::class => 'salade',
            default => throw new \InvalidArgumentException("Unknown composition class: $compositionClass"),
        };
    }
}

