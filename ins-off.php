<?php
    require_once "configDB.php";

	$nome = $_POST["nome"];
	$estab = $_POST["estab"];
	$tipo = $_POST["tipo"];

	$link = configDB();
	$sql = "INSERT INTO oferta(estabelecimento,descricao,tipo) VALUES('".$estab."','".$nome."','".$tipo."')";
	mysqli_query($link,$sql);

	$sql = "SELECT idOf FROM oferta ORDER BY idOf desc";
	$result = mysqli_query($link,$sql);
	while($aux = mysqli_fetch_array($result)){
		echo $aux["idOf"];
		break;
	}
?>