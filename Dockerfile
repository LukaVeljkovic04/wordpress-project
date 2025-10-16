FROM wordpress:6.8.3-php8.1-apache
ENV WORDPRESS_DB_HOST=wordpress-baza-c:3306 \
    WORDPRESS_DB_USER=admin \
    WORDPRESS_DB_PASSWORD=admin \
    WORDPRESS_DB_NAME=domaci3a
COPY . /var/www/html/domaci3/wordpress-6.4.2/wordpress
VOLUME [ "/var/www/html" ]
EXPOSE 80
LABEL authors="Luka,Ivana"