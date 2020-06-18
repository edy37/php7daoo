<?php 

require_once("config.php");

/*Carrega um usuario
$root = new Usuario();
$root->loadById(1);
echo $root;
*/

/*
//carrega uma lista de usuarios
$lista = Usuario::getList();

echo json_encode($lista);
*/

/*Carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);
*/

/*Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("Maria", "4567");
echo $usuario;
*/

/* id:1
$aluno = new Usuario();

$aluno->setDeslogin("Cleuza");
$aluno->setDessenha("c1v2v3");

$aluno->insert();

echo $aluno;
*/
/* ou usar este metódo debaixo, insere usuario no db */
/*este é usado com __construct*/
//aqui em baixo estou criando um novo usuario
/*$aluno = new Usuario("Bruna","cvb123");

$aluno->insert();

echo $aluno;
*/

//alterar um usuario
/*
$usuario = new Usuario();

$usuario->loadById(10);

$usuario->update("Bicicleta", "14sa20");

echo $usuario;
*/

//deletar usuario
$usuario = new Usuario();

$usuario->loadById(13);

$usuario->delete();

echo $usuario;


?>