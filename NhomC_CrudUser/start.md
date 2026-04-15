bước 1:composer install
bước 2:copy .env.example .env
bước 3:php artisan key:generate
bước 4:mkdir storage\framework\cache; mkdir storage\framework\sessions; mkdir storage\framework\views; mkdir storage\logs
nếu lỗi thiếu file database.sqlite thì chạy lệnh: New-Item -Path "database\database.sqlite" -ItemType File và chạy php artisan migrate
bước 5:php artisan optimize:clear
bước 6:php artisan serve