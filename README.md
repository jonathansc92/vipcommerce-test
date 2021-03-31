<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Como instalar o projeto
- Clonar o repositório;
- Criar os containers basta na raiz do projeto executar o comando docker-compose up;
- No container do PHP, execute o comando composer install;
- Criar arquivo .env na raiz do projeto, basta renomear o arquivo .env.example para .env;
- Executar o comando php artisan key:generate;
- Executar no container do PHP o comando php artisan migrate.

## Endpoints

- http://localhost:8080/api/produtos (get/post)
- http://localhost:8080/api/produtos/{id} (put/delete/get)
- http://localhost:8080/api/produtos (get/post)
- http://localhost:8080/api/produtos/{id} (put/delete/get)

- http://localhost:8080/api/clientes (get/post)
- http://localhost:8080/api/clientes/{id} (put/delete/get)
- http://localhost:8080/api/clientes (get/post)
- http://localhost:8080/api/clientes/{id} (put/delete/get)

- http://localhost:8080/api/pedidos (get/post)
- http://localhost:8080/api/pedidos/{id} (put/delete/get)
- http://localhost:8080/api/pedidos (get/post)
- http://localhost:8080/api/pedidos/{id} (put/delete/get)

- http://localhost:8080/api/pedidos-produtos (get/post)
- http://localhost:8080/api/pedidos-produtos/{id} (put/delete/get)
- http://localhost:8080/api/pedidos-produtos (get/post)
- http://localhost:8080/api/pedidos-produtos/{id} (put/delete/get)

## Tests

- vendor\bin\phpunit --filter lista_produtos
- vendor\bin\phpunit --filter can_create_produtos
- vendor\bin\phpunit --filter can_update_produtos
- vendor\bin\phpunit --filter can_delete_produtos
- vendor\bin\phpunit --filter can_show_produtos

- vendor\bin\phpunit --filter lista_clientes
- vendor\bin\phpunit --filter can_create_clientes
- vendor\bin\phpunit --filter can_update_clientes
- vendor\bin\phpunit --filter can_delete_clientes
- vendor\bin\phpunit --filter can_show_clientes

- vendor\bin\phpunit --filter lista_pedidos
- vendor\bin\phpunit --filter can_create_pedidos
- vendor\bin\phpunit --filter can_update_pedidos
- vendor\bin\phpunit --filter can_delete_pedidos
- vendor\bin\phpunit --filter can_show_pedidos

- vendor\bin\phpunit --filter lista_pedidos_produtos
- vendor\bin\phpunit --filter can_create_pedidos_produtos
- vendor\bin\phpunit --filter can_update_pedidos_produtos
- vendor\bin\phpunit --filter can_delete_pedidos_produtos
- vendor\bin\phpunit --filter can_show_pedidos_produtos
