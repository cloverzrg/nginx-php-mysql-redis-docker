### ubuntu nginx php redis mysql

##### 修改默认配置文件的地方

php.ini
```
session.save_handler = redis
display_errors = On
```

redis.conf
```
bind 0.0.0.0
unixsocket /var/run/redis/redis.sock
unixsocketperm 777
```

mysql
```
[mysqld]
skip-host-cache
skip-name-resolve
```