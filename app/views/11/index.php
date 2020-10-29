<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mjailton - ligando você ao mundo do conhecimento</title>
  	<link  rel="stylesheet" href="<?php echo URL_BASE ?>assets/11/css/style.css">
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/11/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/11/js/js.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="base-caixa">
		<h1>15%</h1>
		<form action="<?php echo URL_BASE."ex11/salario" ?>" method="post">
			<label>
				<span>Total de vendas</span>
				<input type="text"placeholder="Digite Total de vendas" name="valor" value="<?php echo isset($valor) ? $valor : null ?>">
			</label>
			<h2>O salário do vendedor é: <?php echo isset($resultado) ? $resultado : null ?></h2>
			<input type="submit" class="btn" value="">
		</form>
	</div>
</body>
</html>