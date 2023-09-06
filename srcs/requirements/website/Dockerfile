FROM debian:10.12
LABEL user="gchopin"
LABEL email="gchopin@student.42.fr"
VOLUME	/var/www/html
RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install dialog -y && apt-get install libterm-readkey-perl -y && apt-get install -y procps && apt-get -y install python3.7
COPY ./index.html /tmp
COPY server_python.py /usr/bin
COPY entrypoint.sh /usr/bin
COPY stylesheet.css /tmp
COPY ./pictures /tmp/pictures
RUN chmod +x /usr/bin/entrypoint.sh
ENTRYPOINT ["/usr/bin/entrypoint.sh"]
CMD ["python3.7", "/usr/bin/server_python.py"]
