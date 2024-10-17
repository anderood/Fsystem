FROM php:8.0-cli

RUN apt-get update && apt-get install -y git curl zip vim libpng-dev libonig-dev libxml2-dev unzip

WORKDIR /var/www/html

COPY . .

RUN mv /var/www/html/.env.example /var/www/html/.env

RUN docker-php-ext-install pdo pdo_mysql

RUN pecl install xdebug && docker-php-ext-enable xdebug

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
