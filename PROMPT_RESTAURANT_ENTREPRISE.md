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

## 19. Reservation (nouvelle entité - Commande)
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
- **Fonctionnalité** : Historique des réservations de l'utilisateur

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
- `templates/chef/agenda.html.twig` (écran agenda)
- `templates/chef/menu-day.html.twig` (proposition d'un jour - création/modification)
- `templates/chef/manage-meals.html.twig` (gestion des plats pour un jour)
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

## Interface Salarié - Écran d'accueil

### Sans réservation
- Affichage des menus du jour des journées à venir
- Tuiles de dates cliquables
- **Interactions** :
  - Clic sur une date → Ouvre interface réservation
  - Swipe gauche sur une date → Ouvre interface réservation avec formule menu sélectionné
  - Swipe droite sur une date → Ouvre interface réservation avec formule salade sélectionné

### Avec réservations
- Tuiles avec réservation affichées dans une couleur différente
- Affichage des plats réservés sur la tuile
- Icône représentant le mode de livraison
- Clic sur une date → Accède à la page de réservation pour modification (si autorisé)
- Cadenas pour les dates non modifiables

## Interface Salarié - Écran de réservation

### Formule restaurant
- Par défaut : plats du jour affichés
- Premier plat de la liste sélectionné par défaut
- Clic pour changer de plat
- Clic pour basculer sur formule salade
- Choix du type de livraison : icônes en bas de page
- Clic sur icône livraison → Valide automatiquement la réservation et renvoie à l'écran d'accueil
- Flèches autour de la date pour changer de date sans revenir en arrière
- Croix orange pour revenir à l'écran d'accueil
- Icône 'i' pour accéder aux informations complémentaires sur le plat (composition)

### Formule salade
- Premier plat de la liste sélectionné par défaut
- Clic pour changer de plat
- Clic pour basculer sur formule restaurant
- Choix du type de livraison : icônes en bas
- Clic sur icône livraison → Valide automatiquement la réservation
- Flèches autour de la date pour changer de date
- Croix orange pour revenir à l'écran d'accueil
- Icône 'i' pour détails du plat

### Détails des plats (Pop-up)
- Affichage en pop-up/modal
- Composition du plat affichée
- Fermeture : clic sur 'x' ou à côté de la pop-up
- Écran sous la pop-up inactif durant l'affichage

### Mess
- Formulaire avec champs (nom, email, message, date souhaitée)
- Envoi d'email à restaurant@desangosse.com avec demandeur en copie
- Sujet : "Demande de réservation pour un mess"
- Message d'avertissement si message déjà envoyé

## Interface Chef - Écran Agenda

- Affichage par défaut des journées à venir
- Possibilité de voir les journées passées (en gris)
- Clic sur une date → Accès à la page de création/modification
- Résumé de la configuration affichée pour chaque date

## Interface Chef - Proposition d'un jour

- **Alerte** : Si réservations existent déjà, message d'alerte affiché
- **Modes de livraison** :
  - Modes actifs repris des paramètres par défaut
  - Modes actifs affichés en vert
  - Clic sur 'Fermeture' → Désactive tous les modes de livraison
- **Commentaire** :
  - Clic sur icône 'info' → Permet d'ajouter un commentaire
  - Commentaire remplace l'affichage du menu (ex: "Fermeture exceptionnelle")
  - La journée est alors verrouillée (locked = true)
- **Cartes (types de plats)** :
  - Types de carte repris des paramètres d'administration
  - Clic sur le type de carte → Active/désactive
  - Clic sur la flèche → Paramétrage de la carte pour la journée
- **Navigation** :
  - Validation : bouton vert
  - Annulation : bouton orange
  - Flèches autour de la date pour changer de date

## Interface Chef - Gestion des plats

- Plats sélectionnés : affichés en haut sur fond vert
- Plats non sélectionnés : affichés en bleu
- Sélection/désélection : clic sur le plat
- Validation : bouton vert
- Annulation : bouton orange
- Flèches autour de la date pour changer de date
- Icône appareil photo : aperçu de l'affichage pour le consommateur

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
.addEntry('employee-modal', './assets/employee/js/modal.js')
.addEntry('employee-mess', './assets/employee/js/mess.js')
.addEntry('chef-agenda', './assets/chef/js/agenda.js')
.addEntry('chef-menu-day', './assets/chef/js/menu-day.js')
.addEntry('chef-manage-meals', './assets/chef/js/manage-meals.js')
.addEntry('chef-entrees', './assets/chef/js/entrees.js')
.addEntry('chef-plats', './assets/chef/js/plats.js')
.addEntry('chef-accompagnements', './assets/chef/js/accompagnements.js')
.addEntry('chef-salades', './assets/chef/js/salades.js')
```

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
- Le chef peut annuler des réservations non conformes
- Le chef peut marquer une réservation comme 'served'
- Le chef peut voir les statistiques (nombre de réservations, repas populaires)

## Mess (Demande spéciale)
- Un salarié peut demander un mess via un formulaire
- Le formulaire envoie un email à restaurant@desangosse.com avec le demandeur en copie
- Sujet du mail : "Demande de réservation pour un mess"
- Un message d'avertissement s'affiche si le message a déjà été envoyé (limite à définir)

---

# DESIGN ET UX

## Palette de couleurs
- Conserver la palette verte existante du squelette
- Ajouter des couleurs pour les statuts :
  - `pending` : orange (#f59e0b)
  - `confirmed` : bleu (#3b82f6)
  - `served` : vert (#10b981)
  - `cancelled` : rouge (#ef4444)
- Tuiles avec réservation : couleur différente (ex: vert clair)
- Tuiles sans réservation : couleur par défaut
- Dates passées : gris
- Dates verrouillées : indicateur visuel (cadenas)

## Composants UI

### Interface Salarié
- **Tuiles de dates** : 
  - Cliquables pour accéder à la réservation
  - Affichage différent si réservation existante
  - Icône de mode de livraison visible
  - Cadenas pour dates non modifiables
  - Support du swipe (mobile)
- **Écran de réservation** :
  - Liste des plats avec sélection visuelle
  - Premier plat sélectionné par défaut
  - Bouton pour basculer entre formule restaurant/salade
  - Icônes de modes de livraison en bas (validation automatique au clic)
  - Flèches de navigation de date
  - Croix orange pour retour
  - Icône 'i' pour détails (ouvre pop-up)
- **Pop-up détails plat** :
  - Modal centré avec composition du plat
  - Fermeture par 'x' ou clic extérieur
  - Fond assombri derrière la pop-up

### Interface Chef
- **Agenda** :
  - Vue calendrier avec dates cliquables
  - Résumé de configuration par date
  - Dates passées en gris
- **Proposition d'un jour** :
  - Modes de livraison : icônes vertes si actifs
  - Bouton "Fermeture" pour désactiver tous les modes
  - Formulaire commentaire avec icône info
  - Cartes (types de plats) avec activation/désactivation
  - Boutons validation (vert) et annulation (orange)
- **Gestion des plats** :
  - Plats sélectionnés : fond vert, en haut
  - Plats non sélectionnés : fond bleu
  - Sélection par clic
  - Icône appareil photo pour aperçu

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
│   ├── EmployeeController.php
│   ├── ChefController.php
│   ├── HomeController.php (modifié pour rediriger selon le rôle)
│   ├── SecurityController.php
│   └── RegistrationController.php (modifié pour assigner ROLE_EMPLOYEE par défaut)
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
│   └── Reservation.php (nouveau - Commande)
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
│   └── reservations.html.twig
├── chef/
│   ├── agenda.html.twig
│   ├── menu-day.html.twig
│   ├── manage-meals.html.twig
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
    ├── date_tile.html.twig
    ├── meal_card.html.twig
    ├── delivery_mode_icons.html.twig
    └── modal_meal_details.html.twig

assets/
├── employee/
│   ├── js/
│   │   ├── dashboard.js
│   │   ├── reserve.js
│   │   ├── modal.js
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

# NOTES IMPORTANTES

1. **Conserver le design existant** : Utiliser la palette verte et les styles du squelette
2. **Structure modulaire** : Continuer à utiliser la structure modulaire des assets
3. **Sécurité** : Toujours vérifier les rôles et les permissions
4. **Validation** : Valider toutes les entrées utilisateur
5. **UX** : Messages de confirmation et d'erreur clairs
6. **Responsive** : Tous les écrans doivent être pris en compte
7. **Interactions tactiles** : Support du swipe sur mobile
8. **Navigation fluide** : Éviter les rechargements de page inutiles
9. **Feedback visuel** : Indicateurs clairs pour les actions (sélection, validation, etc.)
10. **Accessibilité** : Gérer le focus, les modales, les interactions clavier

---

# === FIN DU PROMPT ===

