<?php include("header.php");?>
<?php
verificaUsuario();
?>
<h1>Formulário de Contato</h1>
<?php
			if(isset($_GET["envio"]) && $_GET["envio"] == true){
		?>
			<p class="alert alert-success">E-mail enviado com sucesso!</p>
		<?php
			}
		?>
		<?php
			if(isset($_GET["msg"]) && $_GET["msg"] == 1){
		?>
			<p class="alert alert-danger">Erro ao enviar mensagem!</p>
		<?php
			}
		?>
<form action="envia-contato.php" method="post">
		<div class="row mt-5">
			<div class="col-md-4">
				Nome
			</div>
				
			<div class="col-md-4">
				<input type="text" name="nome" class="form-control" placeholder="Seu nome...">
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-4">
				Telefone
			</div>

			<div class="col-md-4">
				<input type="number" name="telefone" class="form-control" placeholder="Seu telefone...">
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-4">
				Mensagem
			</div>

			<div class="col-md-4">
				<textarea name="msg" class="form-control" placeholder="Sua mensagem..."></textarea>
			</div>
		</div>
		
		<div class="row mt-5">
			<div class="col-md-12">
				<input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
			</div>
		</div>
		</form>
<?php include("footer.php");?>