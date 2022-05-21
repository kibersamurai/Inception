FROM debian
LABEL maintainer="bprovolo"
RUN apt update && apt -y upgrade && apt install -y php-fpm php-mysql php-mbstring php-gd php-xml wget nano

COPY ./conf/ /var/www/
EXPOSE 9000
ENTRYPOINT ["/var/www/wp.sh"]
CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]
