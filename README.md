# m2i-php-poo

## installation process

### api
- install symfony CLI
- clone the project
- edit the src/Itech/Repository/DBA.php file for the correct db access
- create an article table like /Itech/Entity/Article.php
- run the Symfony Local Web Server from web folder : symfony server:start --port=4321 --passthru=front.php

### client (angular 11)
- install npm
- install angular CLI : npm install -g @angular/cli
- install node package from public folder : npm install
- run angular server from public : ng serve
- test the route http://localhost:4200/articles 
