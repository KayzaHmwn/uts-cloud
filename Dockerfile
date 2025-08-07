FROM php:8.2-apache

# Install ekstensi mysqli
RUN docker-php-ext-install mysqli

# Salin file aplikasi ke direktori Apache
COPY . /var/www/html/

EXPOSE 80
