/*----------------------------------------------------------------------*/
function loadEstabs(){
	$.ajax({
		url : "load-estabs.php",
		type: "get"
	}).done(function(msg){
		$("#estab-sel").html(msg);
	})
}
/*----------------------------------------------------------------------*/
function loadProms(){
	$.ajax({
		url : "load-proms.php",
		type : 'get'
	}).done(function(msg){
		$("#table-container > table").html(msg);
	})
}
/*----------------------------------------------------------------------*/
function genCupom(id){
	$.ajax({
		url : "gen-cupom.php?prom=" + id,
		type : 'get',
		berforeSend : function(){
			$("#ins-status").html("Gerando...");
		}
	}).done(function(msg){
		$("#ins-status").html(msg);
	}).fail(function(){
		$("#ins-status").html("Problemas ao gerar o cupom. Desculpe");
	});
}
/*----------------------------------------------------------------------*/

function insertPromocao(){
	var desc = $('[name="prc-off"]').val();
	var off = $("#oferta-sel").val();
	$.ajax({
		url : "ins-prom.php",
		type : "post",
		data : {
			desconto : desc,
			oferta : off
		},

		berforeSend : function(){
			$("#ins-status").html("Enivando...");
		}
	}).done(function(msg){
		$str = "<tr><td>"+
		$("#estab-sel").val() + "</td><td>" +
		$("#oferta-sel").find("option:selected").html() + "/" + $('[name="oferta-type"]:checked').val() + "</td><td>" +
		$('[name="prc-off"]').val() + "%</td><td><button onclick=\"genCupom("+ msg +")\">Obter cupom</button></tr>";
		$("#table-container > table").append($str);

		$("#estab-sel").val(0);
		$('[name="prc-off"]').val('');
		$("#oferta-sel").val(0);

		$("#ins-status").html("Concluíndo");
			setTimeout(function(){
			$("#ins-status").html("Aguardando");
		},500);
	}).fail(function(){
		$("#ins-status").html("Algo deu errado.");
	});
}
/*----------------------------------------------------------------------*/
$(function(){
/*----------------------------------------------------------------------*/
	loadEstabs();
	loadProms();
/*----------------------------------------------------------------------*/
	$('[name="ins-estab"]').keypress(function(e){
		var estab = $(this).val();

		if(e.which == 13 && estab.length != 0){
			$.ajax({
				url: "ins-estab.php",
				type: "post",
				data:{
					nome: estab
				},

				berforeSend : function(){
					$("#ins-status").html("Enivando...");
				}
			}).done(function(msg){
				var option = "<option value=\""+ estab + "\" selected>" 
				+ estab + "</option>";
				$('[name="ins-estab"]').val('');
				$("#estab-sel").append(option);

				$("#ins-status").html("Concluíndo");
				setTimeout(function(){
					$("#ins-status").html("Aguardando");
				},500);
				
			}).fail(function(){
				$("#ins-status").html("Algo deu errado.");
			});
		}
	});
/*----------------------------------------------------------------------*/
	$('[name="oferta-type"]').change(function(){
		var type = $(this).val();
		
		$.ajax({
			url :'load-offs.php?type=' + type + '&estab='+ $("#estab-sel").val(),
			type: "get"
		}).done(function(msg){
			$("#oferta-sel").html(msg);
			$("#hidden-form-sec").css("display","block");
		});
	});
/*----------------------------------------------------------------------*/
	$('[name="ins-oferta"]').keypress(function(e){
		var oferta = $(this).val();

		if(e.which == 13 && oferta.length != 0){
			$.ajax({
				url: "ins-off.php",
				type: "post",
				data:{
					nome : oferta,
					estab : $("#estab-sel").val(),
					tipo : $('[name="oferta-type"]:checked').val()
				},

				berforeSend : function(){
					$("#ins-status").html("Enivando...");
				}
			}).done(function(msg){
				$("#selOf").attr("id","");
				var option = "<option value=\""+ msg +"\" selected >" 
				+ oferta + "</option>";
				$('[name="ins-oferta"]').val('');
				$("#oferta-sel").append(option);

				$("#ins-status").html("Concluíndo");
				setTimeout(function(){
					$("#ins-status").html("Aguardando");
				},500);
			}).fail(function(){
				$("#ins-status").html("Algo deu errado.");
			});
		}
	});
/*----------------------------------------------------------------------*/
	$('[name="prc-off"]').keypress(function(e){
		var desc = $(this).val();
		if(e.which == 13 && desc != ''){
			insertPromocao();
		}
	});

	$("#main-button").click(function(){
		insertPromocao();
	});
/*----------------------------------------------------------------------*/


});