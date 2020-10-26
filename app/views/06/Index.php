<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Projeto Pratico</title>
  	<link  rel="stylesheet" href="<?php echo URL_BASE ?>assets/06/css/style.css">
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/06/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/06/js/js.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<h1> Projeto Pratico </h1>
	<div class="caixa">
	<form action="<?php echo URL_BASE."ex06/lampada" ?>" method="POST">	
		<div class="col">
		<label><small>Potência: </small><input type="text" name="pot"></label>
		<label><small>Altura: 	</small><input type="text" name="altura"></label>
		<label><small>Comprimento:</small> <input type="text" name="comprimento"></label>
		</div>
		<div class="col">
		 <input type="submit" value="Calcular" class="btn">
		<span>Número de Lâmpadas: <b><?php echo $resultado ?></b> </span>
		</div>
	</form>	
	</div>
</body>
</html>