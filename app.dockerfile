FROM php:7.4-fpm-alpine

ARG UID

WORKDIR /var/www/html

RUN curl -LO "https://github.com/charmbracelet/gum/releases/download/v0.5.0/gum_0.5.0_linux_386.apk"

RUN apk add --update --allow-untrusted npm gum_0.5.0_linux_386.apk

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP extensions end

RUN addgroup -g ${UID} cal-user && adduser -G cal-user -g shell-user -s /bin/sh -D shell-user


USER shell-user
