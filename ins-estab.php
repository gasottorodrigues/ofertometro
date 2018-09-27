<?php
    require_once "configDB.php";

	$nome = $_POST["nome"];
	$link = configDB();
	$sql = "INSERT INTO estabelecimento VALUES('".$nome."')";
	mysqli_query($link,$sql);
?>