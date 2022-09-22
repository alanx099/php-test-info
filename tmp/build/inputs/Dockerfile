FROM ubuntu/apache2:2.4-22.04_beta
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y software-properties-common 
RUN apt-get update -y
RUN add-apt-repository -y ppa:ondrej/php
RUN apt-get update -y
RUN apt-get install -y php7.2 libapache2-mod-php7.2 php7.2-common php7.2-curl php7.2-mbstring php7.2-xmlrpc php7.2-mysql php7.2-gd php7.2-xml php7.2-intl php7.2-ldap php7.2-imagick php7.2-json php7.2-cli
WORKDIR /var/www/html
COPY tmp/build/inputs/index.php /var/www/html/
RUN a2enmod rewrite
RUN a2enmod php7.2
RUN a2enmod lbmethod_byrequests
CMD ["apachectl","-D","FOREGROUND"]
EXPOSE 8080
EXPOSE 8443
