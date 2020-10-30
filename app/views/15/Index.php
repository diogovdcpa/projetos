<html>
	<head>
		<title>Mjailton projetos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/15/css/style.css">
	</head>
	<body>
		<div class="caixa">
			<form action="<?php echo URL_BASE."ex15/maiormenor" ?>" method="POST">
				<h1><small>Digite o 1º número</small> <span><input type="text" name="n1" value="<?php echo isset($n1)? $n1:0 ?>"></span></h1>
				<h1><small>Digite o 2º número</small> <span><input type="text" name="n2" value="<?php echo isset($n2)? $n2:0 ?>" ></span></h1>
				<br/><br/>
				<h3>Resultado</h3>
				
				<h1><span><?php echo isset($n1)? $n1:0 ?></span></h1>
				<h1 class="sinal"><span> <?php echo isset($resultado)? $resultado : "?" ?> </span></h1>
				<h1><span><?php echo isset($n2)? $n2:0 ?></span></h1>
				
				<input type="submit" value="" class="btn">
			</form>
		</div>
	</body>
</html>