#!/bin/sh

# Wait for MySQL to be ready
until nc -z mysql 3306; do
  echo "⏳ Waiting for MySQL..."
  sleep 2
done

# Run migrations
php artisan migrate --force

# Start PHP-FPM
exec php-fpm