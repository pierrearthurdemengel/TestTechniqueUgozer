🌟 Projet Blog avec Laravel et Vue.js
Bienvenue dans le projet Blog, une application web de blog construite avec Laravel pour le backend et Vue.js pour le frontend. 
Ce document vous guidera à travers les étapes pour installer et configurer le projet.

📑 Table des matières
Prérequis
Installation
Configuration
Migrations et Seeds
Lancement du Serveur
Tests
Dépannage


🛠️ Prérequis
Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

PHP >= 8.0
Composer
Node.js et npm
MySQL ou un autre serveur de base de données compatible
Laravel Installer (facultatif, mais recommandé)


🚀 Installation
Suivez les étapes ci-dessous pour installer le projet sur votre machine locale.

1. Cloner le dépôt
Clonez le dépôt GitHub sur votre machine locale en utilisant la commande suivante :
git clone https://github.com/nom-utilisateur/nom-du-projet.git
cd nom-du-projet

2. Installer les dépendances
Installez les dépendances PHP avec Composer :
composer install
Installez les dépendances JavaScript avec npm :
npm install

3. Créer le fichier .env
Copiez le fichier .env.example pour créer un nouveau fichier .env :
cp .env.example .env

4. Générer la clé de l'application
Générez une clé de l'application pour votre fichier .env :
php artisan key:generate


🔧 Configuration
1. Configurer la base de données
Ouvrez le fichier .env et configurez les paramètres de votre base de données. Exemple pour MySQL :
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_la_base_de_données
DB_USERNAME=nom_d_utilisateur
DB_PASSWORD=mot_de_passe

2. Configurer le serveur de fichiers
Assurez-vous que le lien symbolique pour le stockage est créé :
php artisan storage:link


🌱 Migrations et Seeds
1. Exécuter les migrations
Les migrations créent les tables nécessaires dans la base de données. Exécutez les commandes suivantes pour effectuer les migrations :
php artisan migrate

2. Exécuter les seeds
Les seeds peuplent la base de données avec des données initiales. Exécutez les commandes suivantes pour exécuter les seeds :
php artisan db:seed


💻 Lancement du Serveur
1. Lancer le serveur Laravel
Pour lancer le serveur Laravel, utilisez la commande suivante :
php artisan serve
Le serveur sera accessible sur http://localhost:8000.

2. Lancer le serveur de développement Vite.js
Pour lancer le serveur de développement Vite.js, utilisez la commande suivante :
npm run dev
Vous pouvez accéder à l'application à l'adresse indiquée par Vite.js.


✅ Tests
Pour exécuter les tests de l'application, utilisez la commande suivante :
php artisan test

🔍 Dépannage
Problèmes de migrations
Si vous rencontrez des erreurs lors des migrations, assurez-vous que la table n'existe pas déjà dans la base de données. Vous pouvez supprimer la table manuellement ou réinitialiser la base de données.

Problèmes de dépendances
Si vous rencontrez des problèmes avec les dépendances PHP ou JavaScript, essayez de supprimer le dossier vendor ou node_modules et de réinstaller les dépendances avec composer install ou npm install.

Problèmes de cache
Si des changements dans votre code ne sont pas pris en compte, essayez de vider les caches avec les commandes suivantes :

php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

Ceci conclut la procédure d'installation et de configuration de base pour le projet. Pour toute question ou assistance supplémentaire, n'hésitez pas à consulter la documentation officielle de Laravel et Vue.js ou à me contacter.

Ce guide devrait vous aider à bien démarrer avec votre projet. Pour toute question ou suggestion pour améliorer ce guide, n'hésitez pas à les partager ! 😊
