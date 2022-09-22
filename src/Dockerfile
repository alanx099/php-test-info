FROM ubuntu 
RUN apt update 
RUN apt-get install -y apache2 
COPY ./index.php /var/www/html/
EXPOSE 8080
CMD ["apachectl", "-D", "FOREGROUND"]