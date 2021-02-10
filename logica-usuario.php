<?php
session_start();
	function verificaUsuario(){
		if(!usuarioEstaLogado()){
		header("Location: index.php?falhaDeSeguranca=true");
		die();
		}
	}

	function usuarioEstaLogado(){
		return isset($_SESSION["usuario_logado"]);
	}

	function logaUsuario($email){
		$_SESSION["usuario_logado"] = $email;
	}

	function usuarioLogado($email){
		return $_SESSION["usuario_logado"];
	}

	function logout(){
		session_destroy();
	}


?>