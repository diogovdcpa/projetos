<html>
	<head>
		<title>Mjailton projetos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/17/css/style.css">
	</head>
	<body>
		<div class="caixa"> 
			<form action="<?php echo URL_BASE."ex17/salario" ?>" method="post">
				<div class="retangulo retangulo1"><label><small>Digite o salário</small><input type="text" name="salario" ></label></div>
				<div class="retangulo retangulo2"><label><small>Digite o tempo de serviço</small><input type="text" name="tempo" ></label></div>
				
				<div class="retangulo retangulo3"><p><small>Resultado: Bônus</small><h1><?php echo isset($bonus)? $bonus:null ?></h1></p></div>
				<div class="retangulo retangulo4"><p><small>Resultado: Salário</small><h1><?php echo isset($salario)? $salario:null ?></h1></p></div>
				
				<input type="submit" value="" class="btn">
			</form>	
		</div>
	</body>
</html>