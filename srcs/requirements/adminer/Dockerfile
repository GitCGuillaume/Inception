FROM debian:10.12
LABEL user="gchopin"
LABEL email="gchopin@student.42.fr"
VOLUME /var/www/html
RUN apt-get update -y && apt-get upgrade -y && apt-get install wget -y
RUN mkdir -p /run/php
RUN apt-get install -y php7.3 php7.3-common php7.3-fpm php7.3-cgi php7.3-mysql
RUN wget -P /tmp https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1-en.php
COPY php-fpm.conf /etc/php/7.3/fpm/php-fpm.conf
COPY www.conf /etc/php/7.3/fpm/pool.d/www.conf
COPY entrypoint.sh /usr/bin
RUN chmod +x /usr/bin/entrypoint.sh
ENTRYPOINT ["/usr/bin/entrypoint.sh"]
CMD ["/usr/sbin/php-fpm7.3", "-F"]
