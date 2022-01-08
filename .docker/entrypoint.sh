#!/usr/bin/env bash
set -e

source .env

if [ -z "$APP_KEY" ]; then
    echo "No application key found, setting and then exiting. Please start again.";
    php artisan key:generate
    exit 1;
fi

php artisan storage:link

php artisan optimize

php artisan migrate --force --seed

exec docker-php-entrypoint "$@"
