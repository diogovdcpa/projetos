<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>mjailton - ligando você ao mundo do conhecimento</title>
	<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/07/css/style.css">
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/07/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/07/js/js.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<h1> Projeto Pratico </h1>

	<div class="valor">
		<form action="<?php echo URL_BASE."ex07/gerente" ?>" method="POST">
			<label><small>Digite o Valor:</small> <input type="text" name="valor" value="<?php echo isset($valor) ? $valor : null ?>"></label>
			<input type="submit" value="Calcular" class="btn">
			<span>Parcelas: <?php echo $resultado ?> </span>
		</form>
	</div>
</body>

</html>