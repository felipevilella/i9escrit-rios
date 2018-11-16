//ADICIONANDO INTEGRANTES FORMULARIO 
$("#quantintegrantes").on("change",function(){
	var quantidade = $(this).val();
	desativar_campos();
	if(quantidade == 2){
		$("#nome0").toggleClass("hidden");
		$("#nome1").toggleClass("hidden");
		$("#email0").toggleClass("hidden");
		$("#email1").toggleClass("hidden");
	}
	if(quantidade == 3){
		$("#nome0").toggleClass("hidden");
		$("#nome1").toggleClass("hidden");
		$("#nome2").toggleClass("hidden");
		$("#nome3").toggleClass("hidden");
		
		$("#email0").toggleClass("hidden");
		$("#email1").toggleClass("hidden");
		$("#email2").toggleClass("hidden");
		$("#email3").toggleClass("hidden");
	}
	if(quantidade == 4){
		$("#nome0").toggleClass("hidden");
		$("#nome1").toggleClass("hidden");
		$("#nome2").toggleClass("hidden");
		$("#nome3").toggleClass("hidden");
		$("#nome4").toggleClass("hidden");
		
		$("#email0").toggleClass("hidden");
		$("#email1").toggleClass("hidden");
		$("#email2").toggleClass("hidden");
		$("#email3").toggleClass("hidden");
		$("#email4").toggleClass("hidden");
	}

	if(quantidade == 5){
		$("#nome0").toggleClass("hidden");
		$("#nome1").toggleClass("hidden");
		$("#nome2").toggleClass("hidden");
		$("#nome3").toggleClass("hidden");
		$("#nome4").toggleClass("hidden");
		$("#nome5").toggleClass("hidden");
		
		$("#email0").toggleClass("hidden");
		$("#email1").toggleClass("hidden");
		$("#email2").toggleClass("hidden");
		$("#email3").toggleClass("hidden");
		$("#email4").toggleClass("hidden");
		$("#email5").toggleClass("hidden");
	}

});

$("#quantifotos").on("change",function(){
	var quantidade = $(this).val();
	desativar_fotos();
	if(quantidade == 2 ){
		$("#foto0").toggleClass("hidden");
		$("#foto1").toggleClass("hidden");	
	}

	if(quantidade == 3 ){
		$("#foto0").toggleClass("hidden");
		$("#foto1").toggleClass("hidden");
		$("#foto2").toggleClass("hidden");	
	}

	if(quantidade == 4 ){
		$("#foto0").toggleClass("hidden");
		$("#foto1").toggleClass("hidden");
		$("#foto2").toggleClass("hidden");
		$("#foto3").toggleClass("hidden");	
	}
}); 

function desativar_fotos(){
	$("#foto0").addClass("hidden");
	$("#foto1").addClass("hidden");
	$("#foto2").addClass("hidden");
	$("#foto3").addClass("hidden");
}
function desativar_campos(){
	$("#nome0").addClass("hidden");
	$("#nome1").addClass("hidden");
	$("#nome2").addClass("hidden");
	$("#nome3").addClass("hidden");
	$("#nome4").addClass("hidden");
	$("#nome5").addClass("hidden");

	$("#email0").addClass("hidden");
	$("#email1").addClass("hidden");
	$("#email2").addClass("hidden");
	$("#email3").addClass("hidden");
	$("#email4").addClass("hidden");
	$("#email5").addClass("hidden");

	$("#foto0").addClass("hidden");
	$("#foto1").addClass("hidden");
	$("#foto2").addClass("hidden");
	$("#foto3").addClass("hidden");
	
}
$("#quantintegrantesevento").on("change",function(){
	var quantidade = $(this).val();

});
//CADASTRO DE PROJETO
$("#descricaoprojeto").on("input",function(){
	var caracter = $(this).val();
	var soma = 200 - caracter.length;
	$("#contadordescricao").html(soma);
});
$("#obetivoprojeto").on("input",function(){
	var caracter = $(this).val();
	var soma = 500 - caracter.length;
	$("#contadorobjetivo").html(soma);
});

$("#Programa").on("click",function(){
	var id = $("#idprojeto").val();
	window.location.href = "vervitrine/"+id;
});
$("#Visualizarprojeto").on("click",function(){
	
});
$("#evento").on("click",function(){
	$("#modalprojeto").modal();
});
$("#vitrine").on("click",function(){
	var id = $("#idvitrine").val();
	window.location.href = "vervitrine/"+id;
});
$("#descricao").on("input",function(){
	var descricao = $(this).val();
	var total = 200 - descricao.length ;
	$("#contadordescricao").html(total);
});

$("#objetivo").on("input",function(){
	var descricao = $(this).val();
	var total = 500 - descricao.length ;
	$("#contadorobjetivo").html(total);
});
$("#entrar").on("click",function(){
	var usuario_login = $("#usuario").val();
	var senha_login = $("#senha").val();
	$(".mensagem").html("");


	$.ajax({
		type:"post",
		url: "Login_controller/validacao",
		dataType:"Json",
		data:{
			usuario:  usuario_login,
			senha : senha_login
		},
		success:function(data){
			$(".mensagem").html(data.mensagem);
			if(data.confirmado == "ok"){
				window.location.href = "menu";

			}
		}
		
	});

});
$("#visualizar").on("click",function(){
	var id= $("#idProjeto").val();
	window.location.href = base_url+"visualizarprojeto/"+id;
});
$("#visualizarevento").on("click",function(){
	var id= $("#idevento").val();
	window.location.href = base_url+"visualizarevento/"+id;
});
$("#confirmarevento").on("click",function(){
	var id = $("#id").val();
	$.ajax({
		type:"post",
		url: base_url+"aprovarevento",
		dataType:'Json',
		data:{
			idevento: id
		},
		error:function(data){
			alert("Evento aprovado com sucesso");
			window.location.href = base_url+"eventospendentes";
		}
	});
});
$("#Recusarevento").on("click",function(){
	var id = $("#id").val();
	$.ajax({
		type:"post",
		url: base_url+"reprovarevento",
		dataType:'Json',
		data:{
			idevento: id
		},
		error:function(data){
			alert("Evento reprovado  com sucesso");
			window.location.href = base_url+"eventospendentes";
		}
	});
});
$("#confirmarprojeto").on("click",function(){
	var id = $("#id").val();
	$.ajax({
		type:"post",
		url: base_url+"aprovarprojeto",
		dataType:'Json',
		data:{
			idprojeto: id
		},
		error:function(data){
			alert("Projeto aprovado com sucesso");
			window.location.href = base_url+"projetospendentes";
		}
	});
});
$("#Recusarprojeto").on("click",function(){
	var id = $("#id").val();
	$.ajax({
		type:"post",
		url: base_url+"reprovarprojeto",
		dataType:'Json',
		data:{
			idprojeto: id
		},
		error:function(data){
			alert("Projeto reprovado com sucesso");
			window.location.href = base_url+"projetospendentes";
		}
	});
});
$("#pesquisa").on("input",function(){
	$("#informacao").html("pesquisando...");
	var informacao = $("#pesquisa").val();
	$.ajax({
		url: base_url+"buscarvitrine",
		type:'post',
		dataType:'Json',
		data:{
			pesquisaDados:informacao
		},
		success:function(data){
			if(data.retorno == "vazio"){

			}
			else{
				console.log(data);
				$("#painelvitrine").html("");
				for(var i = 0; i<data.retorno.length;i++){
					$("#painelvitrine").append(
						"<div class='col-12 col-sm-12 col-md-4'>"+
						"<div class='card' style='width: 20rem;'>"+
						"<input type='hidden' id='idvitrine' value='"+data.retorno[i].idProjeto+"''>"+
						"<a href='#'' id='vitrine'><img class='card-img-top' src='assets/foto_projeto/"+data.retorno[i].caminho_foto+"' alt='Card image cap'></a>"+
						"<div class='card-body'>"+
						"<p class='card-text'>"+data.retorno[i].descricao+"</p>"+
						"</div></div></div>");

				}
			}

		}
	});
});
$("#visualizareventousuario").on("click",function(){
	var id= $("#idevento").val();
	window.location.href = base_url+"vereventousuario/"+id;
});
$("#visualizarprojetousuario").on("click",function(){
	var id= $("#idProjeto").val();
	window.location.href = base_url+"meusprojetos/"+id;
});