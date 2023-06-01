docker-compose up --build -d
docker-compose exec app-food composer install --ignore-platform-reqs
docker-compose exec app-food php artisan key:generate
docker-compose exec app-food php artisan optimize
docker-compose exec app-food php artisan migrate:refresh
docker-compose exec app-food php artisan db:seed --force