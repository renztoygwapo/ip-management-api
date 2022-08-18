## Setting Up
    - clone the repo by running `git clone https://github.com/renztoygwapo/ip-management-api.git`
    - composer install
    - cp .env.example .env
    - php artisan config:cache
    - php artisan migrate
    - php artisan db:seed

## Credentials
    - email: test@example.com<br />
    - password: 123456<br />

## API ROUTES

Login
    - api: /api/login
    - method: post<br />
    - parameters: email, password<br />


Get Profile
    - api: /api/me <br />
    - method: GET <br />
    - params: (optional) <br />

Get IP Addresses:
    - api : /api/ip<br />
    - method: GET <br />
    - params: (optional)<br />

Get IP Addresses BY ID:
    - api : /api/ip/{id}<br />
    - method: GET <br />
    - params: (optional)<br />

Create New IP Address:
    - api : /api/ip<br />
    - method: POST<br />
    - params: label, ip<br />

Update IP Address:
    - api : /api/ip/{id} <br />
    - method: PUT <br />
    - params: label <br />

Get Audit Trail
    - api: /api/log <br />
    - method: GET <br />
    - params: (optional) <br />

