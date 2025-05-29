Système de Gestion des Clients

Un système de gestion des clients développé avec Laravel, offrant une interface utilisateur moderne et intuitive pour gérer les informations des clients.

## Fonctionnalités

-  Liste des clients avec recherche en temps réel
-  Ajout de nouveaux clients
-  Modification des informations clients
-  Suppression de clients
-  recherche des clients


## Technologies Utilisées
- Backend: Laravel 10.x
- Frontend: Blade Templates, Bootstrap 5
- Base de données: MySQL
- Style: CSS personnalisé

## Prérequis
- PHP >= 8.1
- Composer
- MySQL
- Serveur web (Apache/Nginx)

## Installation
1. Cloner le repository
```bash
git clone [URL_DU_REPO]
```

2. Installer les dépendances
```bash
composer install
```

3. Configurer le fichier .env
```bash
cp .env.example .env
```

4. Générer la clé d'application
```bash
php artisan key:generate
```

5. Configurer la base de données dans le fichier .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=votre_base_de_donnees
DB_USERNAME=votre_utilisateur
DB_PASSWORD=votre_mot_de_passe
```

6. Exécuter les migrations
```bash
php artisan migrate
```

7. Démarrer le serveur
```bash
php artisan serve
```

## Structure du Projet

```
backend-api/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── CustomerController.php
│   └── Models/
│       └── Customer.php
├── resources/
│   └── views/
│       └── customers/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
└── routes/
    └── web.php
```

## Fonctionnalités Détaillées

### Gestion des Clients
- Affichage de la liste des clients avec pagination
- Recherche par nom, email ou téléphone
- Ajout de nouveaux clients avec validation des données
- Modification des informations clients existants
- Suppression de clients avec confirmation

### Interface Utilisateur
- Design moderne et épuré
- Interface responsive adaptée à tous les appareils
- Formulaires intuitifs avec validation en temps réel
- Messages de confirmation pour les actions importantes
