# How to Run

1. create an environment: run `virtualenv venv`
2. start the environment: run `source venv/bin/activate`
3. install dependencies: run `pip install -r requirements.txt`
4. run `python3 app.py`
5. open http://127.0.0.1:5000/ in your browser

# Making Edits

Please use Git!!

## Edit website content

Edit HTML files under `templates/pages`

## Edit website style

1. run `sass --watch static/sass/main.scss static/css/main.css --no-source-map`
2. edit `static/sass/main.scss` (**not** `static/css/main.css`).

## Deploying the website to OCF

1. SSH into OCF's server with `ssh nice@ssh.ocf.berkeley.edu` in a terminal
2. run `cd website`
3. run `git pull`
