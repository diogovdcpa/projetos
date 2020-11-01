<html>
	<head>
		<title>Mjailton projetos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/20/css/style.css">
	</head>
	<body>
		<div class="nota">
			<form action="<?php echo URL_BASE."ex20/media" ?>" method="post">
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<th colspan="2"><strong>Notas de um aluno</strong></th>
					</tr>
					<tr>
						<td><strong>Nota 01</strong></td>
						<td><input type="text" name="n1"></td>
					</tr>
					<tr>
						<td><strong>Nota 02</strong></td>
						<td><input type="text" name="n2"></td>
					</tr>
					<tr>
						<td><strong>Nota 03</strong></td>
						<td><input type="text" name="n3"></td>
					</tr>
					<tr>
						<td><strong>Nota 04</strong></td>
						<td><input type="text" name="n4"></td>
					</tr>
					<tr class="base-btn">
						<td colspan="2">
							<input type="submit" name="" value="calcular" class="btn">
							<span><?php echo $resultado ?></span>
						</td>
					</tr>
					
				</table>
			</form>
		</div>
	</body>
</html>