# fashionably_late

環境構築

Dockerビルド
1. git clone リンク
2. docker-compose up -d --build

Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

使用技術
・laravel 8.x
・mysql 8.0.26

ER図
![image](https://github.com/user-attachments/assets/b9e2e97c-555d-48ef-9dbe-671fe4f94f0c)

URL
・開発環境：http://localhost/
・phpMyAdmin：http://localhost:8080/
