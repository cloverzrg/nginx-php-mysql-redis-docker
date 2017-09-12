### ubuntu nginx php redis mysql

##### 默认配置文件修改的地方

php.ini
```
session.save_handler = redis
session.save_path = "unix:/var/run/redis/redis.sock"
display_errors = On
```

redis.conf
```
bind 0.0.0.0
unixsocket /var/run/redis/redis.sock
unixsocketperm 777
```

mysql/conf.d/docker.cnf
```
[mysqld]
skip-host-cache
skip-name-resolve
```

### 使用
`git clone https://github.com/cloverzrg/nginx-php-mysql-redis-docker.git`
在代码文件夹下执行
`docker-compose build`
构建成功后,启动
`docker-compose up`

### 数据
网站代码位于 www 中
mysql 数据位于 mysql/data 中
redis 数据位于 redis/data 中