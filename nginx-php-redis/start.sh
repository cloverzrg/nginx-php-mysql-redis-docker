#!/bin/bash
service php7.0-fpm start
service redis-server start
exec nginx -g 'daemon off;'