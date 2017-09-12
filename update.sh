#Mise à jour du projet
git pull origin master

#Install et mise à jour des dépendances
composer install

#mise à jour de la BDD
php bin/console d:s:u --force

#vide le cache
php bin/console c:c
