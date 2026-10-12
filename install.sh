#!/usr/bin/env bash
# Installer sekali jalan (Linux/macOS). Butuh PHP + Composer.
set -e
NAME=eka-portfolio
cd "$(dirname "$0")"
[ -d "../$NAME" ] || composer create-project laravel/laravel "../$NAME"
cp -r routes resources public "../$NAME/"
cd "../$NAME"
sed -i.bak 's/SESSION_DRIVER=database/SESSION_DRIVER=file/' .env && rm -f .env.bak
php artisan view:clear
php artisan serve
