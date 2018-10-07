
//ADICIONANDO INTEGRANTES FORMULARIO 
$("#quantintegrantes").on("change",function(){
	var quantidade = $(this).val();

	$("#listintegrantes").html("");
	for(var quant = 0; quant < quantidade ; quant++){
		$("#listintegrantes").append(
			"<div class='col-md-6'>"+
			"<label>Nome</label>"+
			"<div class='input-group'>"+
			"<input type='text' class='form-control form-success' id='nome"+quant+"' placeholder='digite o nome' aria-describedby='basic-addon1'>"+
			"</div>"+
			"</div>"+
			"<div class='col-md-6'>"+
			"<label>Email</label>"+
			"<div class='input-group'>"+
			"<input type='text' class='form-control form-success' id='email"+quant+"' placeholder='digite o email' aria-describedby='basic-addon1'>"+
			"</div>"+
			"</div>"
			);
	}
});
$("#quantintegrantesevento").on("change",function(){
	var quantidade = $(this).val();

	$("#integeventos").html("");
	for(var quant = 0; quant < quantidade ; quant++){
		$("#integeventos").append(
			"<div class='col-md-6'>"+
			"<label>Nome</label>"+
			"<div class='input-group'>"+
			"<input type='text' class='form-control form-success' id='nome"+quant+"' placeholder='digite o nome' aria-describedby='basic-addon1'>"+
			"</div>"+
			"<label class='error-nome"+quant+"' id='error'></label>"+
			"</div>"+
			"<div class='col-md-6'>"+
			"<label>Email</label>"+
			"<div class='input-group'>"+
			"<input type='text' class='form-control form-success' id='email"+quant+"' placeholder='digite o email' aria-describedby='basic-addon1'>"+
			"</div>"+
			"<label class='error-email"+quant+"' id='error'></label>"+
			"</div>"
			);
	}
});
$("#quantifotos").on("change",function(){
	var quantidade = $(this).val();
	$("#quantidadefotos").html("");
	for(var quant = 0; quant < quantidade ; quant++){
		$("#quantidadefotos").append(
			"<div class='col-md-6'>"+
			"<label>foto </label>"+
			"<div class='input-group'>"+
			" <span class='btn btn-success btn-file '><span class='fileinput-new'>Adicionar foto</span><span class='fileinput-exists'></span><input type='file' id='foto"+quant+"'></span>"+	
			"</div>"+
			"<label class='error-foto"+quant+"' id='error'></label>"+
			"</div>"
			);
	}
});
//CADASTRO DE PROJETO
$(".formulario_inscricao").on("click","#cadastroprojeto",function(){

	$(".error-nome").html("");
	$(".error-quantidade").html("");
	$(".error-video").html("");
	$(".error-qfoto").html("");
	$(".error-estagio").html("");
	$(".error-data").html("");
	$(".error-descricao").html("");
	$(".error-objetivo").html("");
	$(".error-categoria").html("");
	$(".error-foto0").html("");
	$(".error-foto1").html("");
	$(".error-foto2").html("");
	$(".error-foto3").html("");
	$(".error-email0").html("");
	$(".error-email1").html("");
	$(".error-email2").html("");
	$(".error-email3").html("");
	$(".error-email4").html("");
	
	$(this).attr("disabled",true);
	var _nomeprojeto = $("#nomeprojeto").val();
	var _quantidade = $("#quantintegrantes").val();
	var _palavarachave = $("#palavrachave").val();
	var _quantidadefotos = $("#quantifotos").val();

	var _datacriacao = $("#datacriacao").val();
	var _descricaoprojeto = $("#descricaoprojeto").val();
	var _objetivo = $("#obetivoprojeto").val();
	var _categoria = $("#categoria").val();
	
	var _video = $("#video").val();
	var _estagio = $("#estagio").val();

	// nome e e-mails do integrantes
	var _nomeintegrante1  = $("#nome0").val();
	var _emailintegrante1 = $("#email0").val();
	var _nomeintegrante2  = $("#nome1").val();
	var _emailintegrante2 = $("#email1").val();
	var _nomeintegrante3  = $("#nome2").val();
	var _emailintegrante3 = $("#email2").val();
	var _nomeintegrante4 = $("#nome3").val();
	var _emailintegrante4 = $("#email3").val();
	var _nomeintegrante5 = $("#nome4").val();
	var _emailintegrante5 = $("#email4").val();



	var _foto1 = $("#foto0").val();
	var _foto2 = $("#foto1").val();
	var _foto3 = $("#foto2").val();
	var _foto5 = $("#foto3").val();
	

	$.ajax({
		url:'formulario_controller/cadastro_formulario',
		type:'post',
		dataType:'json',
		data:{
			quantidade:_quantidade,
			nomeprojeto:_nomeprojeto,
			video:_video,
			data_i:_datacriacao,
			descricao:_descricaoprojeto,
			objetivo:_objetivo,

			nome0:_nomeintegrante1,
			email0:_emailintegrante1,
			nome1:_nomeintegrante2,
			email1:_emailintegrante2,
			nome2:_nomeintegrante3,
			email2:_emailintegrante3,
			nome3:_nomeintegrante4,
			email3:_emailintegrante4,
			nome4:_nomeintegrante5,
			categoria:_categoria,
			email4:_emailintegrante5,
			estagio:_estagio,

			quantidadefotos:_quantidadefotos,

			foto0:_foto1,
			foto1:_foto1,
			foto2:_foto1,
			foto3:_foto1,

		},
 	

		success:function(data){
			$(".error-nome").html(data.nomeprojeto);
			$(".error-quantidade").html(data.quantidade);
			$(".error-video").html(data.video);
			$(".error-qfoto").html(data.quantidadefotos);
			$(".error-estagio").html(data.estagio);
			$(".error-data").html(data.data_i);
			$(".error-descricao").html(data.descricao);
			$(".error-objetivo").html(data.objetivo);
			$(".error-categoria").html(data.categoria);
			$(".error-foto0").html(data.foto0);
			$(".error-foto1").html(data.foto1);
			$(".error-foto2").html(data.foto2);
			$(".error-foto3").html(data.foto3);
			$(".error-email0").html(data.nome0);
			$(".error-email1").html(data.nome1);
			$(".error-email2").html(data.nome2);
			$(".error-email3").html(data.nome3);
			$(".error-email4").html(data.nome4);

		}
	});
	$(this).attr("disabled",false);
});
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

