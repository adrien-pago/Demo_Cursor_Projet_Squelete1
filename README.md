# Symfony Auth Skeleton

Squelette Symfony complet avec authentification (login/register) et design moderne.

## 🚀 Installation

### 1. Créer le fichier `.env`

Créez manuellement le fichier `.env` à la racine du projet avec le contenu suivant :

```
APP_ENV=dev
APP_DEBUG=1
APP_SECRET=ChangeMeInProd123
DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
MAILER_DSN=null://localhost
```

### 2. Installer les dépendances PHP

```bash
composer install
```

Cette commande créera automatiquement la base de données SQLite après l'installation.

### 3. Installer les dépendances npm

```bash
npm install
```

### 4. Construire les assets

```bash
npm run build
```

Ou pour le développement avec watch :

```bash
npm run watch
```

### 5. Démarrer le serveur Symfony

```bash
symfony server:start
```

Ou avec PHP intégré :

```bash
php -S localhost:8000 -t public
```

## 📁 Structure du projet

```
├── assets/
│   ├── app/              # Assets pour la page d'accueil
│   ├── security/         # Assets pour login/register
│   └── shared/           # Styles et JS partagés
├── config/               # Configuration Symfony
├── public/               # Point d'entrée web
├── src/
│   ├── Controller/      # Contrôleurs
│   ├── Entity/          # Entités Doctrine
│   └── Repository/      # Repositories
└── templates/           # Templates Twig
```

## 🎨 Fonctionnalités

- ✅ Authentification complète (login/register)
- ✅ Protection des routes
- ✅ Design moderne et responsive avec palette verte
- ✅ Webpack Encore avec entries par page
- ✅ Base de données SQLite (création automatique)
- ✅ Structure modulaire des assets

## 📝 Pages disponibles

- `/` - Page d'accueil (protégée, nécessite authentification)
- `/login` - Page de connexion
- `/register` - Page d'inscription
- `/logout` - Déconnexion

## 🛠️ Commandes utiles

```bash
# Créer la base de données
php bin/console doctrine:schema:create

# Mettre à jour la base de données
php bin/console doctrine:schema:update --force

# Compiler les assets en production
npm run build

# Compiler les assets en développement (avec watch)
npm run watch
```

## 📦 Dépendances principales

- Symfony 6.4+/7.0
- Doctrine ORM
- Webpack Encore
- Bootstrap 5.3.3
- Sass

## ⚠️ Note importante

Le fichier `.env` doit être créé manuellement car il est souvent protégé par le système. Assurez-vous de le créer avant de lancer `composer install`.

