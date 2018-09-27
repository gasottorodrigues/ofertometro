<!DOCTYPE html>
<html>
	<head>
		<title>Ofertômetro</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <!--Bootstrap-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>

        <!--Personal-->
        <script src="js/script.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

		<script type="text/javascript">
			$(function(){
				$('[name="cupom"]').keyup(function(){
					var cupom = $(this).val();
					$.ajax({
						url : "check-cupom.php?cupom=" + cupom,
						type : "get",
						berforeSend : function(){
							$("#ins-status").html("Verificando");
						}
					}).done(function(msg){
						$("#cupom-container").html(msg);
						$("#ins-status").html("Cupom verificado");
							setTimeout(function(){
							$("#ins-status").html("Aguardando");
						},500);
					}).fail(function(){
						$("#ins-status").html("algo deu errado.");
					});
				});
			});
		</script>
	</head>
    <body>
		<header>
			<h1>Ofertômetro</h1>
			<h2>Aqui diminuímos o seu gasto e você aumenta a nossa nota!</h2>
		</header>
		<nav>
			<li><a href="index.php">Criar Cupom</a></li>
			<li><a href="validate.php">Validar Cupom</a></li>
		</nav>
		<div id="ins-status">Aguardando</div>
		<div id="form-container">
			<input name="cupom" type="text" placeholder="Insira o cupom aqui" >
		</div>
		<div id="cupom-container">
		</div>
    </body>