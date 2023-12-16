##アプリケーション名 
 laravel-test

##環境構築
Dockerビルド
1. git clone git@github.com:coachtech-material/laravel-docker-template.git
2. docker-compose up -d --build

Laravel環境構築
1. docker-compose exec php bash
2. composer install
3..env.exampleファイルから.envを作成し、変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

##使用技術
PHP 8.0
Laravel 10.0
MySQL 8.0

<img width="385" alt="スクリーンショット 2023-12-16 171118" src="https://github.com/YUKIEBT/laravel-test/assets/144157485/18a592a5-2d76-4b34-bc4e-202b92f7d6b3">


##URL
開発環境:http://localhost/
phpMyAdmin: http://localhost:8080/

