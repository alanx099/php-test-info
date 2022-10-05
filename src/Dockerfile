FROM php:7.2-apache
LABEL maintainer=alan.hodak@infoscope.com
RUN sed -i 's/Listen 80/Listen 8080/1' /etc/apache2/ports.conf
RUN sed -i 's/Listen 443/Listen 8443/1' /etc/apache2/ports.conf
RUN apt-get update -y
RUN apt-get install iputils-ping -y
EXPOSE 8080
EXPOSE 8443
COPY . /var/www/html/
USER www-data