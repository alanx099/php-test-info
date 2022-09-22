FROM ubuntu 
RUN apt update 
RUN apt-get install -y apache2 
RUN apt clean 
COPY ./index.php /var/www/html/
EXPOSE 8080
CMD [“apache2ctl”, “-D”, “FOREGROUND”]