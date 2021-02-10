<?php include("header.php");?>

	
		<h1>Bem-vindo</h1>
		<?php
			if(isset($_GET["login"]) && $_GET["login"] == true){
		?>
			<p class="alert alert-success">Logado com sucesso!</p>
		<?php
			}
		?>
		<?php
			if(isset($_GET["logout"]) && $_GET["logout"] == true){
		?>
			<p class="alert alert-danger">Deslogado com sucesso!</p>
		<?php
			}
		?>
		<?php
			if(isset($_GET["login"]) && $_GET["login"] == false){
		?>
			<p class="alert alert-danger">E-mail ou senha inválidos!</p>
		<?php
			}
		?>
		<?php
			if(isset($_GET["falhaDeSeguranca"])){
		?>
			<p class="alert alert-danger">Você não tem permissão para acessar essa página! Favor, fazer o login.</p>
		<?php
			}
		?>
		<?php
			if(usuarioEstaLogado()){	
			
		?>
			<p class="text-success">Você está logado como <?php echo $_SESSION["usuario_logado"];?></p>
			
		<?php
			}else{
		?>
		<h2>Faça o login</h2>
		<form action="login.php" method="post">
		<div class="row mt-5">
			<div class="col-md-4">
				E-mail
			</div>
				
			<div class="col-md-4">
				<input type="email" name="email" class="form-control" placeholder="Seu e-mail...">
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-4">
				Senha
			</div>

			<div class="col-md-4">
				<input type="password" name="senha" class="form-control" placeholder="Sua senha...">
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-12">
				<input class="btn btn-primary" type="submit" name="entrar" value="Entrar">
			</div>
		</div>
		</form>
		
	<?php } ?>
<?php include("footer.php");?>
