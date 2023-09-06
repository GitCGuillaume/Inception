FROM debian:10.12
LABEL user="gchopin"
LABEL email="gchopin@student.42.fr"
volume	/var/lib/mysql
expose 9000
RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install dialog -y && apt-get install libterm-readkey-perl -y && apt-get install -y procps
RUN apt-get install mariadb-server -y
COPY run.sh /usr/bin
COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/.
RUN chmod 550 /usr/bin/run.sh && chmod 644 /etc/mysql/mariadb.conf.d/50-server.cnf
ENTRYPOINT ["/usr/bin/run.sh"]
