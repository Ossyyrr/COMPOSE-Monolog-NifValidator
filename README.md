A partir de la imagen ya creada de la carpeta COMPOSER:


docker run -v $PWD:/var/www/html -d -p 8000:80 --rm --name ejercicio-monolog php-apache-upgrade

docker exec -it ejercicio-monolog bash

composer init

composer require monolog/monolog

composer require ulabox/nif-validator

composer install



composer.json generado:

{
    "name": "root/html",
    "require": {
        "monolog/monolog": "^2.0",
        "ulabox/nif-validator": "^1.2"
    }
}

composer install genera el composer.lock
