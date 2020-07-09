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

#### GET
~~~
const getAlunos = ( url ) => fetch ( url ).then ( res => res.json() );

const  showAlunos = async () =>  {
    const url = 'http://localhost/00-planejamento/apiphp/alunos/';
    const alunos = await getAlunos(url);
    console.log(alunos.data);
};
showAlunos();
~~~
#### POST
~~~
 function createAluno( aluno ) {
    const url = 'http://localhost/00-planejamento/apiphp/alunos/';
    const options = {
      method: 'POST',
      body: JSON.stringify( aluno )
    };
  
    fetch(url, options )
  }
  
    const aluno = {
      "id":"",
      "nome": "Cleyde Gomes da Silva"
      "email": "cleydegomes@gmail.com",
      "celular": "1199988888",
      "logradouro": "rua sem fim",
      "bairro": "Sem nome",
      "cidade": "Barueri",
      "estado": "SP",
      "cep": "18135300"
  };
  
  createAluno(aluno);
~~~
#### PUT
~~~
  function updateAluno( aluno ) {
    const url = `http://localhost/00-planejamento/apiphp/alunos/${aluno.id}`;
    const options = {
      method: 'PUT',
      body: JSON.stringify( aluno )
    };
  
    fetch(url, options )
  }
  
    const aluno = {
      "id":"5",
      "nome": "Cleyde Gomes da Silva"
      "email": "cleydegomes@gmail.com",
  };
  
  updateAluno(aluno);
~~~
#### DELETE
~~~~

  function deleteAluno( alunoId ) {
    const url = `http://localhost/00-planejamento/apiphp/alunos/${alunoId}`;
    const options = {
      method: 'DELETE'
    };
  
    fetch(url, options )
  }
  
deleteAluno( 5 );
~~~~
