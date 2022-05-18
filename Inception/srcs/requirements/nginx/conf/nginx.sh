#!/usr/bin/env bash

openssl req -new -x509 -days 365 -key ca.key -out ca.crt -subj "/C=RU/ST=Kazan/L=Kazan/O=School 21/OU=bprovolo/CN=bprovolo.42.fr/emailAddress=bprovolo@student.21-school.ru"
if [ -f /var/www/nginx.conf ]; then
mv /var/www/nginx.conf /etc/nginx/sites-available/default
fi
echo "Starting nginx""
chown -R www-data:www-data /var/www/*
chmod -R 755 /var/www/*
exec "$@"
