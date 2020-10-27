<html>
	<head>
		<title>Mjailton projetos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/08/css/style.css">
	</head>
	<body>
		
		<div class="funcionario">
			<form action="<?php echo URL_BASE."ex08/salario" ?>" method="post">
				<div class="caixa-form">
					<div class="thumb"><img src="<?php echo URL_BASE ?>assets/08/img/img-funcionario.png"></div>
					<div class="col1">
						<label><small>Nome:</small><input type="text" name="nome"></label>
						
						<label class="divisao"><small>Dependentes:</small><input type="text" name="dep"></label>
						<label class="divisao"><small>Horas:</small><input type="text" name="horas"></label>
					</div>
					
					<div class="col2">
						<input type="submit" value="Calcular" class="btn">
					</div>
				</div>
				
				<div class="resultado">
					<h2>Dependentes</h2>
					<span>Nome: <?php echo isset($nome) ? $nome:null ?></span>
					<span>Salário bruto: <?php echo isset($bruto) ? $bruto:null ?></span>
					<span>INSS: <?php echo isset($inss) ? $inss:null ?></span>
					<span>IR: <?php echo isset($ir) ? $ir:null ?></span>
					<span>Salário líquido: <?php echo isset($liquido) ? $liquido:null ?></span>
				</div>
			</form>		
		</div>
	</body>
</html>