<html>
	<head>
		<title>Mjailton projetos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/18/css/style.css">
	</head>
	<body>
		<div class="caixa">
			<form action="<?php echo URL_BASE."ex18/triangulo" ?>" method="post">
				<div class="retangulo retangulo1"><label><input type="text" name="l1" ></label></div>
				<div class="retangulo retangulo2"><label><input type="text" name="l2" ></label></div>
				<div class="retangulo retangulo3"><label><input type="text" name="l3" ></label></div>
				
				<input type="submit" name="" value="Verificar" class="btn">
				
				<div class="retangulo retangulo4"><span><?php echo $resultado ?></span></div>
				
			</form>	
		</div>			
	</body>
</html>