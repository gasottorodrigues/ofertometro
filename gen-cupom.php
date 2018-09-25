<?php
	date_default_timezone_set('America/Sao_Paulo');
	$date = date('Ymd-H:m:s');
	$codigo = md5($date);
	$prom = $_GET["prom"];

	$link = mysqli_connect("localhost","root","usbw","ofertometro");
	$sql = "INSERT INTO cupom(cupom,promocao) VALUES('".$codigo."',".$prom.")";
	if(mysqli_query($link,$sql)){
		echo $codigo;
	}else{
		echo "Aguarde para gerar outro código";
	}

?>