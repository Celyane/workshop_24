## Projet workshop

### Prérequis :
- **Système d'exploitation** : Linux/Windows/macOS
- **PHP** : Version 8.0 ou supérieure
- **Base de données** : MariaDB ou autre
- **Composer** : Le gestionnaire de dépendances PHP
- **Git** : Si le projet est versionné

### Étapes :
1. **Installer Composer:**
2. ```bash
   composer install
3. **Créer la base de données et migrer les tables:** 
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
