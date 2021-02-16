FROM php:7.4-apache

COPY ./index.php /var/www/html

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R g+s /var/www/html
RUN chmod o-wx /var/www/html
RUN docker-php-ext-install mysqli

EXPOSE 80
