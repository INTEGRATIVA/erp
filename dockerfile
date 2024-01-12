FROM php:8.3.2RC1-zts-alpine3.19

WORKDIR /var/www/html

RUN apk update
RUN curl -sS https://getcomposer.org/installer | php -- --version=2.4.3 --install-dir=/usr/local/bin --filename=composer

COPY . .
RUN composer install

CMD ["php","artisan","serve","--host=0.0.0.0"]

# sudo apt install openssl php8.1-bcmath php8.1-curl php8.1-json php8.1-mbstring php8.1-mysql php8.1-tokenizer php8.1-xml php8.1-zip
