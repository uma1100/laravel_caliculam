### [WIP]チュートリアル

## 動作確認環境
- Amazon Linux 
- PHP 7.3
- Laravel 5.7.*
- MySQL 5.7.*
- Apache 2.4.33

## 初期設定
```
$ git clone https://github.com/accaxx/laracal
$ cp .env.example .env
$ php artisan key:generate
$ composer install
$ npm install
$ npm run dev
```

## DB設定
```
$ vi .env // DB周りのデータ書き換え
$ php artisan migrate
$ php artisan serve
```
