FROM php:7.3-apache
LABEL maintainer=alan.hodak@infoscope.com
RUN sed -i 's/Listen 80/Listen 8080/1' /etc/apache2/ports.conf
RUN sed -i 's/Listen 443/Listen 8443/1' /etc/apache2/ports.conf
RUN sed -i 's/AllowOverride None/AllowOverride All/2' /etc/apache2/apache2.conf
RUN echo "ServerSignature Off" >> /etc/apache2/apache2.conf
RUN echo "ServerTokens Prod" >> /etc/apache2/apache2.conf
RUN echo "expose_php = off" >> 	/usr/local/etc/php/php.ini
COPY 000-default.conf /etc/apache2/sites-available
RUN a2ensite 000-default

RUN a2enmod rewrite
RUN apt-get update -y

RUN apt-get install -y libpq-dev \
  && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
  && docker-php-ext-install pdo pdo_pgsql pgsql

EXPOSE 8080
EXPOSE 8443
COPY . /var/www/html/
RUN chown -R www-data:www-data /var
RUN chmod -R 0777 /var
USER www-data
