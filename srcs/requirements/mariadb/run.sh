#!/bin/sh
mkdir /run/mysqld
chown -R mysql /run/mysqld
chgrp -R mysql /run/mysqld
if [ ! -d /var/lib/mysql/Wordpress ];
then
	chown -R mysql /var/lib/mysql
	chgrp -R mysql /var/lib/mysql
	/usr/bin/mysql_install_db --user=mysql --datadir='/var/lib/mysql'
	mysqld --user=mysql --datadir='/var/lib/mysql' &
	sleep 2
	mariadb -u root <<EOF
UPDATE mysql.user SET Password=PASSWORD('${SQL_ROOT_PSW}') WHERE User='root';
UPDATE mysql.user SET plugin='mysql_native_password' WHERE User='root';
DELETE FROM mysql.user WHERE User='';
#disallow root login from remote
DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');
DROP DATABASE IF EXISTS test;
DELETE FROM mysql.db WHERE Db='test' OR Db='test\\_%';
FLUSH PRIVILEGES;
EOF
	mariadb -u root -p${SQL_ROOT_PSW} << EOF
CREATE DATABASE IF NOT EXISTS Wordpress;
CREATE USER IF NOT EXISTS '${SQL_USR}'@'%' IDENTIFIED BY '${SQL_PSW}';
GRANT ALL PRIVILEGES on Wordpress.* to '${SQL_USR}'@'%';
FLUSH PRIVILEGES;
EOF
	echo "User created"
	pkill mysql
fi
exec mysqld --user=mysql --datadir='/var/lib/mysql'
