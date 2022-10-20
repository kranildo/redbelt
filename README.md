# redbelt
Teste Técnico P&amp;D



# Imagem Laravel utilizada
docker pull bitnami/laravel

# Para instalar o projeto.

Basta clonar o codigo do git  
https://github.com/kranildo/redbelt.git

Dentro da pasta my-project 

1. Remova o arquivo composer.lock 

2. Execute o comando abaixo via console.

$ composer install

3. Altere o arquivo .env.orig  para .env 


No diretorio raiz do projeto onde existe o arquivo docker-compose.yml
Execute o comando abaixo via console.

$ docker-compose up --build

# Após os containers iniciarem 

Quando estiver com os containers iniciados a mensagem deve ser parecida com essa abaixo
 <br>
redbelt-mariadb-1  | 2022-10-20  8:18:59 140260864569152 [Note] /opt/bitnami/mariadb/sbin/mysqld: ready for connections.
 <br>
redbelt-mariadb-1  | Version: '10.1.47-MariaDB'  socket: '/opt/bitnami/mariadb/tmp/mysql.sock'  port: 3306  Source distribution

Em outro console execute o comando abaixo

$ docker-compose exec myapp php artisan migrate
 
# Rotas API
 <br>post '/spa/create'
 <br>
 get  '/spa/read'
 <br>
 put  '/spa/update/{id}'
 <br>
 delete /spa/delete/{id}
 <br>
 
# Já em seu navegador acesse o endereço 
http://localhost:8000/
