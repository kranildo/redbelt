# redbelt
Teste Técnico P&amp;D



#Imagem Laravel utilizada
docker pull bitnami/laravel

#Para instalar o projeto.

Basta clonar o codigo do git  
https://github.com/kranildo/redbelt.git


Remova o arquivo que fica na pasta my-project dentro do projeto.
composer.lock

Dentro da pasta my-project execute o comando abaixo via console.
$ composer install

Altere o arquivo .env.orig  para .env 
Esse arquivo tambem fica na pasta my-project dentro do projeto.

No diretorio raiz do projeto onde existe o arquivo docker-compose.yml
Execute o comando abaixo via console.
$ docker-compose up --build

#Já no seu navegador acesse o endereço 
http://localhost:8000/