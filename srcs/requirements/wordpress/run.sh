#!/bin/sh
dockerize -wait tcp://mariadb:3306 -timeout 10s
dockerize -wait tcp://redis:6379 -timeout 10s
if [ ! -d /var/www/html/wordpress ];
then
	wget -P /tmp https://fr.wordpress.org/wordpress-6.0.2-fr_FR.tar.gz
	tar -zxf /tmp/wordpress-6.0.2-fr_FR.tar.gz --directory /var/www/html;
	mv /tmp/wp-config.php /var/www/html/wordpress
	cd /var/www/html/wordpress;
	chgrp -R www-data .;
	chown -R www-data .;
	#install & config wp
	dockerize -wait tcp://mariadb:3306 -timeout 10s
	wp core install --url=https://gchopin.42.fr --title="Inception" --admin_user=$WP_ADM --admin_password=$WP_ADM_PSW --admin_email=$WP_ADM@student.42.fr --allow-root;
	wp user create $WP_USR $WP_USR@mail.com --user_pass=$WP_USR_PSW --role=editor --allow-root
	dockerize -wait tcp://redis:6379 -timeout 10s
	wp plugin install redis-cache --activate --allow-root
	wp redis enable --allow-root
	chgrp -R www-data .;
	chown -R www-data .;
	cd /;
	rm -rf /tmp/wordpress-6.0.2-fr_FR.tar.gz
fi
exec /usr/sbin/php-fpm7.3 -F
