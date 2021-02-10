<?php include("conecta.php"); ?>
<?php include("banco-usuarios.php"); ?>
<?php include("logica-usuario.php");?>
<?php
$email = $_POST["email"];
$senha = $_POST["senha"];
$usuario = buscaUsuario($conexao, $email, $senha);

if($usuario == NULL){
	header("Location: index.php?login=0");
}else{
	logaUsuario($usuario["email"]);
	header("Location: index.php?login=1");
}



?>