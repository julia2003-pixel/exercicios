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
	</header>
		<form>
			<body>
				<a href="agenda.php">Agenda</a>
				<hr/>
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
			<script src="js/jquery-2.2.4.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
</body>
</html>
	
	