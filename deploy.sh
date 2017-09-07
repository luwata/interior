#!/usr/bin/env bash

USERNAME='root'
PASSWORD=''
DBNAME='robot'
HOST='localhost'

USER_USERNAME='admin'
USER_PASSWORD='admin'
ENCODAGE='utf8mb4'
INTERCLASSEMENT='utf8mb4_unicode_ci'

MySQL=$(cat <<EOF
DROP DATABASE IF EXISTS $DBNAME;
CREATE DATABASE $DBNAME DEFAULT CHARACTER SET $ENCODAGE COLLATE $INTERCLASSEMENT;
DELETE FROM mysql.user WHERE user='$USER_USERNAME' and host='$USER_PASSWORD';
GRANT ALL PRIVILEGES ON $DBNAME.* to '$USER_USERNAME'@'$HOST' IDENTIFIED BY '$USER_PASSWORD' WITH GRANT OPTION;
EOF
)

# Le pipe permet de récupérer la chaîne des commandes SQL qui seront éxécuté par mysql en mode administrateur
echo $MySQL | mysql --user=$USERNAME --password=$PASSWORD

# On lance maintenant les migrations et les seeders
echo "Migrations and seeders..."
php artisan migrate:refresh --seed

