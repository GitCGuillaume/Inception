#!/bin/sh
sed -i "/# requirepass foobared/c\requirepass $REDIS_PSW" /etc/redis/redis.conf
exec "$@"
