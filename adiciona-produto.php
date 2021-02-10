<?php include("header.php"); ?>
<?php include("conecta.php"); ?>
<?php include("banco-produtos.php"); ?>
<?php

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];	
$categoria_id = $_POST["categoria_id"];
if(array_key_exists('usado', $_POST)){
	$usado = "true";
}else{
	$usado = "false";
}



if(insereProdutos($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){
	
	?>
	<p class="alert alert-success">Produto <?php echo $nome;?> cadastrado com sucesso!</p>
<?php
}else{
	?>
	<p class="alert alert-danger">Produto <?php echo $nome;?> não foi cadastado!</p>
	<?php
}
mysqli_close($conexao);

?>
<?php include("footer.php");?>