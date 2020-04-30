FROM php:7.4-fpm
RUN ["mkdir", "-p", "/var/www/html"]
RUN ["chmod", "777", "/var/www/html"]
RUN apt-get update && \
apt-get install -y libonig-dev libxml2-dev && \
docker-php-ext-install pdo_mysql mysqli mbstring dom simplexml iconv


#gdinstall
RUN apt-get install -y wget libjpeg-dev libfreetype6-dev
RUN apt-get install -y  libmagick++-dev \
libmagickwand-dev \
libpq-dev \
libfreetype6-dev \
libjpeg62-turbo-dev \
libpng-dev \
libwebp-dev \
libxpm-dev
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install -j$(nproc) gd

#curl mcrypt fileinfo install
RUN apt-get install -y libmcrypt-dev libcurl3-dev libzip-dev zlib1g-dev && \
pecl install mcrypt-1.0.3 && \
docker-php-ext-install curl && \
docker-php-ext-enable mcrypt && \
docker-php-ext-install fileinfo

#zip 7.4 not support zip archive
RUN apt-get install -y libzip-dev && \
docker-php-ext-install zip

COPY concrete5-8.5.2/ /var/www/html/

