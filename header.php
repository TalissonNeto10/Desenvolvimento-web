<?php include("logica-usuario.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FSSS Store</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<!-- MENU ----------------------------------------->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">FSSS Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="produto-formulario.php">Adicionar Produtos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="produto-lista.php">Listar Produtos</a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="contato.php">Contato</a>
      </li> 
      <?php 
      if(usuarioEstaLogado()){
        ?>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Sair</a>
      </li> 
      <?php
        }
      ?>
    </ul>
  </div>
</nav>
<!-- MENU ----------------------------------------->
<div class="container text-center mt-5">
  
