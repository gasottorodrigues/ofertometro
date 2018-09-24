<?php
	$nome = $_POST["nome"];

	$link = mysqli_connect("localhost","root","usbw","ofertometro");
	$sql = "INSERT INTO estabelecimento VALUES('".$nome."')";
	mysqli_query($link,$sql);
?>