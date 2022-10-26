How to install

git clone url
copy .env.example to .env

Run php artisan key:generate.

Do php artisan config:clear,

Then php artisan config:cache

composer update



copy--->
use Illuminate\Support\Facades\Schema;
Schema::defaultStringLength(191);
<---pest  --->  app/Providers/AppServiceProvider.php

php artisan migrate

php artisan serve

install npm i

npm run dev
