#!/bin/sh

if [ ! -d /var/www/html/website ];
then
	mkdir -p /var/www/html/website
	mv /tmp/stylesheet.css /var/www/html/website/.
	mv /tmp/index.html /var/www/html/website/.
	cp -r /tmp/pictures /var/www/html/website/.
	rm -r /tmp/pictures
	chgrp -R www-data /var/www/html;
	chown -R www-data /var/www/html;
fi
exec "$@"
