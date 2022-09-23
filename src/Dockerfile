FROM php:7.2-apache 
LABEL summary="Opis" \
      description="Opis" \
      io.k8s.description="${DESCRIPTION}" \
      io.k8s.display-name="Apache 2.4 with PHP ${PHP_VERSION}" 
COPY ./index.php /var/www/html/
EXPOSE 8080
