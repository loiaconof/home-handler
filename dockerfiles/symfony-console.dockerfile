FROM php:8.3-fpm-alpine3.18

WORKDIR /var/www/html

ENTRYPOINT ["php", "bin/console", "$@"]