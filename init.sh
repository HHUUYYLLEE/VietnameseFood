docker compose up --build -d
docker exec app-food composer install --ignore-platform-reqs
docker exec app-food php artisan key:generate
docker exec app-food php artisan optimize
docker exec app-food php artisan migrate:refresh
docker exec app-food php artisan db:seed -force