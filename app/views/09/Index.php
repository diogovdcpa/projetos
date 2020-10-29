<html>
	<head>
		<title>Mjailton projetos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/09/css/style.css">
	</head>
	<body>
		<div class="caixa">
			
			<form action="<?php echo URL_BASE."ex09/carro" ?>" method="post">
				<div class="col1">
					<h2>Valores</h2>
					<label><span>Preço de fabrica</span><input type="text" name="preco" value="<?php echo isset($preco)? $preco : null ?>"></label>
					<label><span>percentual de lucro</span><input type="text" name="plucro" value="<?php echo isset($plucro)? $plucro : null ?>"></label>
					<label><span>percentual de impostos</span><input type="text" name="pimposto" value="<?php echo isset($pimposto)? $pimposto : null ?>"></label>
				</div>
				
				<div class="col2">
					<input type="submit" name="" value="">
				</div>
				
				<div class="col3">
					<h2>Resultados</h2>
					<label><span>Preço de fabrica</span><input type="text" value="<?php echo isset($preco)? $preco : null ?>"></label>
					<label><span>percentual de lucro</span><input type="text" value="<?php echo isset($lucro)? $lucro : null ?>"></label>
					<label><span>percentual de impostos</span><input type="text" value="<?php echo isset($impostos)? $impostos : null ?>"></label>
				</div>
			</form>
		</div>
		
	</body>
</html>