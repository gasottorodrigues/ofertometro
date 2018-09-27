<?php
    require_once "configDB.php";
	$link = configDB();
	$sql = "SELECT * FROM estabelecimento";
	$result = mysqli_query($link,$sql);

	echo"<option hidden=\"hidden\" value=\"0\">Escolha um estabelecimento</option>";

	while($aux = mysqli_fetch_array($result)){
		echo"<option value=\"".$aux["nome"]."\">".$aux["nome"]."</option>";
	}
?>