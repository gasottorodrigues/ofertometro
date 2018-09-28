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

        <div class="container-fluid">

            <header class="row my-2 justify-content-center text-center">
                <h2>Cadastrar cupons de desconto</h2>
            </header>


            <!-- CONTEUDO-->
            <div class="row" id="main">
                <div class="col-xs-12 col-sm-6 justify-content-center">
                    <div class="col" id="form-container">
                        <div class="form-group">
                            <label for="estab-sel">Procure o seu estabelecimento na lista</label>
                            <select class="form-control" id="estab-sel"></select>
                            <small>Não encontrou o estabelecimento desejado? Adicione outro!</small>
                        </div>

                        <div class="form-group">
                            <label for="ins-estab">Adicione o estabelecimento desejado</label>
                            <input class="form-control" type="text" name="ins-estab" placeholder="Adicionar um novo">
                        </div>

                        <div class="form-check-inline">
                            <input class="form-check-input" id="oferta-type-produto" type="radio" name="oferta-type" value="P">
                            <label class="form-check-label" for="oferta-type-produto">Produto</label>

                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" id="oferta-type-servico" type="radio" name="oferta-type" value="S">
                            <label class="form-check-label" for="oferta-type-servico">Serviço</label>
                        </div>

                        <div class="d-none"  id="hidden-form-sec">

                            <div class="form-group">
                                <label for="oferta-sel">Procure o seu produto/serviço na lista</label>
                                <select class="form-control" id="oferta-sel"></select>
                                <small>Não encontrou o produto/serviço desejado? Adicione outro!</small>
                            </div>

                            <div class="form-group">
                                <label for="ins-oferta">Adicione o produto/serviço desejado</label>
                                <input class="form-control" type="text" name="ins-oferta" placeholder="Adicionar um novo" >
                            </div>

                            <div class="form-group">
                                <label for="ins-oferta">Desconto desejado</label>
                                <input class="form-control" type="number" class="form-control" name="prc-off" placeholder="Desconto (em %)">
                            </div>

                            <p class="form-group">
                                <button class="btn btn-outline-success" id="main-button">Registrar</button>
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 pt-4 mb-5 table-responsive">
                    <table class="col-12 table mx-auto" id="table-container"> </table>
                </div>

                <!-- STATUS-->
                <div class="row fixed-bottom mt-5 mx-auto justify-content-center bg-info lead text-capitalize text-light"
                    <span id="ins-status">Aguardando</span>
                </div>
            </div>
        </div>
	</body>
</html>