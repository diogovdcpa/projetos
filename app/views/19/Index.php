<html>
	<head>
		<title>Mjailton projetos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/19/css/style.css">
	</head>
	<body>
		<div class="caixa">
			<form action="<?php echo URL_BASE."ex19/salario" ?>" method="post">
				<div class="col1">
					<label><span>Nome</span><input type="text" name="nome" value="<?php echo isset($nome)? $nome: "Nome" ?>"></label>
					<label><span>Dependentes</span><input type="text" name="dep" value="<?php echo isset($dep)? $dep: "Dependentes" ?>"></label>
					<label><span>Salário bruto</span><input type="text" name="salario" value="<?php echo isset($salario)? $salario: "Salario" ?>"></label>
				</div>
				<div class="base-btn">
					<input type="submit" value="" name="">
				</div>
				<div class="col2">
					<label><span>Nome</span><input type="text" value="<?php echo isset($nome)? $nome: "" ?>"></label>
					<label><span>IR</span><input type="text" value="<?php echo isset($ir)? $ir: "" ?>"></label>
					<label><span>Salário líquido</span><input type="text" value="<?php echo isset($liquido)? $liquido: "" ?>"></label>
				</div>
			</form>	
		</div>
	</body>
</html>