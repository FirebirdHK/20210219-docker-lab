FROM php:7.2-apache

RUN apt-get update && \
    apt-get install -y inetutils-ping && \
    rm -rf /var/lib/apt/lists/*

COPY app/ /var/www/html
RUN chown -R root:root /var/www/html && \
    chmod -R a-w /var/www/html

COPY php.ini /usr/local/etc/php/conf.d

RUN echo "flag{cmdi_demo_1}" > /flag
