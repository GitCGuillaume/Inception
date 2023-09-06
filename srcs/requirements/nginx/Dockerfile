FROM debian:10.12
LABEL user="gchopin"
LABEL email="gchopin@student.42.fr"
expose 443
RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install dialog -y && apt-get install libterm-readkey-perl -y && apt-get install -y nginx && apt-get install openssl -y
#man openssl man req
RUN openssl req -newkey rsa:2048 -nodes -days 365 -x509 -keyout /etc/nginx/certificate.key -out /etc/nginx/certificate.crt -subj "/C=FR/ST=FR/L=PARIS/O=GC/OU=GC/CN=GC/"
COPY conf/default /etc/nginx/sites-enabled/default
volume	/var/www/html
RUN rm /var/www/html/index.nginx-debian.html;
ENTRYPOINT ["nginx", "-g", "daemon off;"]
