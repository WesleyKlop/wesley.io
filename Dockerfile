FROM node:alpine as front-builder
WORKDIR /app

COPY package.json yarn.lock webpack.mix.js .babelrc ./
RUN yarn --frozen-lockfile

COPY resources ./resources
RUN yarn production

FROM composer:latest as back-builder
WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install \
    --ignore-platform-reqs \
    --no-ansi \
    --no-autoloader \
    --no-dev \
    --no-interaction \
    --no-scripts

COPY . .
RUN composer dump-autoload --optimize --classmap-authoritative

# Build app image
FROM php:apache

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/
RUN install-php-extensions opcache pgsql pdo_pgsql bcmath mysqli pdo_mysql

RUN a2enmod rewrite

ADD .docker/apache.conf /etc/apache2/sites-available/000-default.conf
ADD .docker/php.ini ${PHP_INI_DIR}/conf.d/99-overrides.ini

WORKDIR /app
COPY --from=back-builder /app /app
# For some reason this does not work properly
COPY --from=front-builder /app/public /app/public
COPY --from=front-builder /app/fonts /app/public/fonts
COPY --from=front-builder /app/images /app/public/images
COPY --from=front-builder /app/mix-manifest.json /app/public/mix-manifest.json

RUN chgrp -R www-data /app/storage /app/bootstrap/cache && chmod -R ug+rwx /app/storage /app/bootstrap/cache
