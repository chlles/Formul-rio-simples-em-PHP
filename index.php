<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulário em PHP</title>
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<body>
	<main>
	<form class="formulario" action="form.php" method="post">
		<h1>Nos envie uma mensagem</h1>
		<div class="question">
		<input type="text" name="nome" required/>
		<label>Nome completo</label>
		</div>
		<div class="question">	
		<input type="text" name="email" required/>
		<label>E-mail</label>
		</div>
		<div class="question">	
		<input type="text" name="mensagem" " required/>
		<label>Como podemos ajudar?</label>
		</div>	
		<button type="submit" name="submit">ENVIAR</button>
	</form>
</main>
</body>
</html>