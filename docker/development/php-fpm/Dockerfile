FROM php:8.1-fpm-alpine

RUN apk add --no-cache autoconf g++ make postgresql-dev freetype-dev libjpeg-turbo-dev libpng-dev libzip-dev fcgi git \
    && docker-php-ext-install pdo pdo_mysql \
    && apk del libzip-dev


#compile Yaf
RUN pecl install -f yaf-3.3.5

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini
RUN echo 'extension=yaf.so' >> $PHP_INI_DIR/php.ini
RUN echo 'yaf.use_spl_autoload = 1' >> $PHP_INI_DIR/php.ini
RUN echo 'yaf.use_namespace = 1' >> $PHP_INI_DIR/php.ini
RUN echo 'yaf.name_suffix = 1' >> $PHP_INI_DIR/php.ini
RUN echo 'yaf.name_separator = \' >> $PHP_INI_DIR/php.ini
RUN echo 'yaf.library = /library' >> $PHP_INI_DIR/php.ini

#COPY ./common/php/php.ini /usr/local/etc/php/php.ini
COPY ./common/php/conf.d /usr/local/etc/php/conf.d
COPY ./common/php/php-fpm.d /usr/local/etc/php-fpm.d

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --quiet

WORKDIR /app