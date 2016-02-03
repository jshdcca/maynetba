FROM php:5.6-apache
MAINTAINER jshdcca@gmail.com

# install needed stuff - included mysql tools just incase

RUN apt-get update && apt-get install -y libpng12-dev libjpeg-dev mysql-client && rm -rf /var/lib/apt/lists/* \
	&& docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
	&& docker-php-ext-install gd mysqli opcache

# inject project files into docker instance

COPY src/ /var/www/html/
RUN rm -f /var/www/html/index.html

# permissions

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
