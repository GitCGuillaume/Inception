FROM debian:10.12
LABEL user="gchopin"
LABEL email="gchopin@student.42.fr"
volume	/var/www/html
expose 9000
RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install dialog -y && apt-get install libterm-readkey-perl -y
RUN apt-get install -y php7.3 php7.3-common php7.3-fpm php7.3-zip php7.3-mbstring php7.3-curl \
	 php7.3-xml php7.3-cgi php7.3-mysql php-redis
RUN apt-get install wget -y
COPY run.sh /usr/bin
COPY conf/php-fpm.conf /etc/php/7.3/fpm/php-fpm.conf
COPY conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf
COPY conf/wp-config.php /tmp
#need to mkdir /run/php otherwise pid with no daemonize won't be created
RUN chmod 550 /usr/bin/run.sh && mkdir /run/php
RUN chown -R www-data /tmp/wp-config.php && chgrp -R www-data /tmp/wp-config.php
RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
	&& chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp
RUN wget https://github.com/jwilder/dockerize/releases/download/v0.6.1/dockerize-linux-amd64-v0.6.1.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-linux-amd64-v0.6.1.tar.gz \
    && rm dockerize-linux-amd64-v0.6.1.tar.gz
RUN sed -i '/upload_max_filesize = 2M/c\upload_max_filesize = 10M' /etc/php/7.3/fpm/php.ini
ENTRYPOINT ["/usr/bin/run.sh"]
