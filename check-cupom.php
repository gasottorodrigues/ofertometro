<?php
    require_once "configDB.php";
	$cupom = $_GET["cupom"];

	$link = configDB();
	$sql = "SELECT * FROM cupom JOIN promocao ON promocao.idProm = cupom.promocao JOIN oferta ON oferta.idOf = promocao.oferta WHERE cupom.cupom = '".$cupom."'";
	$result = mysqli_query($link,$sql);
	if(mysqli_num_rows($result) !=0){
		echo "<h1>CUPOM VÁLIDO</h1>";
		while($aux = mysqli_fetch_array($result)){
			echo"<p>";
				echo"<b>Oferta Correspondente: </b>";
				echo $aux["descricao"];
			echo"</p>";

			echo"<p>";
				echo"<b>Desconto: </b>";
				echo $aux["desconto"]. "%";
			echo"</p>";
		}
	}else{
		echo "<h1>CUPOM INVÁLIDO</h1>";
	}

?>