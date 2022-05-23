# FROM debian
# LABEL maintainer="bprovolo"
# RUN apt update && apt -y upgrade && apt install -y php-fpm php-mysql php-mbstring php-gd php-xml wget nano

# COPY ./conf/ /var/www/
# EXPOSE 9000
# ENTRYPOINT ["/var/www/wp.sh"]
# CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]

FROM debian:buster

RUN apt-get update
RUN apt-get -y install php7.3 php-mysqli php-fpm curl sendmail

EXPOSE 9000

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools /var/www/

CMD bash /var/www/wp.sh