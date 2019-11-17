FROM php:apache

RUN apt-get update
RUN apt-get install -y git zip libxml2-dev wget vim libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN docker-php-ext-install mysqli mbstring pdo pdo_mysql xml pcntl \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd


RUN echo "alias ll='ls -lrat'" >> /root/.bashrc
RUN echo "export LS_OPTIONS='--color=auto'" >> /root/.bashrc
RUN echo "alias ls='ls \$LS_OPTIONS'" >> /root/.bashrc

WORKDIR /var/www/html
