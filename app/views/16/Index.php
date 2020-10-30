<html>
	<head>
		<title>Mjailton projetos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/16/css/style.css">
	</head>
	<body>
		<div class="caixa">
			<form action="<?php echo URL_BASE."ex16/comparar" ?>" method="post">
				<label class="losango losango1"><input type="text" name="v1" value="<?php echo isset($v1)? $v1:0 ?>"></label>
				<label class="losango losango2"><input type="text" name="v2" value="<?php echo isset($v2)? $v2:0 ?>"></label>
				<label class="losango losango3"><input type="text" name="v3" value="<?php echo isset($v3)? $v3:0 ?>"></label>
				<label class="losango losango4"><input type="submit" value=""></label>
				<span><?php echo isset($resultado)? $resultado:"Insira os valores" ?></span>
			</form>	
		</div>
	</body>
</html>