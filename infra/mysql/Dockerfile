FROM mysql/mysql-server:8.0

ENV MYSQL_DATABASE=laravel_local \
    MYSQL_USER=phper \
    MYSQL_PASSWORD=secret \
    MYSQL_ROOT_PASSWORD=secret \
    TZ=Asia/Tokyo

COPY ./my.cnf /etc/my.cnf

# 読み取り専用　書き込み権限がついているとMySQL起動時にエラー
RUN chmod 644 /etc/my.cnf   
