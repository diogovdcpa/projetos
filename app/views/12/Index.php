<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mjailton - ligando você ao mundo do conhecimento</title>
  	<link  rel="stylesheet" href="<?php echo URL_BASE ?>assets/12/css/style.css">
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/12/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/12/js/js.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<div class="base-caixa">
		<form action="<?php echo URL_BASE."ex12/salario" ?>" method="POST">
			<label class="col">
				<span>Quantidade de sistemas</span>
				<input type="text" name="qtd" value="<?php echo isset($qtd)? $qtd : null ?>">
			</label>
			<label class="col">
				<span>Vendas</span>
				<input type="text" name="valor" value="<?php echo isset($valor)? $valor : null ?>">
			</label>
			<div class="col"><input type="submit" class="btn"></div>
			<div class="col"><h2>Salário: <?php echo $resultado ?></h2></div>
		</form>
	</div>
</body>
</html>