Keuze.nl
========

## General information
* Production URL: http://www.keuze.nl
* Local environment URL: http://loc.keuze.nl/ and http://html.keuze.nl for the frontend
* Local IP for vagrant box: 192.168.56.124

## Installation
1. `git clone git@github.com:uprise10/keuze-nl.git`
2. Startup vagrant:
    * `cd vagrant && vagrant up`
    * Get a cup of coffee
3. Copy `wp-local-config-sample.php` to `wp-local-config.php` and adjust the variables in that file to match your local setup.
4. Paste this in your local hosts file: `192.168.56.124	loc.sundiogroup.com html.sundiogroup.com`

## Frontend
1. Frontend is in the `_html` directory
2. Run `npm install`
3. Run `grunt` for launching the frontend server and listeners
4. Top copy the generated assets to the theme directory run `grunt copy`
