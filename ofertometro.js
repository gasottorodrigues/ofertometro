function loadEstabs(){
	$.ajax({
		url : "load-estabs.php",
		type: "get"
	}).done(function(msg){
		$("#estab-sel").html(msg);
	})
}



$(function(){

	loadEstabs();
	
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

	$('[name="oferta-type"]').change(function(){
		var type = $(this).val();

		$.ajax({
			url :'load-offs.php?type=' + type,
			type: "get"
		}).done(function(msg){
			$("#oferta-sel").html(msg);
			$("#hidden-form-sec").css("display","block");
		});
	});

	$('[name="ins-oferta"]').keypress(function(e){
		var oferta = $(this).val();

		if(e.which == 13 && oferta.length != 0){
			$.ajax({
				url: "ins-off.php",
				type: "post",
				data:{
					nome : oferta,
					estab : $("#estab-sel").val(),
					tipo : $('[name="oferta-type"]').val()
				},

				berforeSend : function(){
					$("#ins-status").html("Enivando...");
				}
			}).done(function(msg){
				var option = "<option value=\""+ msg +"\" selected>" 
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

});