# onetwofree

##URLs:
- WebSite local:
  http://127.0.0.1:8000
- Website backend:
  http://127.0.0.1:8000/admin
  - login: 
    - email: a@b.c
    - password: 1234
- Phpmyadmin:
  http://127.0.0.1:8080
  - login: 
    - name: root
    - password: password
  
## Servers:
- Php: 
  - symfony server:start -d
  - symfony server:stop
- JS:
  - npm run dev
- Mysql:
  - docker-compose start
  - docker-compose stop
  - Pour compiler: docker-compose up -d 

