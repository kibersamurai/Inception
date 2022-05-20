FROM debian:buster
LABEL maintainer="bprovolo"
RUN apt update && apt install -y php-fpm php-mysql php-mbstring php-gd php-xml wget nano
COPY ./conf/ /var/www/
EXPOSE 9000
RUN chmod +x /var/www/wp_php.sh
ENTRYPOINT [ "/var/www/wp_php.sh" ]
CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]

