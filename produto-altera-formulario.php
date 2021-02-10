<?php include("header.php");?>
<?php include("conecta.php");?>
<?php include("banco-produtos.php");?>
<?php include("banco-categoria.php");


$id = $_GET["id"];
$produto = buscaProduto($conexao, $id);
$usado = $produto["usado"] ? "checked='checked'" : "";
$categorias = listaCategorias($conexao);

?>
	<div class="container text-center">
		<h1>Alterando produtos</h1>
		<form action="altera-produto.php" method="post">
		<div class="row mt-5">
			<div class="col-md-4">
				Nome
			</div>
				
			<div class="col-md-4">
				<input type="text" name="nome" class="form-control" placeholder="Nome do produto" value="<?php echo $produto["nome"];?>">
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-4">
				Preço
			</div>

			<div class="col-md-4">
				<input type="number" name="preco" class="form-control" placeholder="Preço do produto" value="<?php echo $produto["preco"];?>">
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-4">
				Descrição
			</div>

			<div class="col-md-4">
				<textarea name="descricao" class="form-control" placeholder="Descreva o produto..."><?php echo $produto["descricao"];?></textarea>
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-4">
				Situação
			</div>

			<div class="col-md-1">
				<input type="checkbox" name="usado" <?php echo $usado;?>>&nbsp;Usado
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-4">
				Categoria
			</div>

			<div class="col-md-4">

				<select name="categoria_id" class="form-control">
					<?php foreach($categorias as $categoria): 
						$essaEhAcategoria = $produto["categoria_id"] == $categoria["id"];
						$selecao = $essaEhAcategoria ? "selected='selected'" : "";
						?>
					<option value="<?php echo $categoria['id'];?>" <?php echo $selecao;?>><?php echo utf8_encode($categoria["nome"]);?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
		<input type="hidden" name="id" value="<?php echo $produto['id'];?>">
		<div class="row mt-5">
			<div class="col-md-12">
				<input class="btn btn-primary" type="submit" name="alterar" value="Alterar">
			</div>
		</div>
		</form>
	</div>
<?php include("footer.php");?>