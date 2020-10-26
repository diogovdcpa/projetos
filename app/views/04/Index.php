<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>mjailton - ligando você ao mundo do conhecimento</title>
	<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/04/css/style.css">
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/04/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/04/js/js.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<div class="quadro">
		<form action="<?php echo URL_BASE . "ex04/salario" ?>" method="post">
			<label>
				<span>Nome:</span>
				<input type="text" name="nome">
			</label>
			<label class="col">
				<span>Idade:</span>
				<input type="text" name="idade">
			</label>
			<label class="col">
				<span>Salário:</span>
				<input type="text" name="salario">
			</label>
			<label>
				<span>Cargo:</span>
				<input type="text" name="cargo">
			</label>
			<input type="submit" value="Calcular" class="btn">
		</form>
	</div>

	<div class="resultado">
		<h3>Resultado:</h3>
		<p><b>Nome:</b> <?php echo isset($nome) ? $nome : null ?> </p>
		<p><b>Idade:</b> <?php echo isset($idade) ? $idade : null ?> </p>
		<p><b>Cargo:</b> <?php echo isset($cargo) ? $cargo : null ?> </p>
		<p><b>Salário Total:</b> <?php echo isset($bruto) ? $bruto : null ?> </p>
		<p><b>Salário Líquido:</b> <?php echo isset($liquido) ? $liquido : null ?> </p>

	</div>
</body>

</html>