"C:\Program Files\Internet Explorer\iexplore.exe" acasa.l/public/CreateDB.php
php artisan clear-compiled
composer dump-autoload
php artisan optimize
php artisan migrate
php artisan db:seed
php artisan view:clear
Taskkill /IM "iexplore.exe" /F
exit
