FROM php:8.2-fpm

# Ustawienia środowiskowe
ENV PHP_IDE_CONFIG="serverName=localhost"

# Instalujemy rozszerzenia
RUN docker-php-ext-install pdo pdo_mysql

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zlib1g-dev \
    libzip-dev \
    && docker-php-ext-install zip

# Skopiuj Composer z oficjalnego obrazu
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Przekopiuj aplikację (tylko jeśli nie montujesz wolumenów)
WORKDIR /var/www/html

# Komenda startowa: uruchomienie wbudowanego serwera PHP
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
