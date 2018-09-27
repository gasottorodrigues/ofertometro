<?php
    require_once "configDB.php";

	$type = $_GET["type"];
	$estab = $_GET["estab"];

	$link = configDB();
	$sql = "SELECT * FROM oferta WHERE tipo = '".$type."' AND estabelecimento = '".$estab."'";
	$result = mysqli_query($link,$sql);

	if($type== 'P'){
		echo"<option hidden=\"hidden\" value=\"0\" id=\"selOf\">Escolha um produto</option>";
	}else{
		echo"<option hidden=\"hidden\" value=\"0\" id=\"selOf\">Escolha um serviço</option>";
	}

	while($aux = mysqli_fetch_array($result)){
		echo"<option value=\"".$aux["idOf"]."\" >".$aux["descricao"]."</option>";
	}
?>