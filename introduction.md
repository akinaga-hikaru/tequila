# Laravel導入手順（リンク）

## リンク集

### PHP / Laravelインストール

- https://techacademy.jp/magazine/11521

### Node.jsインストール（Windows)

- https://laraweb.net/environment/3523/

### Node.jsインストール(mac)

- https://qiita.com/A_zara/items/b552b4135006dc1e69f3

Webpack.mix.jsでsassなどのコンパイルを設定する

### DB接続情報

- https://hirona-bys.hatenablog.com/entry/2019/02/05/152610

### DBを扱う方法

- https://techacademy.jp/magazine/18782

## プロジェクト取得後に実行するコマンド

### PHP/JSの依存ライブラリをインストール

- composer install
- npm install

### PHP/JSの依存ライブラリをアップデートする場合

- composer update
- npm update

### .env作成

- cp .env.example .env

### key作成

- php artisan key:generate

### ローカルサーバを立ち上げる際のコマンド

- php artisan serve / php -S localhost:8000 -t public

### Node.jsでSASSなどのコンパイルを実行するコマンド

- npm run watch

### DBの適用

- php artisan migrate
- php artisan db:seed

### DBを初期化する場合

- php artisan migrate:fresh
※app/SyouhinTable.phpで設定の情報のみがDBに反映される
