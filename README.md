# API REST Genérica

API para as aulas da disciplina de DS do curso Sistemas para Internet da FATEC São Roque.

Implementa os metodos POST, GET, PUT e DELETE, ou seja, todos os metodos para um CRUD.

Projeto criado com fins didáticos.

## Funcionamento
No arquivo **/model/connnection.php** especificar informações sobre o seu banco de dados.

NO arquivo **/controller/routes.php** espceificar os recursos (campos) disponiveis no banco de dados.

## Exemplos
    
**Título**          | **Criar registro no recurso**
--------------------|-
URL                 | /nomeRecurso
Método              | POST
Resposta de sucesso | Código: 201 { "status":"success", "data":"Cadastro realizado" }
Resposta de erro    | Código: 400 { "status":"error", "data":"Falta dados para cadastrar" }
Resposta de erro    | Código: 404 { "status": "error", "data": "Recurso não encontrado", "recursos disponiveis": "campo1, campo2" }
Resposta de erro    | Código: 405 { "status":"error", "data": "Metodo não permitido", "Metodos permitidos":"POST, PUT, DELETE, GET" }
