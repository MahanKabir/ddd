
FROM php:8.2-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql bcmath

RUN apk add --no-cache --virtual .persistent-deps \
    autoconf \
    g++ \
    make \
    jpeg-dev \
    libjpeg-turbo \
    libxml2-dev \
    libpng-dev \
    libzip-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    git

RUN apk add --no-cache --update && apk add --no-cache --virtual .build-deps $PHPIZE_DEPS \
    imagemagick-dev \
    libheif \
    openssl-dev

RUN pecl install imagick \
    && docker-php-ext-enable imagick

RUN docker-php-ext-configure soap --enable-soap \
    && docker-php-ext-install soap

RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j$(nproc) gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Laravel Envoy
RUN composer global require "laravel/envoy=~1.0"
