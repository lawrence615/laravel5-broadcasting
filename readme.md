## About Project

This is a Laravel application to work with laravel broadcasting from the backend to the client side.The client side is on Vue and it displays data on bar chart.

## Installation
1. Run ```composer install``` and ```npm install```
2. Run ```npm run watch```
3. Copy .env.example to .env and change the BROADCAST_DRIVER to redis and REDIS_PORT to the one youur redis port is running on.
4. In development, start the queue listener with ```php artisan queue:listen```
5. Additionally, start the laravel echo server with the command ```laravel-echo-server start```
6. Last but not least, serve the application ```php artisan serve``` and view it on the browser
