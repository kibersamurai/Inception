FROM debian
LABEL maintainer="bprovolo"
RUN apt update && apt install -y mariadb-server nano curl net-tools
COPY db.sh  /var/www/
EXPOSE 3306
RUN chmod +x /var/www/db.sh
ENTRYPOINT [ "/var/www/db.sh" ]
CMD ["mysqld"]

