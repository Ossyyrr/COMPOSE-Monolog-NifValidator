# Instrucciones

Este repositorio contiene los pasos para crear una imagen de docker que contenga php, extensiones para la BBDD y alguna más para tratar con imágenes.

Igualmente tiene composer instalado y el instalador de symfony.

### Creación de la imagen

**docker build -t php-apache-upgrade .**

### Ejecución del contenedor   (parar el que este abierto si falla)

Para ejecutar el contenedor, id a cualquier directorio (vacío si vamos a crear por primera vez nuestra aplicación Symfony) y ejecutad lo siguiente (el puerto y el volumen lo podéis configurar como querais):

**docker run -it --rm -p 8080:80 -v "$PWD":/application --name php-apache-upgrade php-apache-upgrade bash**

Y la manera sencilla de levantar un servidor web es utilizar el servidor embebido en php (ideal para desarrollo): 

**php -S 0.0.0.0:80 -t public**


**docker exec -it php-apache-upgrade bash**


# ahora se puede instalar composer: 

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"


# PARA EJECUTARLO:
./composer.phar 






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
