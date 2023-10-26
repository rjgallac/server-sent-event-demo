FROM php:8.0-apache
WORKDIR /var/www/html

COPY index.html index.html
COPY demo_sse.php demo_sse.php
# COPY src/ src
EXPOSE 80