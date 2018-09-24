<?php

	$type = $_GET["type"];

	$link = mysqli_connect("localhost","root","usbw","ofertometro");
	$sql = "SELECT * FROM oferta WHERE tipo = '".$type."'";
	$result = mysqli_query($link,$sql);

	if($type== 'P'){
		echo"<option hidden=\"hidden\" value=\"0\">Escolha um produto</option>";
	}else{
		echo"<option hidden=\"hidden\" value=\"0\">Escolha um serviço</option>";
	}

	while($aux = mysqli_fetch_array($result)){
		echo"<option value=\"".$aux["id"]."\">".$aux["descricao"]."</option>";
	}
?>