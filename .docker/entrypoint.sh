#!/usr/bin/env bash
set -e

if test -f ".env"; then
    source .env
fi

if [ -z "$APP_KEY" ]; then
    echo >&2 "No application key found, exiting."
    exit 1
fi

php artisan storage:link

php artisan optimize

php artisan migrate --force --seed

exec docker-php-entrypoint "$@"
