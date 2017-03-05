FROM harmonwood/nginx-php-symfony:latest

MAINTAINER Harmon Wood (-) <oldman@harmonwood.com>

RUN apk add --update sqlite && rm -rf /var/cache/apk/*

RUN rm -f ${PROJECT_DIR}/index.php

COPY . ${PROJECT_DIR}
