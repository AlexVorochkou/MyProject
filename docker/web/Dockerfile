FROM php:7.2-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN export TERM=xterm

RUN docker-php-ext-install pdo_mysql mysqli

RUN apt-get update

RUN apt-get install -y \
        git \
        sudo \
        nodejs

RUN curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -
RUN apt-get update && apt-get install -y nodejs

RUN node -v

RUN pear config-set preferred_state alpha && \
    pecl install xdebug

RUN echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=true" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=true" >> /usr/local/etc/php/conf.d/xdebug.ini

RUN npm install

RUN npm -v

RUN curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -
RUN apt-get install libsodium-dev -y