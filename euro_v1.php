<?php
include_once 'KeyGen.php';
$keygenerator = new CKeyGen();
?>
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
		<?php
		for($i=1; $i < 10; $i++) {
			echo $keygenerator->key2UL();
			echo "<hr>";
			$keygenerator->genKey();
		}
		?>
	</body>
</html>