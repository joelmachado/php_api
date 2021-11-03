# php-rest-api
Este é um passo a passo PHP 7 & MySQL REST API PHP 7 CRUD (Criar, Ler, Actualizar, Deletar) RESTful API com base de dados MySQL.



## PHP CRUD API
* `GET - http://localhost:8080/api/read.php` Lista todos registros
* `GET - localhost:8080/api/single_read.php/?id=2` Busca registro referente ao id
* `POST - http://localhost:8080/api/create.php` Criar novo registro no banco
* `POST - http://localhost:8080/api/update.php` Atualiza registro
* `DELETE - localhost:8080/api/delete.php` Deleta registro

##JSON

  {
      "id": "19",
      "name": "joel 2",
      "email": "joel.machado5@gmail.com",
      "age": "19",
      "designation": "test2"     
    }
