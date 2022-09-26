FROM php:7.2-apache
LABEL maintainer=alan.hodak@infoscope.com
RUN sed -i 's/Listen 80/Listen 8080/1' /etc/apache2/ports.conf
EXPOSE 8080
COPY index.php /var/www/html/
USER www-data


