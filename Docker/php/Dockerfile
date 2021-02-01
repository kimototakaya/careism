FROM php:7.2-apache

# apacheの設定
ENV APACHE_DOCUMENT_ROOT /var/www/html/app/webroot
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
&& sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
&& a2enmod rewrite

# cakephpインストール用にインストール、phpのエクステンションはdocker-php-ext-installでインストールする
RUN apt-get update && apt-get install -y \
    libicu-dev \
    zip \
    unzip \
    libpq-dev \
&& docker-php-ext-install -j$(nproc) intl \
&& docker-php-ext-install -j$(nproc) pdo_pgsql
RUN ln -sf /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

COPY . /var/www/html

# composerのインストール
ENV COMPOSER_ALLOW_SUPERUSER 1
COPY --from=composer:1.7 /usr/bin/composer /usr/bin/composer