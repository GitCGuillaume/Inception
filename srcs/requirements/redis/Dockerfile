FROM debian:10.12
LABEL user="gchopin"
LABEL email="gchopin@student.42.fr"
expose 6379
RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install dialog -y && apt-get install libterm-readkey-perl -y
RUN apt-get install -y redis php-redis
COPY ./redis.conf /etc/redis/redis.conf
COPY run.sh /usr/bin
RUN chmod 550 /usr/bin/run.sh
RUN chmod 644 /etc/redis/redis.conf
ENTRYPOINT ["/usr/bin/run.sh"]
CMD ["redis-server", "/etc/redis/redis.conf"]
