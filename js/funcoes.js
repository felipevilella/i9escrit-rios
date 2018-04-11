$(document).ready(
	function(){
		$("form").submit(
			function(){
				var senha=document.formulario.senha.value;
				var senha1=document.formulario.senha1.value;

				if(senha!=senha1){
					var campo=document.getElementById("Rf").innerHTML="Senhas divergente, digite novamente!";
					$("#Rf").css({"color": "red"});

					event.preventDefault();
				}
				if(senha=="" && senha1==""){
					var campo=document.getElementById("Rf").innerHTML="Campos vazio, digite as senhas!";
					$("#Rf").css({"color": "red"});
					event.preventDefault();
				}

			}
			)
	}

	);

