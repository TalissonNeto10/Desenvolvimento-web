<?php include("header.php");?>
<?php include("conecta.php");?>
<?php include("banco-categoria.php");?>

<?php
verificaUsuario();

$categorias = listaCategorias($conexao);

?>
	<div class="container text-center">
		<h1>Cadastro de produtos</h1>
		<form action="adiciona-produto.php" method="post">
		<div class="row mt-5">
			<div class="col-md-4">
				Nome
			</div>
				
			<div class="col-md-4">
				<input type="text" name="nome" class="form-control" placeholder="Nome do produto">
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-4">
				Preço
			</div>

			<div class="col-md-4">
				<input type="number" name="preco" class="form-control" placeholder="Preço do produto">
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-4">
				Descrição
			</div>

			<div class="col-md-4">
				<textarea name="descricao" class="form-control" placeholder="Descreva o produto..."></textarea>
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-4">
				Situação
			</div>

			<div class="col-md-1">
				<input type="checkbox" name="usado" value="true">&nbsp;Usado
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-4">
				Categoria
			</div>

			<div class="col-md-4">

				<select name="categoria_id" class="form-control">
					<?php foreach($categorias as $categoria): ?>
					<option value="<?php echo $categoria['id'];?>"><?php echo utf8_encode($categoria["nome"]);?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-12">
				<input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
			</div>
		</div>
		</form>
	</div>
<?php include("footer.php");?>