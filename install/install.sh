mkdir example1 && cd example1 && cp ../filler/install/composer.json ./ && composer install --no-cache && composer install && cd public && symfony server:start