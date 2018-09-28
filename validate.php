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
    <body class="text-dark">
        <!-- CABEÇALHO-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <a class="navbar-brand text-dark" href="#"><span class="h3 font-weight-bold">Ofertômetro</span> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto lead">
                    <li class="nav-item px-md-4">
                        <a class="nav-link text-light" href="index.php">Criar cupom</a>
                    </li>

                    <li class="nav-item px-md-4">
                        <a class="nav-link text-light" href="validate.php">Validar Cupom</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!--CONTEUDO-->
        <div class="container-fluid">

            <header class="row my-2 justify-content-center text-center">
                <h2>Validar cupons de desconto</h2>
            </header>

            <div class="row">
                <div class="col" id="form-container">
                    <div class="form-group">
                        <label for="#cupom">Procure o seu estabelecimento na lista</label>
                        <input name="cupom" id="cupom" class="form-control" type="text" placeholder="Insira o cupom aqui" >
                        <small id="cupom-container">Digite seu cupom para verificar sua validade!</small>
                    </div>

                </div>

            </div>

            <!-- STATUS-->
            <div class="row fixed-bottom mt-5 mx-auto justify-content-center bg-info lead text-capitalize text-light"
                <span id="ins-status">Aguardando</span>
            </div>

        </div>

    </body>


