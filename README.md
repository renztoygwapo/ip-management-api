## Setting Up
    - clone the repo
    - composer install
    - cp .env.example .env
    - php artisan config:cache
    - php artisan migrate
    - php artisan db:seed

## Credentials
    - email: test@example.com
    - password: 123456

## API ROUTES

Login
    - api: /api/login
    - method: post
    - parameters: email, password

Create New IP Address:
    - api : /api/ip
    - method: POST
    - params: label, ip

Update IP Address:
    - api : /api/ip/{id}
    - method: PUT
    - params: label

Get Audit Trail
    - api: /api/log
    - method: GET
    - params: (optional)

