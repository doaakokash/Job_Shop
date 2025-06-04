FROM php:8.2-apache
COPY . /var/www/html
RUN docker-php-ext-install pdo pdo_mysql
RUN chmod -R 775 storage bootstrap/cache
RUN a2enmod rewrite