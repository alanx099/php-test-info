FROM ubuntu 
RUN apt update 
RUN apt-get install -y apache2 
COPY ./index.php /var/www/html/
ENV APACHE_RUN_USER                         www-data
ENV APACHE_RUN_GROUP                        www-data
ENV APACHE_LOG_DIR                          /var/log/apache2
ENV APACHE_PID_FILE                         /var/run/apache2.pid
ENV APACHE_RUN_DIR                          /var/run/apache2
ENV APACHE_LOCK_DIR                         /var/lock/apache2
ENV APACHE_SERVER_ADMIN                     admin@localhost
ENV APACHE_SERVER_NAME                      localhost
ENV APACHE_SERVER_ALIAS                     docker.localhost
ENV APACHE_DOCUMENT_ROOT                    /var/www/html

ENV APACHE_WORKER_START_SERVERS             3
ENV APACHE_WORKER_MIN_SPARE_THREADS         2
ENV APACHE_WORKER_MAX_SPARE_THREADS         10
ENV APACHE_WORKER_THREAD_LIMIT              64
ENV APACHE_WORKER_THREADS_PER_CHILD         25
ENV APACHE_WORKER_MAX_REQUEST_WORKERS       4
ENV APACHE_WORKER_MAX_CONNECTIONS_PER_CHILD 0

ENV DEBIAN_FRONTEND noninteractive

# Update the package repository
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y wget curl locales apache2 tzdata m4 && \
    apt-get clean

EXPOSE 8080
CMD ["apachectl", "-D", "FOREGROUND"]