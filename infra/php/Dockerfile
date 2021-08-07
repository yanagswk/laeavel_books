FROM php:8.0-fpm-buster
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

# コンテナ内の環境変数設定
ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_HOME=/composer

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

# 1行目: インストール可能なパッケージの「一覧」を更新
# 2行目: Laravelのインストールに必要なパッケージをインストール
# 3.4行目: パッケージインストールで使用したキャッシュファイルを削除
# 5行目: PHPの拡張ライブラリをインストール
RUN apt-get update && \
    apt-get -y install git unzip libzip-dev libicu-dev libonig-dev && \
    apt-get clean && \                      
    rm -rf /var/lib/apt/lists/* && \
    docker-php-ext-install intl pdo_mysql zip bcmath

COPY ./php.ini /usr/local/etc/php/php.ini

# コンテナ内のワークフォルダ
WORKDIR /work