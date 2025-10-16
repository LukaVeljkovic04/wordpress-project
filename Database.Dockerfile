FROM mysql:9.4.0
ENV MYSQL_ROOT_PASSWORD=root \
          MYSQL_DATABASE=domaci3a \
          MYSQL_USER=admin \
          MYSQL_PASSWORD=admin
COPY ./domaci3a.sql /data/domaci3a.sql
EXPOSE 3306
VOLUME ["/var/lib/mysql"]