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

# Já no seu navegador acesse o endereço 
http://localhost:8000/