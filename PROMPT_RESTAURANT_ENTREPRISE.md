# === PROMPT COMPLET - Application Gestion Restaurant d'Entreprise ===

# Objectif

Étendre le squelette Symfony existant pour créer une **application de gestion de restaurant d'entreprise** (Restaurant Desangosse) avec deux types d'utilisateurs :

- **Salariés (ROLE_EMPLOYEE)** : peuvent créditer leur compte, consulter les menus et réserver des repas
- **Chef cuisinier (ROLE_CHEF)** : peut créer les plats, composer les menus du jour, gérer les réservations et planifier les repas

**Référence** : Cahier des charges Restaurant Desangosse

---

# CONTEXTE ET FONCTIONNALITÉS

## Rôles utilisateurs

### Salarié (ROLE_EMPLOYEE)
- ✅ Consulter les menus du jour des journées à venir
- ✅ Faire une réservation :
  - Choisir entre une formule «salade» ou «menu complet»
  - Sélectionner une entrée, un plat et un accompagnement (dans le cas d'un menu)
  - Choisir le mode de livraison
- ✅ Gérer les réservations :
  - Visualiser les réservations passées et futures
  - Voir les détails des plats réservés
  - Annuler une réservation avant qu'elle ne soit consommée (si autorisé)
- ✅ Créditer son compte : Ajouter des fonds pour réserver des repas
- ✅ Demander un mess : Formulaire pour demander une réservation spéciale par email
- ✅ Voir son solde actuel

### Chef cuisinier (ROLE_CHEF)
- ✅ Gérer les menus :
  - Créer, modifier et supprimer les plats et formules (salades et menus)
  - Créer/modifier/supprimer des **entrées**
  - Créer/modifier/supprimer des **plats**
  - Créer/modifier/supprimer des **accompagnements**
  - Créer/modifier/supprimer des **desserts**
  - Créer/modifier/supprimer des **salades**
- ✅ Planifier les repas :
  - Assigner des menus aux différents jours via l'agenda
  - Composer le **menu du jour** en sélectionnant parmi les éléments créés
  - Proposer chaque jour soit une **salade**, soit un **menu du jour** (entrée au choix + plat + accompagnement + dessert)
  - Gérer les modes de livraison par jour
  - Verrouiller/déverrouiller des dates
  - Ajouter des commentaires (ex: "Fermeture exceptionnelle")
- ✅ Gérer les réservations :
  - Voir qui a réservé et pour quelle formule
  - Voir toutes les réservations avec filtres
  - Voir les détails d'une réservation
  - Annuler des réservations non conformes
  - Marquer une réservation comme "servie"
- ✅ Paramètres :
  - Configurer les modes de livraison par défaut
  - Configurer les types de cartes disponibles
  - Aperçu consommateur (simulation de l'affichage pour les salariés)

---

# ENTITÉS À CRÉER (Basé sur le schéma de base de données exemple 2)

## 1. User (modifier l'existant)
- `id` (integer, auto, Primary Key)
- `name` (string, nom complet)
- `email` (string, unique)
- `password` (string, hashé)
- `compteVerif` (boolean, compte vérifié)
- `adminVerif` (boolean, admin vérifié)
- `balance` (decimal, solde du compte - maintenu à jour via Wallet)
- Relation : `OneToMany` vers `Wallet`
- Relation : `OneToMany` vers `Reservation`
- **Méthode** : `getBalance()` - retourne le solde actuel (calculé depuis la dernière transaction Wallet)

## 2. Wallet (nouvelle entité)
- `id` (integer, auto, Primary Key)
- `user` (ManyToOne vers User)
- `type` (string, enum: 'credit', 'debit', 'refund')
- `soldeNew` (decimal, nouveau solde après transaction)
- `soldeOld` (decimal, ancien solde avant transaction)
- `amount` (decimal, montant de la transaction - positif pour crédit/remboursement, négatif pour débit)
- `date` (datetime_immutable, date de la transaction)
- `statut` (string, enum: 'payement accepté', 'payement refusé')
- `description` (string, nullable, description de la transaction)
- Relation : Historique des transactions (crédit, débit, remboursement)

## 3. Entree (nouvelle entité)
- `id` (integer, auto, Primary Key)
- `typeChoix` (ManyToOne vers TypeChoix, nullable)
- `name` (string, nom de l'entrée)
- `description` (text, description)
- Relation : `OneToMany` vers `CompositionEntree`

## 4. Plat (nouvelle entité)
- `id` (integer, auto, Primary Key)
- `typeChoix` (ManyToOne vers TypeChoix, nullable)
- `name` (string, nom du plat)
- `description` (text, description)
- Relation : `OneToMany` vers `CompositionPlat`

## 5. Accompagnement (nouvelle entité)
- `id` (integer, auto, Primary Key)
- `typeChoix` (ManyToOne vers TypeChoix, nullable)
- `name` (string, nom de l'accompagnement)
- `description` (text, description)
- Relation : `OneToMany` vers `CompositionAccompagnement`

## 6. Dessert (nouvelle entité)
- `id` (integer, auto, Primary Key)
- `typeChoix` (ManyToOne vers TypeChoix, nullable)
- `name` (string, nom du dessert)
- `description` (text, description)
- Relation : `OneToMany` vers `CompositionDessert`

## 7. Salade (nouvelle entité)
- `id` (integer, auto, Primary Key)
- `typeChoix` (ManyToOne vers TypeChoix, nullable)
- `name` (string, nom de la salade)
- `description` (text, description)
- Relation : `OneToMany` vers `CompositionSalade`

## 8. TypeChoix (nouvelle entité - optionnelle)
- `id` (integer, auto, Primary Key)
- `name` (string, nom du type de choix, ex: 'végétarien', 'sans gluten', 'bio')
- Relation : `OneToMany` vers `Entree`, `Plat`, `Accompagnement`, `Salade`, `Dessert`
- **Note** : Permet de catégoriser les plats (optionnel, peut être nullable)

## 9. Formule (nouvelle entité)
- `id` (integer, auto, Primary Key)
- `name` (string, nom de la formule : 'salade' ou 'menu complet')
- Relation : `OneToMany` vers `CompositionFormule`
- Relation : `OneToMany` vers `Reservation`

## 10. Lieu (nouvelle entité)
- `id` (integer, auto, Primary Key)
- `name` (string, nom du lieu de livraison)
- Relation : `OneToMany` vers `CompositionLieu`
- Relation : `OneToMany` vers `Reservation`

## 11. StatutCommande (nouvelle entité)
- `id` (integer, auto, Primary Key)
- `name` (string, enum: 'pending', 'confirmed', 'served', 'cancelled')
- Relation : `OneToMany` vers `Reservation`

## 12. CarteDuJour (nouvelle entité - Menu du jour)
- `id` (integer, auto, Primary Key)
- `date` (date, unique, date du menu)
- `price` (decimal, prix fixe du menu - même prix pour salade et menu complet, ex: 4.50€)
- `locked` (boolean, date verrouillée - non modifiable)
- `comment` (text, nullable, commentaire affiché à la place du menu)
- `available` (boolean, menu disponible pour réservation)
- `createdAt` (datetime_immutable)
- `updatedAt` (datetime_immutable)
- Relation : `OneToMany` vers `CompositionEntree`
- Relation : `OneToMany` vers `CompositionPlat`
- Relation : `OneToMany` vers `CompositionAccompagnement`
- Relation : `OneToMany` vers `CompositionDessert`
- Relation : `OneToMany` vers `CompositionSalade`
- Relation : `OneToMany` vers `CompositionFormule`
- Relation : `OneToMany` vers `CompositionLieu`
- Relation : `OneToMany` vers `Reservation`

## 13. CompositionEntree (table de liaison)
- `id` (integer, auto, Primary Key)
- `carteDuJour` (ManyToOne vers CarteDuJour)
- `entree` (ManyToOne vers Entree)
- Relation : Permet de lier plusieurs entrées à un menu du jour

## 14. CompositionPlat (table de liaison)
- `id` (integer, auto, Primary Key)
- `carteDuJour` (ManyToOne vers CarteDuJour)
- `plat` (ManyToOne vers Plat)
- Relation : Permet de lier plusieurs plats à un menu du jour

## 15. CompositionAccompagnement (table de liaison)
- `id` (integer, auto, Primary Key)
- `carteDuJour` (ManyToOne vers CarteDuJour)
- `accompagnement` (ManyToOne vers Accompagnement)
- Relation : Permet de lier plusieurs accompagnements à un menu du jour

## 15b. CompositionDessert (table de liaison)
- `id` (integer, auto, Primary Key)
- `carteDuJour` (ManyToOne vers CarteDuJour)
- `dessert` (ManyToOne vers Dessert)
- Relation : Permet de lier plusieurs desserts à un menu du jour

## 16. CompositionSalade (table de liaison)
- `id` (integer, auto, Primary Key)
- `carteDuJour` (ManyToOne vers CarteDuJour)
- `salade` (ManyToOne vers Salade)
- Relation : Permet de lier plusieurs salades à un menu du jour

## 17. CompositionFormule (table de liaison)
- `id` (integer, auto, Primary Key)
- `carteDuJour` (ManyToOne vers CarteDuJour)
- `formule` (ManyToOne vers Formule)
- Relation : Permet de lier les formules disponibles à un menu du jour

## 18. CompositionLieu (table de liaison)
- `id` (integer, auto, Primary Key)
- `carteDuJour` (ManyToOne vers CarteDuJour)
- `lieu` (ManyToOne vers Lieu)
- `active` (boolean, mode de livraison actif pour ce jour)
- Relation : Permet de gérer les modes de livraison par jour

## 19. MessRequest (nouvelle entité)
- `id` (integer, auto, Primary Key)
- `user` (ManyToOne vers User)
- `date` (date, date de la demande)
- `nombreConvives` (integer, nullable, nombre de convives)
- `petitDejeuner` (boolean, petit déjeuner demandé)
- `dejeuner` (boolean, déjeuner demandé)
- `pauses` (boolean, pauses demandées)
- `diner` (boolean, dîner demandé)
- `commentaires` (text, nullable, commentaires supplémentaires)
- `sentAt` (datetime_immutable, date d'envoi de la demande)
- **Note** : Permet de tracker les demandes de mess pour éviter les doublons

## 20. Reservation (nouvelle entité - Commande)
- `id` (integer, auto, Primary Key)
- `user` (ManyToOne vers User)
- `carteDuJour` (ManyToOne vers CarteDuJour, le menu du jour réservé)
- `entree` (ManyToOne vers Entree, nullable, sélectionnée par l'utilisateur si menu complet)
- `plat` (ManyToOne vers Plat, nullable, sélectionné par l'utilisateur si menu complet)
- `accompagnement` (ManyToOne vers Accompagnement, nullable, sélectionné par l'utilisateur si menu complet)
- `dessert` (ManyToOne vers Dessert, nullable, sélectionné par l'utilisateur si menu complet)
- `salade` (ManyToOne vers Salade, nullable, sélectionnée par l'utilisateur si formule salade)
- `formule` (ManyToOne vers Formule)
- `lieu` (ManyToOne vers Lieu, mode de livraison)
- `statutCommande` (ManyToOne vers StatutCommande)
- `price` (decimal, prix payé - récupéré depuis CarteDuJour.price au moment de la réservation)
- `date` (date, date de réservation)
- `createdAt` (datetime_immutable)
- `updatedAt` (datetime_immutable)
- **Note** : 
  - Une réservation référence toujours un `carteDuJour` (menu du jour)
  - Si formule = "salade" : champ `salade` rempli, autres champs null
  - Si formule = "menu complet" : champs `entree`, `plat`, `accompagnement`, `dessert` remplis, `salade` null
  - Le prix est toujours celui du `carteDuJour.price` (prix fixe, ex: 4.50€)

---

# ROUTES ET CONTRÔLEURS

## Routes Salariés (ROLE_EMPLOYEE)

### Écran d'accueil (Dashboard)
- **Route** : `/employee/dashboard`
- **Contrôleur** : `EmployeeController::dashboard()`
- **Fonctionnalité** : 
  - Affiche le solde actuel de l'utilisateur
  - Affiche les menus du jour des journées à venir
  - Tuiles de dates cliquables pour accéder à la réservation
  - Tuiles avec réservation existante affichées différemment (couleur différente)
  - Icône de mode de livraison sur les tuiles réservées
  - Cadenas pour les dates non modifiables
  - Swipe gauche sur une date : ouvre interface réservation avec formule menu sélectionné
  - Swipe droite sur une date : ouvre interface réservation avec formule salade sélectionné
  - Clic sur une date : accède à la page de réservation (ou modification si réservation existe)

### Créditer le compte
- **Route** : `/employee/credit` (GET/POST)
- **Contrôleur** : `EmployeeController::credit()`
- **Fonctionnalité** : Formulaire pour ajouter de l'argent au compte

### Écran de réservation
- **Route** : `/employee/reserve/{date}` (GET, affiche le formulaire)
- **Route** : `/employee/reserve` (POST, valide la réservation)
- **Contrôleur** : `EmployeeController::reserve()`
- **Fonctionnalité** : 
  - Par défaut affiche les plats du jour
  - Premier plat de la liste sélectionné par défaut
  - Clic pour changer de plat
  - Clic pour basculer entre formule restaurant et formule salade
  - Choix du type de livraison (icônes en bas) : valide automatiquement la réservation
  - Flèches autour de la date pour changer de date sans revenir en arrière
  - Croix orange pour revenir à l'écran d'accueil
  - Icône 'i' pour voir les détails du plat (pop-up)

### Détails d'un plat (Pop-up)
- **Route** : `/employee/meal-details/{id}` (GET, AJAX)
- **Contrôleur** : `EmployeeController::mealDetails()`
- **Fonctionnalité** : 
  - Affiche la composition du plat en pop-up
  - Fermeture par clic sur 'x' ou à côté de la pop-up
  - Écran sous la pop-up inactif durant l'affichage

### Demander un mess
- **Route** : `/employee/mess` (GET/POST)
- **Contrôleur** : `EmployeeController::mess()`
- **Fonctionnalité** : 
  - Formulaire qui envoie un email à restaurant@desangosse.com avec le demandeur en copie
  - Sujet du mail : "Demande de réservation pour un mess"
  - Message d'avertissement si le message a déjà été envoyé

### Mes réservations
- **Route** : `/employee/reservations`
- **Contrôleur** : `EmployeeController::reservations()`
- **Fonctionnalité** : 
  - Tableau moderne avec 4 colonnes : Date, Formule, Lieu, Prix
  - Affichage du solde actuel
  - Bouton "Recharger le solde" en bas
  - Design responsive (tableau plus large sur PC)
  - Remplacement "Formule restaurant" par "Restaurant" et "Formule salade" par "Salade" dans l'affichage

### Annuler une réservation
- **Route** : `/employee/reservation/{id}/cancel` (POST)
- **Contrôleur** : `EmployeeController::cancelReservation()`
- **Fonctionnalité** : Annuler une réservation et rembourser le compte

## Routes Chef (ROLE_CHEF)

### Écran Agenda
- **Route** : `/chef/agenda`
- **Contrôleur** : `ChefController::agenda()`
- **Fonctionnalité** : 
  - Affiche par défaut les journées à venir
  - Possibilité de voir les journées passées (en gris)
  - Clic sur une date pour accéder à la page de création/modification
  - Résumé de la configuration affiché pour chaque date

### Proposition d'un jour (Création/Modification menu)
- **Route** : `/chef/menu/{date}` (GET, affiche le formulaire)
- **Route** : `/chef/menu/{date}` (POST, valide les modifications)
- **Contrôleur** : `ChefController::menuDay()`
- **Fonctionnalité** : 
  - Message d'alerte si des réservations existent déjà sur cette date
  - **Modes de livraison** :
    - Les modes actifs sont repris des paramètres par défaut
    - Les modes actifs s'affichent en vert
    - Clic sur 'Fermeture' désactive tous les modes de livraison
  - **Commentaire** :
    - Clic sur l'icône 'info' permet d'ajouter un commentaire (ex: "Fermeture exceptionnelle")
    - Le commentaire remplace l'affichage du menu
    - La journée est alors verrouillée (locked = true)
  - **Cartes (plats)** :
    - Les différents types de carte sont repris des paramètres d'administration
    - Clic sur le type de carte pour activer/désactiver
    - Clic sur la flèche pour le paramétrage de la carte pour la journée
  - **Navigation** :
    - Validation avec bouton vert
    - Annulation avec bouton orange
    - Flèches autour de la date pour changer de date sans revenir en arrière

### Gestion des plats
- **Route** : `/chef/meals/{date}` (GET, affiche la liste des plats)
- **Route** : `/chef/meals/{date}/select` (POST, sélectionne/désélectionne un plat)
- **Contrôleur** : `ChefController::manageMeals()`
- **Fonctionnalité** : 
  - Les plats sélectionnés s'affichent en haut sur fond vert
  - Les plats non sélectionnés s'affichent en bleu
  - Sélection/désélection par clic sur le plat
  - Validation avec bouton vert
  - Annulation avec bouton orange
  - Flèches autour de la date pour changer de date
  - Icône appareil photo pour aperçu consommateur

### Sélection des salades pour un jour
- **Route** : `/chef/select-salades/{date}` (GET, affiche la liste)
- **Route** : `/chef/select-salades/{date}` (POST, valide les sélections)
- **Contrôleur** : `ChefController::selectSalades()`
- **Fonctionnalité** : 
  - Affichage de toutes les salades existantes
  - Sélection/désélection par clic
  - Création de nouvelles salades via modal
  - Validation avec boutons modernes

### Sélection menu complet pour un jour
- **Route** : `/chef/select-menu-complet/{date}` (GET, affiche la liste)
- **Route** : `/chef/select-menu-complet/{date}` (POST, valide les sélections)
- **Contrôleur** : `ChefController::selectMenuComplet()`
- **Fonctionnalité** : 
  - Affichage des entrées, plats, accompagnements existants
  - Sélection/désélection par clic
  - Création de nouveaux éléments via modal
  - Validation avec boutons modernes

### Gestion des éléments de repas (CRUD)
- **Route** : `/chef/entrees` (GET, liste des entrées)
- **Route** : `/chef/entrees/new` (GET/POST, créer)
- **Route** : `/chef/entrees/{id}/edit` (GET/POST, modifier)
- **Route** : `/chef/entrees/{id}/delete` (POST, supprimer)
- **Route** : `/chef/plats` (GET, liste des plats)
- **Route** : `/chef/plats/new` (GET/POST, créer)
- **Route** : `/chef/plats/{id}/edit` (GET/POST, modifier)
- **Route** : `/chef/plats/{id}/delete` (POST, supprimer)
- **Route** : `/chef/accompagnements` (GET, liste des accompagnements)
- **Route** : `/chef/accompagnements/new` (GET/POST, créer)
- **Route** : `/chef/accompagnements/{id}/edit` (GET/POST, modifier)
- **Route** : `/chef/accompagnements/{id}/delete` (POST, supprimer)
- **Route** : `/chef/salades` (GET, liste des salades)
- **Route** : `/chef/salades/new` (GET/POST, créer)
- **Route** : `/chef/salades/{id}/edit` (GET/POST, modifier)
- **Route** : `/chef/salades/{id}/delete` (POST, supprimer)
- **Contrôleur** : `ChefController::entrees()`, `plats()`, `accompagnements()`, `salades()`, etc.

### Voir les réservations
- **Route** : `/chef/reservations`
- **Contrôleur** : `ChefController::reservations()`
- **Fonctionnalité** : Liste de toutes les réservations avec filtres (date, statut)

### Détails d'une réservation
- **Route** : `/chef/reservation/{id}`
- **Contrôleur** : `ChefController::reservationDetails()`

### Marquer réservation comme servie
- **Route** : `/chef/reservation/{id}/mark-served` (POST)
- **Contrôleur** : `ChefController::markServed()`

### Paramètres d'administration
- **Route** : `/chef/settings` (GET/POST)
- **Contrôleur** : `ChefController::settings()`
- **Fonctionnalité** : 
  - Configurer les modes de livraison par défaut (lieux)
  - Configurer les types de cartes disponibles (Formule)
  - Gérer les paramètres généraux

---

# MODIFICATIONS DE CONFIGURATION

## config/packages/security.yaml

Ajouter les rôles et les contrôles d'accès :

```yaml
security:
  # ... configuration existante ...
  access_control:
    - { path: ^/login, roles: PUBLIC_ACCESS }
    - { path: ^/register, roles: PUBLIC_ACCESS }
    - { path: ^/employee, roles: ROLE_EMPLOYEE }
    - { path: ^/chef, roles: ROLE_CHEF }
    - { path: ^/$, roles: ROLE_USER }
```

## Modification de l'entité User

Ajouter les champs manquants et les relations.

---

# TEMPLATES À CRÉER

## Templates Salariés
- `templates/employee/dashboard.html.twig` (écran d'accueil avec tuiles de dates)
- `templates/employee/reserve.html.twig` (écran de réservation - formule restaurant)
- `templates/employee/reserve-salad.html.twig` (écran de réservation - formule salade)
- `templates/employee/meal-details.html.twig` (pop-up détails d'un plat)
- `templates/employee/mess.html.twig` (formulaire mess)
- `templates/employee/credit.html.twig` (créditer le compte)
- `templates/employee/reservations.html.twig` (historique des réservations)

## Templates Chef
- `templates/chef/agenda.html.twig` (écran agenda avec bandeaux mois et cartes jours)
- `templates/chef/menu-day.html.twig` (proposition d'un jour - création/modification)
- `templates/chef/select-salades.html.twig` (sélection des salades pour un jour)
- `templates/chef/select-menu-complet.html.twig` (sélection des entrées, plats, accompagnements pour un jour)
- `templates/chef/entrees/index.html.twig` (liste des entrées)
- `templates/chef/entrees/new.html.twig` (créer une entrée)
- `templates/chef/entrees/edit.html.twig` (modifier une entrée)
- `templates/chef/plats/index.html.twig` (liste des plats)
- `templates/chef/plats/new.html.twig` (créer un plat)
- `templates/chef/plats/edit.html.twig` (modifier un plat)
- `templates/chef/accompagnements/index.html.twig` (liste des accompagnements)
- `templates/chef/accompagnements/new.html.twig` (créer un accompagnement)
- `templates/chef/accompagnements/edit.html.twig` (modifier un accompagnement)
- `templates/chef/salades/index.html.twig` (liste des salades)
- `templates/chef/salades/new.html.twig` (créer une salade)
- `templates/chef/salades/edit.html.twig` (modifier une salade)
- `templates/chef/reservations/index.html.twig` (liste des réservations)
- `templates/chef/reservations/details.html.twig` (détails d'une réservation)
- `templates/chef/settings.html.twig` (paramètres : modes de livraison, types de cartes)

## Templates partagés
- `templates/shared/date_tile.html.twig` (tuile de date pour l'accueil)
- `templates/shared/meal_card.html.twig` (carte plat)
- `templates/shared/delivery_mode_icons.html.twig` (icônes modes de livraison)
- `templates/shared/modal_meal_details.html.twig` (modal détails plat)

---

# INTERFACES DÉTAILLÉES

## Interface Salarié - Écran d'accueil (Dashboard)

- **Structure** :
  - Bandeaux de mois avec dégradé vert (pas bleu foncé)
  - Cartes de jours organisées par mois
  - Affichage des 60 prochains jours par défaut
- **Affichage par date** :
  - Date et jour de la semaine à gauche (même hauteur que le contenu)
  - Contenu au centre :
    - "Entrées: [liste]" sur une ligne (label bleu, items noirs)
    - "Plats: [liste]" sur une ligne
    - "Accompagnements: [liste]" sur une ligne
    - Les items peuvent revenir à la ligne sous le label si trop longs
  - Filigrane "RÉSERVÉ" en diagonal pour les jours avec réservation existante
- **États visuels** :
  - Jour configuré : affichage des éléments du menu
  - Jour fermé (commentaire) : affichage du commentaire
  - Jour non configuré : "Non configuré"
- **Interactions** :
  - Clic sur une carte → Accès à la page de réservation
  - Navigation fluide entre les dates

## Interface Salarié - Écran de réservation

- **Header** :
  - Navigation de date avec flèches SVG (pas d'images, pas de fond blanc)
  - Affichage du jour, numéro et mois en français
- **Réservation existante** :
  - Si réservation existe déjà : message "Réservation déjà effectuée pour ce jour"
  - Affichage des détails de la réservation (formule, entrée, plat, accompagnement, salade)
  - Les boutons de formule sont masqués
  - Bouton "Annuler" pour retour au dashboard
- **Sans réservation** :
  - **Cartes de formules** : Affichées côte à côte même sur mobile
    - "Formule restaurant"
    - "Formule salade"
    - "Mess"
  - **Sélection automatique** : "Formule restaurant" sélectionnée par défaut à l'arrivée
  - **Formule restaurant** :
    - Sections : Entrées, Plats, Accompagnements
    - Radio buttons pour sélection (1 de chaque)
    - Icône info (`info-icon.png`) à côté de chaque item → Ouvre modal avec description
    - Sélection visuelle : fond vert (pas de checkmark blanc)
  - **Formule salade** :
    - Liste des salades disponibles
    - Radio buttons pour sélection (1 salade)
    - Icône info pour descriptions
    - Sélection visuelle : fond vert
  - **Formule Mess** :
    - Formulaire avec champs (nombre de convives, repas souhaités, commentaires)
    - Envoi d'email à `restaurant@desangosse.com` avec demandeur en copie
    - Sujet : "Demande de réservation pour un mess"
    - Message d'avertissement si demande déjà envoyée pour ce jour
    - Vérification via entité `MessRequest`
- **Footer** :
  - Bouton "Annuler" (icône cross) → Retour au dashboard
  - Icônes de modes de livraison :
    - `chef-hat.png` pour "Sur place"
    - `shopping-bag.png` pour "À emporter"
    - `Idelivery-truck.png` pour "Livraison"
  - Clic sur une icône de livraison → Valide automatiquement la réservation si tous les éléments sont sélectionnés
- **Modal description** :
  - Affichage du nom et de la description de l'item
  - Message "Aucune information pour cet élément" si pas de description
  - Fermeture par 'x' ou clic extérieur
  - Fond assombri derrière la modal

## Interface Chef - Écran Agenda

- **Structure** :
  - Bandeaux de mois avec dégradé vert (pas bleu foncé)
  - Cartes de jours organisées par mois
  - Affichage des 60 prochains jours par défaut
- **Affichage par date** :
  - Date et jour de la semaine à gauche
  - Contenu au centre : formules actives avec compteurs de réservations
  - Icônes de modes de livraison à droite (chef-hat, shopping-bag, Idelivery-truck)
  - Filigrane "RÉSERVÉ" en diagonal pour les jours avec réservations
- **Formules affichées** :
  - "Formule restaurant (X)" avec compteur de réservations
  - "Formule salade (X)" avec compteur de réservations
  - "Mess (X)" avec compteur de demandes Mess
  - Les compteurs s'affichent même s'ils sont à 0
- **États visuels** :
  - Jour configuré : fond normal
  - Jour fermé (commentaire) : affichage du commentaire
  - Jour non configuré : "Non configuré"
- **Interactions** :
  - Clic sur une carte → Accès à la page de création/modification du menu
  - Navigation fluide entre les dates

## Interface Chef - Proposition d'un jour

- **Header** :
  - Bandeau avec dégradé vert (pas bleu foncé)
  - Navigation de date avec flèches SVG (pas d'images, pas de fond blanc)
  - Affichage du jour, numéro et mois en français
- **Alerte** : Si réservations existent déjà, message d'alerte affiché en haut
- **Modes de livraison** :
  - Tous les lieux de l'entité `Lieu` sont affichés dynamiquement
  - Modes actifs affichés en vert (fond vert)
  - Modes inactifs affichés avec fond transparent
  - Icônes dynamiques selon le nom du lieu :
    - "Restaurant" ou "Sur place" → `chef-hat.png`
    - "À emporter" → `shopping-bag.png`
    - "Livraison" ou "Bureau" → `Idelivery-truck.png`
  - Clic sur un mode → Toggle actif/inactif
  - Option "Fermeture" avec icône `cross-icon.png` :
    - Clic sur "Fermeture" → Désactive tous les autres modes
    - Icône info apparaît si commentaire existe
    - Clic sur icône info → Ouvre modal pour ajouter/modifier commentaire
- **Commentaire** :
  - Modal moderne pour ajouter un commentaire
  - Le commentaire remplace l'affichage du menu (ex: "Fermeture exceptionnelle")
  - La journée est automatiquement verrouillée (locked = true) si commentaire existe
- **Cartes (Formules)** :
  - Toutes les formules de l'entité `Formule` sont affichées dynamiquement
  - Clic sur une formule → Active/désactive (vert si actif, transparent si inactif)
  - Flèche blanche (`choix-icon.png`) à côté de "Formule salade" → Ouvre interface de sélection des salades
  - Flèche blanche (`choix-icon.png`) à côté de "Formule menu complet" → Ouvre interface de sélection des entrées, plats, accompagnements
  - Pas de flèche pour "Mess" (géré différemment)
- **Navigation** :
  - Footer avec boutons modernes (pas d'icônes) :
    - Bouton "Annuler" (gris) → Retour à l'agenda
    - Bouton "Valider" (vert avec dégradé) → Sauvegarde et retour à l'agenda
  - Flèches autour de la date pour changer de date sans revenir en arrière

## Interface Chef - Sélection des éléments (Salades / Menu complet)

### Interface de sélection des salades (`select-salades`)
- **Header** : Titre "Sélection des salades" avec date
- **Barre de recherche** : Filtre les salades en temps réel
- **Grille de salades** :
  - Cartes de salades avec nom
  - Salades sélectionnées : fond vert
  - Salades non sélectionnées : fond bleu/transparent
  - Clic sur une carte → Toggle sélection
- **Bouton créer** : FAB (Floating Action Button) avec "+" pour créer une nouvelle salade
- **Modal création** : Formulaire pour créer une nouvelle salade (nom, description)
- **Footer** :
  - Bouton "Annuler" (gris) → Retour à `menu-day`
  - Bouton "Valider" (vert) → Sauvegarde les sélections et retour à `menu-day`

### Interface de sélection menu complet (`select-menu-complet`)
- **Structure similaire** mais organisée en sections :
  - Section "Entrées" avec grille d'entrées
  - Section "Plats" avec grille de plats
  - Section "Accompagnements" avec grille d'accompagnements
- **Boutons créer** : FAB pour chaque type (entrée, plat, accompagnement)
- **Modals création** : Formulaires spécifiques pour chaque type
- **Footer** : Identique à `select-salades`

---

# ASSETS À CRÉER

## Assets Salariés
- `assets/employee/js/dashboard.js` (gestion des tuiles, swipe, navigation)
- `assets/employee/styles/dashboard.scss` (tuiles de dates, styles réservations)
- `assets/employee/js/reserve.js` (sélection de plats, bascule formule, validation)
- `assets/employee/styles/reserve.scss` (formulaire de réservation)
- `assets/employee/js/modal.js` (pop-up détails plat)
- `assets/employee/styles/modal.scss` (styles modales)
- `assets/employee/js/mess.js` (formulaire mess, envoi email)
- `assets/employee/styles/mess.scss` (formulaire mess)

## Assets Chef
- `assets/chef/js/agenda.js` (calendrier, navigation dates)
- `assets/chef/styles/agenda.scss` (vue agenda)
- `assets/chef/js/menu-day.js` (gestion modes livraison, commentaires, cartes)
- `assets/chef/styles/menu-day.scss` (interface proposition jour)
- `assets/chef/js/manage-meals.js` (sélection/désélection plats, aperçu)
- `assets/chef/styles/manage-meals.scss` (gestion plats)
- `assets/chef/js/entrees.js` (CRUD entrées)
- `assets/chef/js/plats.js` (CRUD plats)
- `assets/chef/js/accompagnements.js` (CRUD accompagnements)
- `assets/chef/js/salades.js` (CRUD salades)
- `assets/chef/styles/meals.scss` (styles communs CRUD)

## Modifications webpack.config.js

Ajouter les nouvelles entries :
```javascript
.addEntry('employee-dashboard', './assets/employee/js/dashboard.js')
.addEntry('employee-reserve', './assets/employee/js/reserve.js')
.addEntry('employee-reservations', './assets/employee/js/reservations.js')
.addEntry('employee-modal', './assets/employee/js/modal.js')
.addEntry('employee-mess', './assets/employee/js/mess.js')
.addEntry('chef-agenda', './assets/chef/js/agenda.js')
.addEntry('chef-menu-day', './assets/chef/js/menu-day.js')
.addEntry('chef-select-items', './assets/chef/js/select-items.js')
.addEntry('chef-manage-meals', './assets/chef/js/manage-meals.js')
.addEntry('chef-entrees', './assets/chef/js/entrees.js')
.addEntry('chef-plats', './assets/chef/js/plats.js')
.addEntry('chef-accompagnements', './assets/chef/js/accompagnements.js')
.addEntry('chef-salades', './assets/chef/js/salades.js')
```

**Note** : `chef-select-items` est utilisé pour les interfaces `select-salades` et `select-menu-complet`

---

# RÈGLES MÉTIER

## Crédit de compte
- Un salarié peut créditer son compte avec n'importe quel montant positif (entre 1€ et 1000€)
- Chaque crédit crée une transaction Wallet avec `type = 'credit'` et `statut = 'payement accepté'`
- Le solde User.balance est mis à jour automatiquement : `soldeNew = soldeOld + montantRecharge`
- Une transaction Wallet est créée avec les valeurs `soldeOld` (solde avant) et `soldeNew` (solde après)

## Réservation de menu
- Un salarié ne peut réserver que si son solde est suffisant (solde >= CarteDuJour.price)
- Le prix est fixe et identique pour salade et menu complet (ex: 4.50€) - défini dans CarteDuJour.price
- Le montant est débité immédiatement lors de la réservation (via Wallet)
- Une transaction Wallet est créée avec `type = 'debit'`, `statut = 'payement accepté'`, `amount = -CarteDuJour.price`
- Le solde User.balance est mis à jour : `soldeNew = soldeOld - CarteDuJour.price`
- La réservation est créée avec le statut 'pending' et `price = CarteDuJour.price`
- Un salarié ne peut réserver qu'un menu disponible (available = true)
- Un salarié réserve soit une salade (champ `salade` rempli, formule = "salade"), soit un menu complet (champs `entree`, `plat`, `accompagnement`, `dessert` remplis, formule = "menu complet")
- Pour un menu complet, le salarié doit sélectionner UNE entrée parmi celles disponibles, UN plat, UN accompagnement, UN dessert
- Le choix du mode de livraison (lieu) est obligatoire
- Il ne peut y avoir qu'un seul menu du jour (CarteDuJour) par date
- Une date verrouillée (locked = true) ne peut pas être modifiée

## Annulation de réservation
- Un salarié peut annuler sa réservation uniquement si le statut est 'pending' ou 'confirmed'
- Le montant est remboursé sur le compte (Reservation.price)
- Une transaction Wallet est créée avec `type = 'refund'`, `statut = 'payement accepté'`, `amount = Reservation.price`
- Le solde User.balance est mis à jour : `soldeNew = soldeOld + Reservation.price`
- Le statut de la réservation passe à 'cancelled'

## Gestion des éléments de repas (Chef)
- Le chef peut créer/modifier/supprimer des **entrées**, **plats**, **accompagnements**, **desserts**, **salades**
- Les éléments n'ont PAS de prix individuel (seul le menu du jour a un prix fixe)
- Chaque élément peut avoir un `typeChoix` optionnel (ex: 'végétarien', 'sans gluten') pour catégorisation
- Un élément supprimé ne peut plus être utilisé dans la composition d'un menu
- Les éléments sont réutilisables : le même plat peut être utilisé dans plusieurs menus du jour différents

## Composition du menu du jour (Chef)
- Le chef compose le menu du jour en choisissant parmi les éléments qu'il a créés
- **Deux types de formules possibles** (gérées via CompositionFormule) :
  1. **Salade** : Le chef sélectionne une ou plusieurs salades disponibles (via CompositionSalade)
  2. **Menu complet** : Le chef sélectionne une ou plusieurs entrées, plats, accompagnements, desserts disponibles
- Il ne peut y avoir qu'**un seul menu du jour (CarteDuJour) par date**
- **Le prix est fixe** : Le chef définit un prix unique pour le menu du jour (CarteDuJour.price, ex: 4.50€)
- Ce prix s'applique à TOUTES les formules (salade ET menu complet) pour cette date
- Le chef peut créer/modifier/supprimer les menus du jour
- Un menu du jour peut être désactivé (available = false) sans être supprimé

### Workflow de composition du menu
1. **Création des éléments** : Le chef crée d'abord tous les éléments (entrées, plats, accompagnements, desserts, salades)
2. **Création du menu du jour** :
   - Le chef choisit une date pour le menu
   - Le chef définit le prix fixe du menu (ex: 4.50€) - même prix pour toutes les formules
   - Le chef active les formules disponibles (salade et/ou menu complet) via CompositionFormule
   - **Pour la formule salade** : Le chef sélectionne une ou plusieurs salades disponibles (via CompositionSalade)
   - **Pour la formule menu complet** :
     - Le chef sélectionne une ou plusieurs entrées disponibles (via CompositionEntree)
     - Le chef sélectionne un ou plusieurs plats disponibles (via CompositionPlat)
     - Le chef sélectionne un ou plusieurs accompagnements disponibles (via CompositionAccompagnement)
     - Le chef sélectionne un ou plusieurs desserts disponibles (via CompositionDessert)
   - Le salarié choisira ensuite UN élément de chaque catégorie lors de sa réservation
3. **Activation** : Le menu est activé (available = true) pour être visible et réservable par les salariés

## Gestion des menus du jour (Chef)
- Le chef compose le menu du jour via l'agenda
- Pour chaque date, le chef peut :
  - Activer/désactiver les modes de livraison (lieux)
  - Sélectionner les entrées disponibles (plusieurs choix possibles)
  - Sélectionner les plats disponibles (plusieurs choix possibles)
  - Sélectionner les accompagnements disponibles (plusieurs choix possibles)
  - Sélectionner les salades disponibles (plusieurs choix possibles)
  - Ajouter un commentaire (verrouille la date et remplace le menu)
- Si des réservations existent déjà, un message d'alerte est affiché
- Le chef peut verrouiller une date (locked = true) pour empêcher les modifications
- Un commentaire (ex: "Fermeture exceptionnelle") remplace l'affichage du menu

## Gestion des réservations (Chef)
- Le chef peut voir toutes les réservations
- Le chef peut voir qui a réservé et pour quelle formule
- **Comptage des réservations** :
  - Compteur par formule (Restaurant, Salade) affiché dans l'agenda
  - Compteur des demandes Mess affiché dans l'agenda
  - Les compteurs s'affichent même s'ils sont à 0
  - Comparaison par ID de formule (pas par référence d'objet) pour éviter les erreurs
- Le chef peut annuler des réservations non conformes
- Le chef peut marquer une réservation comme 'served'
- Le chef peut voir les statistiques (nombre de réservations, repas populaires)

## Mess (Demande spéciale)
- Un salarié peut demander un mess via un formulaire
- Le formulaire envoie un email à `restaurant@desangosse.com` avec le demandeur en copie
- Sujet du mail : "Demande de réservation pour un mess"
- Un message d'avertissement s'affiche si le message a déjà été envoyé pour ce jour
- Vérification via entité `MessRequest` pour éviter les doublons
- Le chef peut voir les demandes Mess dans l'agenda avec compteur

---

# DESIGN ET UX

## Palette de couleurs
- **Palette principale** : Dégradé vert moderne pour tous les bandeaux et headers
  - Gradient : `linear-gradient(135deg, rgba(16, 185, 129, 0.85) 0%, rgba(5, 150, 105, 0.9) 50%, rgba(52, 211, 153, 0.8) 100%)`
  - Remplace les anciens fonds bleu foncé (#0066cc)
- **Couleurs de statuts** :
  - `pending` : orange (#f59e0b)
  - `confirmed` : bleu (#3b82f6)
  - `served` : vert (#10b981)
  - `cancelled` : rouge (#ef4444)
- **États visuels** :
  - Élément sélectionné : fond vert (pas de checkmark blanc)
  - Élément non sélectionné : fond transparent
  - Tuiles avec réservation : filigrane "RÉSERVÉ" en diagonal
  - Dates passées : gris
  - Dates verrouillées : indicateur visuel (cadenas)

## Composants UI

### Interface Salarié
- **Dashboard** :
  - Bandeaux de mois avec dégradé vert
  - Cartes de jours avec entrées, plats, accompagnements
  - Labels et items sur la même ligne
  - Filigrane "RÉSERVÉ" pour jours réservés
- **Écran de réservation** :
  - Header avec navigation SVG
  - Cartes de formules côte à côte
  - Sélection automatique "Formule restaurant" par défaut
  - Radio buttons avec sélection visuelle (fond vert, pas de checkmark)
  - Icônes info pour descriptions (modal)
  - Gestion des réservations existantes
  - Footer avec icônes de livraison
- **Mes réservations** :
  - Tableau moderne responsive
  - Affichage du solde
  - Bouton recharger le solde
- **Pop-up détails plat** :
  - Modal centré avec description
  - Message si pas de description
  - Fermeture par 'x' ou clic extérieur
  - Fond assombri derrière la pop-up

### Interface Chef
- **Agenda** :
  - Bandeaux de mois avec dégradé vert
  - Cartes de jours avec formules et compteurs
  - Icônes de livraison dynamiques
  - Filigrane "RÉSERVÉ" pour jours réservés
- **Proposition d'un jour** :
  - Header avec dégradé vert et navigation SVG
  - Modes de livraison : tous les lieux affichés, vert si actifs
  - Formules : toutes les formules affichées, vert si actives
  - Flèches blanches pour accéder aux interfaces de sélection
  - Boutons modernes texte (Valider/Annuler) au lieu d'icônes
- **Sélection des éléments** :
  - Grille responsive avec cartes
  - FAB pour créer de nouveaux éléments
  - Modals modernes pour création
  - Boutons modernes dans le footer

## Responsive et interactions
- Tous les templates doivent être responsive
- Support du swipe sur mobile (gauche/droite sur les dates)
- Les tableaux doivent être scrollables sur mobile
- Les formulaires doivent s'adapter aux petits écrans
- Interactions tactiles optimisées pour mobile
- Navigation fluide entre les dates sans rechargement de page

---

# VALIDATION ET SÉCURITÉ

## Validation des formulaires
- Montant de crédit : minimum 1€, maximum 1000€
- Prix d'un menu du jour (CarteDuJour.price) : minimum 0.50€, maximum 50€
- Date de réservation : ne peut pas être dans le passé
- Date du menu du jour : peut être créé pour aujourd'hui et jours futurs uniquement
- Vérification du solde avant réservation : solde >= CarteDuJour.price
- Un menu du jour ne peut pas être créé pour une date déjà existante (contrainte unique sur date)
- Lors de la composition d'un menu complet, au moins un élément de chaque catégorie doit être sélectionné (au moins une entrée, un plat, un accompagnement, un dessert)
- Lors de la réservation d'un menu complet, le salarié doit sélectionner exactement UN élément de chaque catégorie disponible

## Sécurité
- CSRF protection sur tous les formulaires
- Vérification des rôles dans les contrôleurs
- Un utilisateur ne peut modifier que ses propres réservations
- Le chef peut voir toutes les réservations mais pas les modifier directement (sauf statut)

---

# DONNÉES DE TEST (Fixtures optionnelles)

## Utilisateurs de test
- Admin/Chef : `admin@test.com` / `Admin123!` (ROLE_CHEF, adminVerif: true)
- Salarié : `user@test.com` / `User123!` (ROLE_EMPLOYEE, compteVerif: true, solde: 50€)

## Éléments de repas de test (sans prix - les prix sont au niveau du menu)

### Entrées
- Salade verte
- Soupe du jour
- Velouté de légumes

### Plats
- Poulet rôti
- Saumon grillé
- Lasagnes

### Accompagnements
- Riz
- Frites
- Légumes de saison

### Desserts
- Tarte aux pommes
- Mousse au chocolat
- Salade de fruits

### Salades
- Salade César
- Salade niçoise
- Salade composée

## Menus du jour de test
- Menu du 01/01/2024 : Prix 4.50€
  - Formule salade : Salade César, Salade niçoise disponibles
  - Formule menu complet : Entrées (Salade verte, Soupe), Plats (Poulet rôti, Saumon), Accompagnements (Riz, Frites), Desserts (Tarte aux pommes, Mousse)
  
- Menu du 02/01/2024 : Prix 4.50€
  - Formule salade : Salade composée disponible
  - Formule menu complet : Entrées (Velouté), Plats (Lasagnes), Accompagnements (Légumes de saison), Desserts (Salade de fruits)

---

# STRUCTURE DE FICHIERS FINALE

```
src/
├── Controller/
│   ├── EmployeeController.php (dashboard, reserve, mess, reservations, credit)
│   ├── ChefController.php (agenda, menuDay, selectSalades, selectMenuComplet, CRUD éléments)
│   ├── HomeController.php (modifié pour rediriger selon le rôle)
│   ├── SecurityController.php
│   └── RegistrationController.php (modifié pour assigner ROLE_EMPLOYEE par défaut)
├── Twig/
│   └── AppExtension.php (filtres month_fr, day_fr, contains)
├── Entity/
│   ├── User.php (modifié)
│   ├── Wallet.php (nouveau)
│   ├── Entree.php (nouveau)
│   ├── Plat.php (nouveau)
│   ├── Accompagnement.php (nouveau)
│   ├── Salade.php (nouveau)
│   ├── Dessert.php (nouveau)
│   ├── TypeChoix.php (nouveau)
│   ├── Formule.php (nouveau)
│   ├── Lieu.php (nouveau)
│   ├── StatutCommande.php (nouveau)
│   ├── CarteDuJour.php (nouveau)
│   ├── CompositionEntree.php (nouveau)
│   ├── CompositionPlat.php (nouveau)
│   ├── CompositionAccompagnement.php (nouveau)
│   ├── CompositionSalade.php (nouveau)
│   ├── CompositionFormule.php (nouveau)
│   ├── CompositionLieu.php (nouveau)
│   ├── Reservation.php (nouveau - Commande)
│   └── MessRequest.php (nouveau)
└── Repository/
    ├── UserRepository.php
    ├── WalletRepository.php (nouveau)
    ├── EntreeRepository.php (nouveau)
    ├── PlatRepository.php (nouveau)
    ├── AccompagnementRepository.php (nouveau)
    ├── SaladeRepository.php (nouveau)
    ├── DessertRepository.php (nouveau)
    ├── TypeChoixRepository.php (nouveau)
    ├── FormuleRepository.php (nouveau)
    ├── LieuRepository.php (nouveau)
    ├── StatutCommandeRepository.php (nouveau)
    ├── CarteDuJourRepository.php (nouveau)
    ├── CompositionEntreeRepository.php (nouveau)
    ├── CompositionPlatRepository.php (nouveau)
    ├── CompositionAccompagnementRepository.php (nouveau)
    ├── CompositionDessertRepository.php (nouveau)
    ├── CompositionSaladeRepository.php (nouveau)
    ├── CompositionFormuleRepository.php (nouveau)
    ├── CompositionLieuRepository.php (nouveau)
    └── ReservationRepository.php (nouveau)

templates/
├── employee/
│   ├── dashboard.html.twig
│   ├── credit.html.twig
│   ├── reserve.html.twig
│   ├── reserve-salad.html.twig
│   ├── meal-details.html.twig
│   ├── mess.html.twig
│   └── reservations.html.twig (tableau moderne avec solde et bouton recharger)
├── chef/
│   ├── agenda.html.twig (bandeaux mois, cartes jours, compteurs)
│   ├── menu-day.html.twig (navigation SVG, modes/formules dynamiques)
│   ├── select-salades.html.twig (sélection salades avec création)
│   ├── select-menu-complet.html.twig (sélection entrées/plats/accompagnements avec création)
│   ├── entrees/
│   │   ├── index.html.twig
│   │   ├── new.html.twig
│   │   └── edit.html.twig
│   ├── plats/
│   │   ├── index.html.twig
│   │   ├── new.html.twig
│   │   └── edit.html.twig
│   ├── accompagnements/
│   │   ├── index.html.twig
│   │   ├── new.html.twig
│   │   └── edit.html.twig
│   ├── salades/
│   │   ├── index.html.twig
│   │   ├── new.html.twig
│   │   └── edit.html.twig
│   ├── reservations/
│   │   ├── index.html.twig
│   │   └── details.html.twig
│   └── settings.html.twig
└── shared/
    └── (templates partagés optionnels - non utilisés dans l'implémentation actuelle)

assets/
├── employee/
│   ├── js/
│   │   ├── dashboard.js
│   │   ├── reserve.js (sélection auto formule restaurant, modals descriptions)
│   │   ├── reservations.js
│   │   └── mess.js
│   └── styles/
│       ├── dashboard.scss
│       ├── reserve.scss
│       ├── modal.scss
│       └── mess.scss
└── chef/
    ├── js/
    │   ├── agenda.js
    │   ├── menu-day.js
    │   ├── manage-meals.js
    │   ├── entrees.js
    │   ├── plats.js
    │   ├── accompagnements.js
    │   └── salades.js
    └── styles/
        ├── agenda.scss
        ├── menu-day.scss
        ├── manage-meals.scss
        └── meals.scss
```

---

# MIGRATIONS ET BASE DE DONNÉES

## Commandes Doctrine
```bash
# Créer les migrations
php bin/console make:migration

# Appliquer les migrations
php bin/console doctrine:migrations:migrate

# Créer les fixtures (optionnel)
php bin/console doctrine:fixtures:load
```

---

# AMÉLIORATIONS FUTURES (Optionnelles)

- Système de notifications
- Export des réservations en PDF/Excel
- Graphiques de statistiques (Chart.js)
- Recherche et filtres avancés
- Système de commentaires/avis sur les repas
- Photos des repas (upload de fichiers)
- Planning des repas par jour
- Limite de réservations par jour
- Système de points/fidélité

---

# FONCTIONNALITÉS JAVASCRIPT NÉCESSAIRES

## Interface Salarié

### Dashboard (dashboard.js)
- **Gestion des tuiles de dates** : Affichage dynamique, clics, navigation
- **Swipe sur mobile** :
  - Swipe gauche → Ouvre réservation avec formule menu
  - Swipe droite → Ouvre réservation avec formule salade
  - Utiliser une bibliothèque comme Hammer.js ou implémenter avec touch events
- **Navigation fluide** : Changement de date sans rechargement complet

### Réservation (reserve.js)
- **Sélection de plats** : Clic pour changer de plat, premier sélectionné par défaut
- **Bascule formule** : Toggle entre formule restaurant et salade
- **Validation automatique** : Clic sur icône livraison → Envoi formulaire et redirection
- **Navigation dates** : Flèches pour changer de date sans rechargement
- **Retour** : Croix orange pour revenir à l'accueil

### Modal (modal.js)
- **Pop-up détails plat** : Ouverture/fermeture, gestion du focus
- **Désactivation fond** : Écran sous la pop-up inactif
- **Fermeture** : Clic sur 'x' ou clic extérieur

### Mess (mess.js)
- **Formulaire** : Validation, envoi AJAX
- **Prévention double envoi** : Vérification si message déjà envoyé
- **Feedback utilisateur** : Messages de succès/erreur

## Interface Chef

### Agenda (agenda.js)
- **Calendrier** : Navigation mois/semaine, affichage dates
- **Résumé configuration** : Affichage dynamique par date
- **Clic dates** : Navigation vers page création/modification

### Menu du jour (menu-day.js)
- **Modes de livraison** : Activation/désactivation, affichage vert si actif
- **Bouton Fermeture** : Désactive tous les modes
- **Commentaire** : Formulaire avec icône info, verrouillage date
- **Cartes** : Activation/désactivation types de cartes
- **Navigation dates** : Flèches pour changer de date

### Gestion plats (manage-meals.js)
- **Sélection visuelle** : Clic pour sélectionner/désélectionner
- **Tri** : Plats sélectionnés en haut (fond vert), non sélectionnés en bas (fond bleu)
- **Aperçu** : Icône appareil photo pour simulation affichage consommateur

---

# NAVBAR - DESIGN ET STRUCTURE

## Navbar Responsive

### Version Desktop (≥992px)
- **Structure** :
  - "Bonjour [Nom]" à gauche (même taille de police que le titre)
  - Titre "Chez Antho" au centre (gradient vert)
  - Menu de navigation centré (Agenda, Réservations, Paramètres / Dashboard, Mes réservations)
  - Bouton Logout à droite
- **Alignement** : Tous les éléments centrés horizontalement et verticalement
- **Style** : Titre avec gradient vert (même style pour chef et salariés)

### Version Mobile (<992px)
- **Structure** :
  - Titre "Chez Antho" à gauche (une seule ligne)
  - Menu burger à droite (tout à droite de la navbar)
  - Espace entre titre et burger
- **Menu déroulant** :
  - S'ouvre par-dessus le reste de l'application
  - Se déploie depuis le burger (en dessous)
  - Design moderne avec overlay et blur
  - Animation fluide
- **Visibilité** : Menu burger et menu mobile complètement cachés sur desktop

## Twig Extension pour dates françaises

Créer `src/Twig/AppExtension.php` avec :
- Filtre `month_fr` : Traduit les mois en français
- Filtre `day_fr` : Traduit les jours en français
- Filtre `contains` : Vérifie si une chaîne contient une sous-chaîne

# NOTES IMPORTANTES

1. **Design moderne** : 
   - Dégradé vert pour tous les bandeaux (pas bleu foncé)
   - Boutons modernes texte au lieu d'icônes dans les footers
   - Navigation avec flèches SVG (pas d'images avec fond blanc)
   - Sélection visuelle par couleur uniquement (pas de checkmark blanc)
2. **Structure modulaire** : Continuer à utiliser la structure modulaire des assets
3. **Sécurité** : Toujours vérifier les rôles et les permissions
4. **Validation** : Valider toutes les entrées utilisateur
5. **UX** : Messages de confirmation et d'erreur clairs
6. **Responsive** : Tous les écrans doivent être pris en compte
7. **Navigation fluide** : Éviter les rechargements de page inutiles
8. **Feedback visuel** : Indicateurs clairs pour les actions (sélection, validation, etc.)
9. **Accessibilité** : Gérer le focus, les modales, les interactions clavier
10. **Comparaison d'entités** : Utiliser `getId()` pour comparer les entités Doctrine (pas `===`)
11. **Normalisation des dates** : Normaliser les dates à `Y-m-d` pour les comparaisons en base de données
12. **Chargement des collections** : Utiliser `em->refresh()` après flush pour recharger les collections Doctrine

---

# === FIN DU PROMPT ===

