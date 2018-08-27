<?php

require_once("config.php");

// Carrega um usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("patrick", "123");
//echo $usuario;

//Criando um novo usuário
// $aluno = new Usuario("aluno", "123");
// $aluno->insert();
// echo $aluno;

//Alterando um usuário
// $usuario = new Usuario();
// $usuario->loadById(10);
// $usuario->update("professor", "1234");
// echo $usuario;

//Deletando um usuário
$usuario = new Usuario();
$usuario->loadById(12);
$usuario->delete();
echo $usuario;


// $sql = new Sql();
 
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

?>
