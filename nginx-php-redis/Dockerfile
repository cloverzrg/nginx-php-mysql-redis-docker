FROM ubuntu:xenial
COPY sources.list /etc/apt/sources.list
# 替换为国内软件源
RUN apt-get update  && apt-get dist-upgrade -y
# 更新源
RUN apt-get install -y nginx php php-fpm  apt-utils redis-server composer
# 安装 nginx 和 php
RUN apt-get install -y \
    php-curl \
    php-redis \
    php-gd \
    php-mysqli \
    php-pdo-mysql \
    php-xml \
    php-mcrypt \
    php-mbstring \
    php-zip

# 按需安装 PHP 扩展
RUN apt-get clean \
    && apt-get autoremove -y \
    && apt-get autoclean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
# 清理镜像
RUN ln -sf /usr/share/zoneinfo/Asia/Shanghai  /etc/localtime
# 设置时区
RUN ln -sf /dev/stdout /var/log/nginx/access.log \
	&& ln -sf /dev/stderr /var/log/nginx/error.log
# 把 nginx 日志输出到标准输出
COPY start.sh /start.sh
RUN chmod +x /start.sh
COPY nginx.conf /etc/nginx/nginx.conf
COPY conf.d /etc/nginx/conf.d
COPY php.ini /etc/php/7.0/fpm/php.ini
COPY redis.conf /etc/redis/redis.conf
EXPOSE 80
VOLUME /var/www/
ENTRYPOINT ["/start.sh"]