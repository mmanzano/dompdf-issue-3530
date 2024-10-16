cp .env.example .env

docker run --rm \
-u "$(id -u):$(id -g)" \
-v "$(pwd):/var/www/html" \
-w /var/www/html \
laravelsail/php83-composer:latest \
composer install --ignore-platform-reqs

./vendor/bin/sail up

./vendor/bin/sail artisan key:generate

./vendor/bin/sail artisan migrate --force

./vendor/bin/sail yarn install

./vendor/bin/sail yarn build

http://localhost

Click on Download Demo PDF button

./vendor/bin/sail down
