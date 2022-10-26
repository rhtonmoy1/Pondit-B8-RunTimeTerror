How to install

git clone url
copyp .env.example to .env
php artisan key:generate`
composer update`

use Illuminate\Support\Facades\Schema;
Schema::defaultStringLength(191);

php artisan config:cache
php artisan cache:clear 
php artisan migrate
php artisan serve
install npm i
npm run dev
