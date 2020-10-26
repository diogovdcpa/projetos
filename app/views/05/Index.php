<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>mjailton - ligando você ao mundo do conhecimento</title>
	<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/05/css/style.css">
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/05/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/05/js/js.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<h1> Projeto mjailton </h1>
	<div class="termometro">
		<form action="<?php echo URL_BASE ."ex05/temperatura"?>" method="POST">
			<span><small>Valor em Fahrenheit: <b>ºF</b></small> </span>
			<label>
				<input type="text" name="grau" value="<?php echo isset($grau) ? $grau : null ?>" placeholder="00">
			</label>
			<input type="submit" value="Calcular" class="btn">
			<span><small>Valor em Celsius: <?php echo $resultado ?> <b>ºC</b></small></span>
		</form>
	</div>
</body>

</html>