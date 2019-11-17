# API REST Genérica

API criada com fins didáticos para as aulas da disciplina de DS do curso Sistemas para Internet da FATEC São Roque.

Implementa os metodos POST, GET, PUT e DELETE, ou seja, todos os metodos para um CRUD.


## Utilização
Configurar os arquivos:
- **/model/connnection.php** com informações sobre o seu banco de dados;
- **/controller/routes.php** com infomações dos recursos (campos) disponiveis no banco de dados.

## Exemplos de entrada da API
Como base um banco de dados com 3 tabelas, alunos, professores e disciplinas, porém proibida a utilização do recurso disciplinas configurado no array $AllowResouces do arquivo routes.php. 

**Título**          | **Criar registro no recurso aluno**
--------------------|-
URL                 | /aluno
Método              | POST
Resposta de sucesso | Código: 201 { "status":"success", "data":"Cadastro realizado" }
Resposta de erro    | Código: 400 { "status":"error", "data":"Falta dados para cadastrar" }
Resposta de erro    | Código: 404 { "status": "error", "data": "Recurso não encontrado", "recursos disponiveis": "aluno, professor" }
Resposta de erro    | Código: 405 { "status":"error", "data": "Metodo não permitido", "Metodos permitidos":"POST, PUT, DELETE, GET" }

### javaScript
~~~
function createAluno( aluno ) {
  const url = 'http://localhost/alunos';
  const options = {
    method: 'post',
    body: JSON.stringify( aluno )};

  fetch(url, options )
    .then( response => response.json() )
    .then( data => console.log (data));
}

const aluno = {
    "nome": "Artur Pendragon",
    "data": "1881-11-21 ",
    "media": "40",
    "id_curso": "3"
}

createAluno ( aluno );
~~~
