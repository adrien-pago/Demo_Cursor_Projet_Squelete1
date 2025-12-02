# === PROMPT COMPLET - Application Gestion Restaurant d'Entreprise ===

# Objectif

Étendre le squelette Symfony existant pour créer une **application de gestion de restaurant d'entreprise** avec deux types d'utilisateurs :

- **Salariés (ROLE_EMPLOYEE)** : peuvent créditer leur compte et réserver des repas
- **Chef cuisinier (ROLE_CHEF)** : peut afficher les repas et voir les réservations

---

# CONTEXTE ET FONCTIONNALITÉS

## Rôles utilisateurs

### Salarié (ROLE_EMPLOYEE)
- ✅ Créditer son compte (ajouter de l'argent)
- ✅ Voir son solde actuel
- ✅ Consulter les repas disponibles
- ✅ Réserver un repas (débit automatique du compte)
- ✅ Voir l'historique de ses réservations
- ✅ Annuler une réservation (si possible selon les règles métier)

### Chef cuisinier (ROLE_CHEF)
- ✅ Créer/modifier/supprimer des **entrées**
- ✅ Créer/modifier/supprimer des **plats**
- ✅ Créer/modifier/supprimer des **accompagnements**
- ✅ Créer/modifier/supprimer des **desserts**
- ✅ Créer/modifier/supprimer des **salades**
- ✅ Composer le **menu du jour** en sélectionnant parmi les éléments créés
- ✅ Proposer chaque jour soit une **salade**, soit un **menu du jour** (entrée au choix + plat + accompagnement + dessert)
- ✅ Voir toutes les réservations
- ✅ Voir les détails d'une réservation
- ✅ Marquer une réservation comme "servie" ou "annulée"
- ✅ Voir les statistiques (nombre de réservations par jour, repas populaires)

---

# ENTITÉS À CRÉER

## 1. User (modifier l'existant)
- Ajouter : `balance` (decimal, solde du compte)
- Ajouter : `firstName` (string, prénom)
- Ajouter : `lastName` (string, nom)
- Relation : `OneToMany` vers `Reservation`
- Relation : `OneToMany` vers `CreditTransaction`

## 2. MealItem (nouvelle entité - remplace Meal)
- `id` (integer, auto)
- `name` (string, nom de l'élément)
- `description` (text, description)
- `price` (decimal, prix)
- `type` (string, enum: 'starter', 'main', 'side', 'dessert', 'salad')
- `available` (boolean, disponible pour composition)
- `imageUrl` (string, nullable, URL de l'image)
- `createdAt` (datetime_immutable)
- `updatedAt` (datetime_immutable)
- Relation : `ManyToMany` vers `DailyMenu` (via MenuItem)
- Relation : `OneToMany` vers `Reservation` (pour les salades réservées directement)

## 3. DailyMenu (nouvelle entité)
- `id` (integer, auto)
- `date` (date, unique, date du menu)
- `type` (string, enum: 'salad', 'full_menu')
- `salad` (ManyToOne vers MealItem, nullable, si type = 'salad')
- `price` (decimal, prix total du menu)
- `available` (boolean, menu disponible pour réservation)
- `createdAt` (datetime_immutable)
- `updatedAt` (datetime_immutable)
- Relation : `OneToMany` vers `MenuItem` (pour menu composé)
- Relation : `OneToMany` vers `Reservation`

## 4. MenuItem (nouvelle entité - table de liaison)
- `id` (integer, auto)
- `dailyMenu` (ManyToOne vers DailyMenu)
- `mealItem` (ManyToOne vers MealItem)
- `category` (string, enum: 'starter', 'main', 'side', 'dessert')
- `position` (integer, ordre d'affichage)
- Relation : Permet de lier plusieurs MealItems à un DailyMenu pour composer le menu du jour

## 5. Reservation (nouvelle entité)
- `id` (integer, auto)
- `user` (ManyToOne vers User)
- `dailyMenu` (ManyToOne vers DailyMenu, nullable, si réservation d'un menu complet)
- `mealItem` (ManyToOne vers MealItem, nullable, si réservation d'une salade uniquement)
- `reservationDate` (date, date de réservation)
- `status` (string, enum: 'pending', 'confirmed', 'served', 'cancelled')
- `createdAt` (datetime_immutable)
- `updatedAt` (datetime_immutable)
- **Note** : Une réservation référence soit un `dailyMenu` (menu complet), soit un `mealItem` (salade seule)

## 6. CreditTransaction (nouvelle entité)
- `id` (integer, auto)
- `user` (ManyToOne vers User)
- `amount` (decimal, montant crédité)
- `type` (string, enum: 'credit', 'debit')
- `description` (string, nullable, description de la transaction)
- `createdAt` (datetime_immutable)

---

# ROUTES ET CONTRÔLEURS

## Routes Salariés (ROLE_EMPLOYEE)

### Dashboard Salarié
- **Route** : `/employee/dashboard`
- **Contrôleur** : `EmployeeController::dashboard()`
- **Fonctionnalité** : Affiche le solde, les repas disponibles, les dernières réservations

### Créditer le compte
- **Route** : `/employee/credit` (GET/POST)
- **Contrôleur** : `EmployeeController::credit()`
- **Fonctionnalité** : Formulaire pour ajouter de l'argent au compte

### Voir les menus du jour
- **Route** : `/employee/menus`
- **Contrôleur** : `EmployeeController::menus()`
- **Fonctionnalité** : Affiche le menu du jour (soit salade, soit menu complet) avec possibilité de réserver

### Réserver un menu
- **Route** : `/employee/reserve-menu/{id}` (POST)
- **Contrôleur** : `EmployeeController::reserveMenu()`
- **Fonctionnalité** : Créer une réservation pour un menu du jour et débiter le compte

### Mes réservations
- **Route** : `/employee/reservations`
- **Contrôleur** : `EmployeeController::reservations()`
- **Fonctionnalité** : Historique des réservations de l'utilisateur

### Annuler une réservation
- **Route** : `/employee/reservation/{id}/cancel` (POST)
- **Contrôleur** : `EmployeeController::cancelReservation()`
- **Fonctionnalité** : Annuler une réservation et rembourser le compte

## Routes Chef (ROLE_CHEF)

### Dashboard Chef
- **Route** : `/chef/dashboard`
- **Contrôleur** : `ChefController::dashboard()`
- **Fonctionnalité** : Vue d'ensemble avec statistiques

### Gestion des éléments de repas (MealItems)
- **Route** : `/chef/meal-items` (GET, liste tous les éléments)
- **Route** : `/chef/meal-items/{type}` (GET, liste par type : starters, mains, sides, desserts, salads)
- **Route** : `/chef/meal-items/new` (GET/POST, créer un élément)
- **Route** : `/chef/meal-items/{id}/edit` (GET/POST, modifier)
- **Route** : `/chef/meal-items/{id}/delete` (POST, supprimer)
- **Contrôleur** : `ChefController::mealItems()`, `mealItemsByType()`, `createMealItem()`, `editMealItem()`, `deleteMealItem()`

### Gestion des menus du jour
- **Route** : `/chef/daily-menus` (GET, liste des menus créés)
- **Route** : `/chef/daily-menus/new` (GET/POST, créer un menu du jour)
- **Route** : `/chef/daily-menus/{id}/edit` (GET/POST, modifier)
- **Route** : `/chef/daily-menus/{id}/delete` (POST, supprimer)
- **Contrôleur** : `ChefController::dailyMenus()`, `createDailyMenu()`, `editDailyMenu()`, `deleteDailyMenu()`
- **Fonctionnalité** : 
  - Créer un menu du jour en choisissant le type (salade OU menu complet)
  - Si menu complet : sélectionner une entrée, un plat, un accompagnement, un dessert parmi les éléments créés
  - Si salade : sélectionner une salade parmi les salades créées

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
- `templates/employee/dashboard.html.twig`
- `templates/employee/credit.html.twig`
- `templates/employee/menus.html.twig` (affiche le menu du jour)
- `templates/employee/reservations.html.twig`

## Templates Chef
- `templates/chef/dashboard.html.twig`
- `templates/chef/meal-items/index.html.twig` (liste tous les éléments)
- `templates/chef/meal-items/by-type.html.twig` (liste par type)
- `templates/chef/meal-items/new.html.twig` (créer un élément)
- `templates/chef/meal-items/edit.html.twig` (modifier un élément)
- `templates/chef/daily-menus/index.html.twig` (liste des menus du jour)
- `templates/chef/daily-menus/new.html.twig` (créer un menu du jour)
- `templates/chef/daily-menus/edit.html.twig` (modifier un menu)
- `templates/chef/reservations/index.html.twig`
- `templates/chef/reservations/details.html.twig`

## Templates partagés
- `templates/shared/meal_item_card.html.twig` (carte élément de repas)
- `templates/shared/daily_menu_card.html.twig` (carte menu du jour)
- `templates/shared/reservation_card.html.twig` (carte réservation)

---

# ASSETS À CRÉER

## Assets Salariés
- `assets/employee/js/dashboard.js`
- `assets/employee/styles/dashboard.scss`
- `assets/employee/js/menus.js`
- `assets/employee/styles/menus.scss`

## Assets Chef
- `assets/chef/js/dashboard.js`
- `assets/chef/styles/dashboard.scss`
- `assets/chef/js/meal-items.js`
- `assets/chef/styles/meal-items.scss`
- `assets/chef/js/daily-menus.js`
- `assets/chef/styles/daily-menus.scss`

## Modifications webpack.config.js

Ajouter les nouvelles entries :
```javascript
.addEntry('employee-dashboard', './assets/employee/js/dashboard.js')
.addEntry('employee-menus', './assets/employee/js/menus.js')
.addEntry('chef-dashboard', './assets/chef/js/dashboard.js')
.addEntry('chef-meal-items', './assets/chef/js/meal-items.js')
.addEntry('chef-daily-menus', './assets/chef/js/daily-menus.js')
```

---

# RÈGLES MÉTIER

## Crédit de compte
- Un salarié peut créditer son compte avec n'importe quel montant positif
- Chaque crédit crée une transaction de type 'credit'
- Le solde est mis à jour automatiquement

## Réservation de menu
- Un salarié ne peut réserver que si son solde est suffisant
- Le montant est débité immédiatement lors de la réservation
- Une transaction de type 'debit' est créée
- La réservation est créée avec le statut 'pending'
- Un salarié ne peut réserver qu'un menu disponible (available = true)
- Un salarié réserve soit une salade (référence MealItem), soit un menu complet (référence DailyMenu)
- Il ne peut y avoir qu'un seul menu du jour par date

## Annulation de réservation
- Un salarié peut annuler sa réservation uniquement si le statut est 'pending' ou 'confirmed'
- Le montant est remboursé sur le compte
- Une transaction de type 'credit' est créée pour le remboursement
- Le statut de la réservation passe à 'cancelled'

## Gestion des éléments de repas (Chef)
- Le chef peut créer/modifier/supprimer des **entrées**, **plats**, **accompagnements**, **desserts**, **salades**
- Chaque élément a un type (`starter`, `main`, `side`, `dessert`, `salad`)
- Un élément supprimé ne peut plus être utilisé dans la composition d'un menu
- Un élément peut être désactivé (available = false) sans être supprimé
- Les éléments sont réutilisables : le même plat peut être utilisé dans plusieurs menus du jour différents

## Composition du menu du jour (Chef)
- Le chef compose le menu du jour en choisissant parmi les éléments qu'il a créés
- **Deux types de menus possibles** :
  1. **Salade** : Sélection d'une seule salade parmi les salades créées
  2. **Menu complet** : Sélection d'une entrée, d'un plat, d'un accompagnement, d'un dessert
- Il ne peut y avoir qu'**un seul menu du jour par date**
- Le prix du menu complet est la somme des prix des éléments sélectionnés (ou un prix fixe défini par le chef)
- Le prix d'une salade est le prix de la salade sélectionnée
- Le chef peut créer/modifier/supprimer les menus du jour
- Un menu du jour peut être désactivé (available = false) sans être supprimé

### Workflow de composition du menu
1. **Création des éléments** : Le chef crée d'abord tous les éléments (entrées, plats, accompagnements, desserts, salades)
2. **Création du menu du jour** :
   - Le chef choisit une date pour le menu
   - Le chef choisit le type : "Salade" OU "Menu complet"
   - **Si type = "Salade"** : Sélection d'une salade parmi les salades disponibles
   - **Si type = "Menu complet"** :
     - Sélection d'une entrée parmi les entrées disponibles
     - Sélection d'un plat parmi les plats disponibles
     - Sélection d'un accompagnement parmi les accompagnements disponibles
     - Sélection d'un dessert parmi les desserts disponibles
3. **Calcul du prix** : Le prix est calculé automatiquement (somme des éléments) ou peut être défini manuellement
4. **Activation** : Le menu est activé (available = true) pour être visible et réservable par les salariés

## Gestion des réservations (Chef)
- Le chef peut voir toutes les réservations
- Le chef peut marquer une réservation comme 'served'
- Le chef peut voir les statistiques (nombre de réservations, repas populaires)

---

# DESIGN ET UX

## Palette de couleurs
- Conserver la palette verte existante du squelette
- Ajouter des couleurs pour les statuts :
  - `pending` : orange (#f59e0b)
  - `confirmed` : bleu (#3b82f6)
  - `served` : vert (#10b981)
  - `cancelled` : rouge (#ef4444)

## Composants UI
- Cartes d'éléments de repas avec image, nom, description, prix, type
- Cartes de menu du jour avec affichage des éléments composants
- Badges de type pour les éléments (entrée, plat, accompagnement, dessert, salade)
- Badges de statut pour les réservations
- Tableaux pour les listes de réservations et menus
- Formulaires modernes pour crédit et création d'éléments
- Formulaire de composition de menu avec sélection multiple (entrée, plat, accompagnement, dessert)
- Sélecteur de type de menu (salade OU menu complet)
- Modales pour confirmation d'actions (annulation, suppression)

## Responsive
- Tous les templates doivent être responsive
- Les tableaux doivent être scrollables sur mobile
- Les formulaires doivent s'adapter aux petits écrans

---

# VALIDATION ET SÉCURITÉ

## Validation des formulaires
- Montant de crédit : minimum 1€, maximum 1000€
- Prix d'un élément de repas : minimum 0.50€, maximum 50€
- Prix d'un menu du jour : minimum 1€, maximum 100€
- Date de réservation : ne peut pas être dans le passé
- Date du menu du jour : ne peut pas être dans le passé
- Vérification du solde avant réservation
- Un menu du jour ne peut pas être créé pour une date déjà existante
- Lors de la composition d'un menu complet, tous les éléments requis doivent être sélectionnés (entrée, plat, accompagnement, dessert)

## Sécurité
- CSRF protection sur tous les formulaires
- Vérification des rôles dans les contrôleurs
- Un utilisateur ne peut modifier que ses propres réservations
- Le chef peut voir toutes les réservations mais pas les modifier directement (sauf statut)

---

# DONNÉES DE TEST (Fixtures optionnelles)

## Utilisateurs de test
- Salarié : `employee@test.com` / `password123` (ROLE_EMPLOYEE, solde: 50€)
- Chef : `chef@test.com` / `password123` (ROLE_CHEF)

## Éléments de repas de test

### Entrées
- Salade verte (3.50€)
- Soupe du jour (2.50€)
- Velouté de légumes (3.00€)

### Plats
- Poulet rôti (8.50€)
- Saumon grillé (9.50€)
- Lasagnes (7.50€)

### Accompagnements
- Riz (2.00€)
- Frites (2.50€)
- Légumes de saison (2.50€)

### Desserts
- Tarte aux pommes (4.00€)
- Mousse au chocolat (3.50€)
- Salade de fruits (3.00€)

### Salades
- Salade César (6.00€)
- Salade niçoise (6.50€)
- Salade composée (5.50€)

## Menus du jour de test
- Menu du 01/01/2024 : Salade César (6.00€)
- Menu du 02/01/2024 : Entrée (Salade verte) + Plat (Poulet rôti) + Accompagnement (Riz) + Dessert (Tarte aux pommes) = 18.00€

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
│   ├── MealItem.php (nouveau - remplace Meal)
│   ├── DailyMenu.php (nouveau)
│   ├── MenuItem.php (nouveau - table de liaison)
│   ├── Reservation.php (nouveau)
│   └── CreditTransaction.php (nouveau)
└── Repository/
    ├── UserRepository.php
    ├── MealItemRepository.php (nouveau)
    ├── DailyMenuRepository.php (nouveau)
    ├── MenuItemRepository.php (nouveau)
    ├── ReservationRepository.php (nouveau)
    └── CreditTransactionRepository.php (nouveau)

templates/
├── employee/
│   ├── dashboard.html.twig
│   ├── credit.html.twig
│   ├── menus.html.twig
│   └── reservations.html.twig
├── chef/
│   ├── dashboard.html.twig
│   ├── meal-items/
│   │   ├── index.html.twig
│   │   ├── by-type.html.twig
│   │   ├── new.html.twig
│   │   └── edit.html.twig
│   ├── daily-menus/
│   │   ├── index.html.twig
│   │   ├── new.html.twig
│   │   └── edit.html.twig
│   └── reservations/
│       ├── index.html.twig
│       └── details.html.twig
└── shared/
    ├── meal_item_card.html.twig
    ├── daily_menu_card.html.twig
    └── reservation_card.html.twig

assets/
├── employee/
│   ├── js/
│   │   ├── dashboard.js
│   │   └── menus.js
│   └── styles/
│       ├── dashboard.scss
│       └── menus.scss
└── chef/
    ├── js/
    │   ├── dashboard.js
    │   ├── meal-items.js
    │   └── daily-menus.js
    └── styles/
        ├── dashboard.scss
        ├── meal-items.scss
        └── daily-menus.scss
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

# NOTES IMPORTANTES

1. **Conserver le design existant** : Utiliser la palette verte et les styles du squelette
2. **Structure modulaire** : Continuer à utiliser la structure modulaire des assets
3. **Sécurité** : Toujours vérifier les rôles et les permissions
4. **Validation** : Valider toutes les entrées utilisateur
5. **UX** : Messages de confirmation et d'erreur clairs
6. **Responsive** : Tous les écrans doivent être pris en compte

---

# === FIN DU PROMPT ===

