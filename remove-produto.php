<?php include("header.php");?>
<?php include("conecta.php"); ?>
<?php include("banco-produtos.php"); ?>
<?php
	$id = $_POST["id"];
	removeProduto($conexao, $id);
	header("Location: produto-lista.php?removido=true");

?>

<?php include("footer.php");?>