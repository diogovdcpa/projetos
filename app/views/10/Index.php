<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mjailton - ligando você ao mundo do conhecimento</title>
  	<link  rel="stylesheet" href="<?php echo URL_BASE ?>assets/10/css/style.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="quadro">
	
	<form action="<?php echo URL_BASE."ex10/media" ?>" method="POST">
	
		<label><span>Prova 01:</span> <input type="text" name="p1" value="<?php echo isset($p1) ? $p1 : null ?>"></label>
		<label><span>Prova 02:</span> <input type="text" name="p2" value="<?php echo isset($p2) ? $p2 : null ?>"></label>
		<label><span>Prova 03:</span> <input type="text" name="p3" value="<?php echo isset($p3) ? $p3 : null ?>"></label>
		 <input type="submit" value="Calcular" class="btn">
		<h3>Média é: <span><?php echo isset($resultado) ? $resultado : null ?> </span></h3>
	</form>	
	</div>
</body>
</html>