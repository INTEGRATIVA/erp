FROM php:8.2-fpm

ARG user
ARG uid

RUN apt update && apt install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev
RUN apt clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /var/www


USER $user

# FROM php:8.3.2RC1-zts-alpine3.19

# WORKDIR /var/www/html

# RUN apk update
# RUN curl -sS https://getcomposer.org/installer | php -- --version=2.4.3 --install-dir=/usr/local/bin --filename=composer

# COPY . .
# RUN composer install

# CMD ["php","artisan","serve","--host=0.0.0.0"]

# sudo apt install openssl php8.1-bcmath php8.1-curl php8.1-json php8.1-mbstring php8.1-mysql php8.1-tokenizer php8.1-xml php8.1-zip
