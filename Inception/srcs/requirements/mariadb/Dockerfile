FROM debian:buster
LABEL maintainer="bprovolo"
RUN apt update && apt install -y mariadb-server net-tools
COPY ./conf/50-server.cnf  /etc/mysql/mariadb.conf.d/
COPY ./tools /
EXPOSE 3306
RUN service mysql start && mysql < createdb.sql && rm -f createdb.sql
CMD /usr/bin/mysqld_safe

