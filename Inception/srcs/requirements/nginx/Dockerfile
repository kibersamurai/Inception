FROM debian:buster
LABEL maintainer="bprovolo"
RUN apt-get update && apt-get install -y nginx openssl

EXPOSE 443

COPY ./conf/nginx.conf /etc/nginx/sites-enabled/nginx.conf
COPY ./tools/nginx.sh /var/www

CMD sh -c "sh /var/www/nginx.sh"
