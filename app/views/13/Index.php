<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mjailton - ligando você ao mundo do conhecimento</title>
  	<link  rel="stylesheet" href="<?php echo URL_BASE ?>assets/13/css/style.css">
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/13/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo URL_BASE ?>assets/13/js/js.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<div class="base-caixa">
		<form action="<?php echo URL_BASE."ex13/taxista" ?>" method="POST">
			<div class="col"><span>ÍNICIO </span><label><input type="text" name="inicio" value="<?php echo isset($inicio) 	? $inicio : null ?>"/></label></div>
			<div class="col"><span>TOTAL VENDAS</span><label><input type="text" name="vendas" value="<?php echo isset($venda) ? $venda : null ?>"/></label></div>
			<div class="col"><span>COMBUSTIVEL</span><label><input type="text" name="litros" value="<?php echo isset($litros) ? $litros : null ?>"/></label></div>
			<div class="col"><span>FIM</span><label><input type="texte" name="fim" value="<?php echo isset($fim) ? $fim : null ?>"/></label></div>
			
			<div class="base-btn">
			<input type="submit" value="" class="btn">
			</div>
			<div class="resultado">
			<div class="col media"><span>MÉDIA</span><label><input type="" value="<?php echo isset($media) ? $media : null ?>"/></label></div>
			<div class="col"><span>LUCRO</span><label><input type="" value="<?php echo isset($lucro) ? $lucro : null ?>"/></label></div>
			</div>
		</form>
	</div>	
	
</body>
</html>