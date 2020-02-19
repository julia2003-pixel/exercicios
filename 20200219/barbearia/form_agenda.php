<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	  
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/agenda.css">
	</head>
<body>
	<div class="login">
	<header>
		<title>Barbearia IFSP 2020</title>
		<style>
			input{margin:2px;}
		</style>
	<h2 class="text-center">Entre com seu <b>usuário</b> e <b>senha</b></h2>
	</header>
		<form>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-user"></span>
					</div>
					<input type="text" name="usuario" class="form-control" placeholder="Usuário">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-option-horizontal"></span>
					</div>
					<input type="password" name="senha" class="form-control" placeholder="Senha">
				</div>
			</div>
	<footer>
				<div class="checkbox pull-left">
					<label>
						<input type="checkbox" name="lembrar">
						Lembrar de mim
					</label>
				</div>
				<button type="submit" class="btn btn-primary pull-right">Entrar</button>
			</footer>
		</form>
	</div>


	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
	
	
	<body>
		<a href="agenda.php">Agenda</a>
		<hr />
		<h1>Agendamento Barbearia ISP 2020</h1>
		<form method="post" action="recebe_agenda.php">			
			<input type="text" name="nome" placeholder="Nome..." />
			<br />
			<input type="email" name="email" placeholder="Email..." />
			<br />
			<input type="text" name="telefone" placeholder="Telefone..." />
			<br />
			<label>Data:</label>
			<input type="date" name="data" />
			<br />
			<input name="hora" type="time" min="07:00" max="17:45" placeholder="Hora" />
			
			<br />
			<input type="submit" value="Agendar" />		
		</form>
	</body>
</html>
	