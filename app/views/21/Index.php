<html>
	<head>
		<title>Mjailton projetos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/21/css/style.css">
	</head>
	<body>
	<div class="caixa">
		<form action="<?php echo URL_BASE."ex21/area" ?>" method="post">
			<div class="col1">
				<label><span>Total área</span><input type="text" name="total" value="<?php echo isset($total)? $total:null ?>"></label>
				<label><span>Total contruída</span><input type="text" name="construida" value="<?php echo isset($construida)? $construida:null ?>"></label>
				<strong>Total: <?php echo isset($valor)? $valor:null ?></strong>
			</div>
			<div class="col2">
				<input type="submit" value="" class="btn">
			</div>
		</form>	
	</div>	
	</body>
</html>