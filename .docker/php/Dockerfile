FROM php:8-fpm-alpine3.12
WORKDIR /var/www/php
# RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install mysqli pdo pdo_mysql && chmod -R 755 /var/www/php/ && rm -Rf /var/www/php/storage/views/cache