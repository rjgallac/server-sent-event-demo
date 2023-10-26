 # Server sent events

 taken from https://www.w3schools.com/html/html5_serversentevents.asp


### build and run apache-php

docker build -t my-php-site:latest .
docker run --rm -d -p 80:80 my-php-site:latest
 
### Access

http://localhost/?name=bob