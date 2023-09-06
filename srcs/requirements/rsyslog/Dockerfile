FROM debian:10.12
LABEL user="gchopin"
LABEL email="gchopin@student.42.fr"
RUN apt-get update -y && apt-get upgrade -y && apt-get install rsyslog -y && apt-get install -y wget
RUN wget https://github.com/jwilder/dockerize/releases/download/v0.6.1/dockerize-linux-amd64-v0.6.1.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-linux-amd64-v0.6.1.tar.gz \
    && rm dockerize-linux-amd64-v0.6.1.tar.gz
COPY rsyslog.conf /etc/rsyslog.conf
COPY entrypoint.sh /usr/bin/.
RUN chmod +x /usr/bin/entrypoint.sh
ENTRYPOINT ["/usr/bin/entrypoint.sh"]
CMD ["rsyslogd", "-n"]
