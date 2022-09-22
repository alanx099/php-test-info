FROM ubuntu/apache2:2.4-22.04_beta
WORKDIR /var/www/html
COPY ./index.php /var/www/html/
COPY ./ports.conf /etc/apache2/ports.conf
RUN a2enmod rewrite
RUN a2enmod lbmethod_byrequests
EXPOSE 8080
EXPOSE 8443
