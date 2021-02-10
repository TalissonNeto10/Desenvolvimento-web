<?php include("header.php");?>
<?php include("conecta.php"); ?>
<?php include("banco-produtos.php"); ?>

<?php
verificaUsuario();
?>
	<h1>Listagem de Produtos</h1>
	<?php
		if(array_key_exists("removido", $_GET) && $_GET["removido"] == true){
	?>
	<p class="alert alert-success">Produto removido com sucesso!</p>
	<?php
		}

	?>
	<?php
		$produtos = listaProdutos($conexao);

	?>
	<table class="table table-striped table-bordered mt-5">
		<tr>
			<td><b>Nome</b></td>
			<td><b>Preço</b></td>
			<td><b>Descrição</b></td>
			<td><b>Categoria</b></td>
			<td><b>Situação</b></td>
		</tr>
	<?php
		foreach ($produtos as $produto) {
	?>
		<tr>
			<td><?php echo $produto["nome"]; ?></td>
			<td>R$ <?php echo $produto["preco"]; ?></td>
			<td><?php echo substr($produto["descricao"], 0, 50); ?></td>
			<td><?php echo $produto["categoria_nome"]; ?></td>
			<td>
				<?php if($produto["usado"] == 1){
					echo "usado";
				}else{
					echo "novo";
				} 
				?>
			</td>
			<td>
				<a class="btn btn-info" href="produto-altera-formulario.php?id=<?php echo $produto["id"];?>">alterar</a>
			</td>
			<td>
				<form action="remove-produto.php" method="post">
					<input type="hidden" name="id" value="<?php echo $produto["id"];?>">
					<button class="btn btn-danger">remover</button>
				</form>
			</td>
		</tr>
	<?php	
		}
	?>
	</table>
<?php include("footer.php");?>