
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

