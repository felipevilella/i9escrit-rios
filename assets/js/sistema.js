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
	$("#modalprojeto").modal();
});
$("#Visualizarprojeto").on("click",function(){
	window.location.href = "verprojeto";
});
$("#evento").on("click",function(){
	$("#modalprojeto").modal();
});
$("#vitrine").on("click",function(){
	window.location.href = "vervitrine";
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

})		