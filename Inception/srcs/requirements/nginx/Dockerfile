FROM debian:buster
LABEL maintainer="bprovolo"
RUN apt update && apt install -y nginx openssl nano curl net-tools
COPY ./conf/ /var/www/
EXPOSE 8080
RUN chmod +x /var/www/nginx.sh
ENTRYPOINT [ "/var/www/nginx.sh" ]
CMD ["nginx", "-g", "daemon off;"]

