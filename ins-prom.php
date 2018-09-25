<?php
	$desc = $_POST["desconto"];
	$off = $_POST["oferta"];

	$link = mysqli_connect("localhost","root","usbw","ofertometro");
	$sql = "INSERT INTO promocao(oferta,desconto) VALUES(".$off.",".$desc.")";
	mysqli_query($link,$sql);

	$sql = "SELECT idProm FROM promocao ORDER BY idProm desc";
	$result = mysqli_query($link,$sql);
	while($aux = mysqli_fetch_array($result)){
		echo $aux["idProm"];
		break;
	}
?>