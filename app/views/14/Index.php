<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>mjailton - ligando você ao mundo do conhecimento</title>
	<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/14/css/style.css">
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/14/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/14/js/js.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<div class="base-caixa">
		<form action="<?php echo URL_BASE."ex14/par" ?>" method="POST">
			<label><span>DIGITE UM NÚMERO</span><input type="text" name="valor" value="<?php echo isset($valor)? $valor : null ?>" ></label>
			<label class="sinal">
				<h2><?php echo $resultado ?></h2>
			</label>
			<div class="base-btn">
				<input type="submit" value="" class="btn">
			</div>
		</form>
	</div>
</body>

</html>