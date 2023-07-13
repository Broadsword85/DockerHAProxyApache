#FROM httpd:latest
FROM php:7-apache

RUN set -x && \
  apt-get -y update && \
  apt-get install -y libpq-dev \
  && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
  && docker-php-ext-install pdo pdo_pgsql pgsql