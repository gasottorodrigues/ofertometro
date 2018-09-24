<?php
	$nome = $_POST["nome"];
	$estab = $_POST["estab"];
	$tipo = $_POST["tipo"];

	$link = mysqli_connect("localhost","root","usbw","ofertometro");
	$sql = "INSERT INTO oferta(estabelecimento,descricao,tipo) VALUES('".$estab."','".$nome."','".$tipo."')";
	mysqli_query($link,$sql);

	$sql = "SELECT id FROM oferta ORDER BY id desc";
	$result = mysqli_query($link,$sql);
	while($aux = mysqli_fetch_array($result)){
		echo $aux["id"];
		break;
	}
?>