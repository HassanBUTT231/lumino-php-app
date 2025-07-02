FROM php:8.2-cli

WORKDIR /var/www

COPY . .

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:3000", "router.php"]
