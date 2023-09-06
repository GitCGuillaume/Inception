#!/bin/sh
dockerize -wait tcp://mariadb:3306 -timeout 15s
dockerize -wait tcp://wordpress:9000 -timeout 90s
dockerize -wait tcp://nginx:443 -timeout 15s
dockerize -wait tcp://redis:6379 -timeout 15s
dockerize -wait tcp://website:9001 -timeout 15s
dockerize -wait tcp://adminer:9002 -timeout 15s
exec "$@"
