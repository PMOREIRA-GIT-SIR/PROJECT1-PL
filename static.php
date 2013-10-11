<html>
	<head>
		<title>Gerador de Chaves EuroMilhões</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="em_style.css"/>
		<style>
			/* h1 {color:blue;} */
		</style>
	</head>
	<body>
		<h1>Euromilhões</h1>
		<!-- Lista de números -->
		<ul class="numeros">
			<?php
				for($i=0; $i<5; $i++) {
					$num = rand(1,50);
					echo "<li>".$num."</li>";
				}
			?>	
		</ul>
		<!-- lista de estrelas -->
		<ul class="estrelas">
			<?php
				for($i=0; $i<2; $i++) {
					$num = rand(1,11);
					echo "<li> $num </li>";
				}
			?>
		</ul>
	</body>
</html>