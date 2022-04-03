#FROM php:7.3-fpm-alpine
FROM php:7.3-fpm

#RUN apk add --no-cache $PHPIZE_DEPS \
#    && pecl install xdebug-3.1.2 \
#    && docker-php-ext-enable xdebug

#RUN pecl install xdebug \
#    && docker-php-ext-enable xdebug

#COPY xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

#RUN docker-php-ext-install mysqli pdo pdo_mysql

#RUN apt-get install -y default-mysql-client
#RUN apt-get install -y librabbitmq-dev
#RUN apt-get install -y libssh-dev
#RUN pecl install amqp
#RUN docker-php-ext-enable amqp

#RUN apt-get -qq -y install libicu-dev

#RUN docker-php-ext-install bcmath
#RUN docker-php-ext-install gd
#RUN docker-php-ext-install intl
#RUN docker-php-ext-install opcache
#RUN docker-php-ext-install sockets
#RUN docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php \
        && mv composer.phar /usr/local/bin/ \
        && ln -s /usr/local/bin/composer.phar /usr/local/bin/comp

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /

ENV PATH="~/.composer/vendor/bin:./vendor/bin:${PATH}"

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

RUN apt-get install -y libxml2-dev
RUN docker-php-ext-install soap

EXPOSE 6001