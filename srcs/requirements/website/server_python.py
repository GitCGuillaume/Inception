import http.server
import os
import signal
import sys

os.chdir('/var/www/html/website')
server_class=http.server.HTTPServer
handler_class=http.server.SimpleHTTPRequestHandler
server_address = ('', 9001)
httpd = server_class(server_address, handler_class)
def sig_term(signal, frame):
    print('Shutdown...')
    httpd.server_close()
    sys.exit(0)
signal.signal(signal.SIGTERM, sig_term)
httpd.serve_forever()
