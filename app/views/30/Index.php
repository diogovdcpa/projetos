<html>
	<head>
		<title>Mjailton projetos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/30/css/style.css">
	</head>
	<body>
		<div class="caixa">
			<form action="<?php echo URL_BASE."ex30/cep" ?>" method="POST">
				<div class="col1">
					<label><input type="text" name="cod" placeholder="Insira o código"></label>				
					<span><?php echo isset($resultado)? $resultado:null ?></span>
				</div>
				<div class="col2">
					<input type="submit" value="calcular">
				</div>
			</form>	
		</div>	
	</body>
</html>