<?php
	$keyXML = file_get_contents("http://alunos.estg.ipvc.pt/~pmoreira/KEYSERVER/KeyServerXML.php");
	$keyHTML1 = XML2HTML($keyXML);
	$keyJSON = file_get_contents("http://localhost/SIR1213/EURO_KEYGEN_PL/KeyServerJSON.php");
	$keyHTML2 = JSON2HTML($keyJSON);
	
	function JSON2HTML($json) {
		$jsonkey = json_decode($json);
		
		$html = new SimpleXMLElement("<div></div>");
		$html_nn = $html->addChild("ul");
		$html_nn->addAttribute("class","numeros");
		
		$html_ns = $html->addChild("ul");
		$html_ns->addAttribute("class","estrelas");
		
		foreach($jsonkey->numbers as $number) {
			$html_nn->addChild("li",$number);
		}

		foreach($jsonkey->stars as $star) {
			$html_ns->addChild("li",$star);
		}
		return $html->asXML();
	}
	
	
	function XML2HTML($xml) {
			
		$xmlkey = new SimpleXMLElement($xml);
		
		$html = new SimpleXMLElement("<div></div>");
		
		$html_nn = $html->addChild("ul");
		$html_nn->addAttribute("class","numeros");
		
		$html_ns = $html->addChild("ul");
		$html_ns->addAttribute("class","estrelas");
	
		$xmlkey_nn = $xmlkey->numeros;
		
		foreach($xmlkey->numeros->num as $number) {
			$html_nn->addChild("li",$number);
		}
		/*
		foreach($xmlkey_nn->children() as $number) {
			$html_nn->addChild("li",$number);
		}
		*/
		
		$xmlkey_ns = $xmlkey->estrelas;
		foreach($xmlkey_ns->children() as $star) {
			$html_ns->addChild("li",$star);
		}
		
		return $html->asXML();
	}
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
		<?php echo $keyHTML1; ?>
		<?php echo $keyHTML2; ?>
	</body>
</html>