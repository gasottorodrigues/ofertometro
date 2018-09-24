<!DOCTYPE html>
<html>
	<head>
		<title>Ofertômetro</title>
		<meta charset="utf-8">
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="ofertometro.js"></script>
	</head>
	<body>
		<header>
			<h1>Ofertômetro</h1>
			<h2>Aqui diminuímos o seu gasto e você aumenta a nossa nota!</h2>
		</header>
		<div id="form-container">
			<div id="ins-status">Aguardando</div>
			<p>
				<select id="estab-sel">
				</select>
				Ou <input type="text" name="ins-estab" placeholder="Adicionar um novo">
			</p>
			<p>
				<input type="radio" name="oferta-type" value="P">
				<label>Produto</label>
				<input type="radio" name="oferta-type" value="S">
				<label>Serviço</label>
			</p>
			<section id="hidden-form-sec" style="display:none;">
				<p>
					<select id="oferta-sel">
					</select>
					Ou <input type="text" name="ins-oferta" placeholder="Adicionar um novo" >
				</p>
				<p>
					<input type="number" name="prc-off" placeholder="Desconto (em %)">
				</p>
			</section>
		</div>
		<div id="table-container">
			<table>
				<tr>
					<th>Estabelecimento</th>
					<th>Oferta</th>
					<th>Desconto</th>
				</tr>
			</table>
		</div>
	</body>
</html>