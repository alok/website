#!/home/u/us/user/website/venv/bin/python
import os
import sys

sys.path.insert(0, os.path.expanduser('~/website'))
from flup.server.fcgi import WSGIServer
from website.app import app

if __name__ == '__main__':
    WSGIServer(app).run()
