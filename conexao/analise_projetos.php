<?php
require_once"funcoes.php";

if(isset($_GET["analise"])){
    echo "<div id='about'>
    <div class='container'>
    <div class='row'>
    <div class='col-md-12'>
    <h3>Analise de projetos</h3><br>
    <table class='table'>
    <thead class='thead-dark'>
    <tr>
    <th scope='col'>#</th>
    <th scope='col'>Nome do projeto </th>
    <th scope='col'>Categoria</th>
    <th scope='col'>Opção 1</th>
    <th scope='col'>Opção 2</th>
    <th scope='col'>Opção 2</th>
    </tr>
    </thead>";
    include("analise_projetos_bd.php");
    include("analise_projetos_lista_bd.php");
    echo"</table>
    <br><br><br>
    </div>
    </div> 
    </div>

    </div>
    </div>
    </div>";
}
if(isset($_GET["2"])){
    $id=$_POST["id"];
    $quantidade=$_POST["quantidade"];
    include("visualizacao_projetos_bd.php");

    echo "<div class='col-md-12'>
    <div class='panel panel-default'>
    <div class='panel-body'>
    <div class='panel-title'><b>Dados do projeto</b></hr></div>
    <div class=col-md-4>
    <br>
    <!--so vai mudar o kCGAGS3e8cY para conseguir simular o yotube-->
    <div style='position:relative;height:0;padding-bottom:56.21%''><iframe src='https://www.youtube.com/embed/$video_1?ecver=2' style='position:absolute;width:100%;height:100%;left:0' width='441' height='360' frameborder='0' allowfullscreen></iframe></div>

    <form action='$documentobanco' target='_blank'>
    <button type='submit' class='btn btn-success btn-block'>Ver documento </button> 
    </form>
    </div>

    <div class='col-md-8'>
    <table>
    <tr><td><h3>$nome_banco</h3></td></tr>
    <tr><td><b>Descrição:</b></td></tr>
    <tr><td>$descricaobanco</td></tr>
    <tr><td><br><b>Objetivo:</b></td></tr>
    <tr><td>$objetivobanco</td></tr>
    <tr><td><br><b>Imagem capa:</b></td></tr>
    <tr><td><div class='col-md-12'><br><img id='myImg1' src='imagem/$fotobanco' width='300' height='200'></div></td></tr>

    <tr><td><br><b>Imagem:</b></td></tr>
    <tr><td><br><img id='myImg2' src='imagem/$fotobanco1'  width='300' height='200'>";
    if(empty($fotobanco2)){

    }
    else{
       echo "<img id='myImg3' src='imagem/$fotobanco2'  width='300' height='200'>";    
   }
   if(empty($fotobanco3)){
    echo "</td></tr>";
}
else{
   echo "<img id='myImg3' src='imagem/$fotobanco3'  width='300' height='200'></td></tr>";    
}


echo "<tr><td><br><b>Estagio do projeto: </b>$patenteBanco</td></tr>
<tr><td><b>Data de criação do projeto:</b> $databanco</td></tr>
<tr><td><b>TAG / Palavra chave: </b>$tagbanco</td></tr>
<tr><td><b>Categoria:</b> $categoriabanco</td></tr>";



if($quantidade>1){
    echo "<tr><td><br><b>Integrantes:</b></td></tr>
    <tr><td>$nomeintegrantesbanco - $emailbanco </td></tr>";
    $cont=0;
    while($cont<$aux1){
       echo "<tr><td>$nome_banco1[$cont] - $email_banco1[$cont] </td></tr>";
       $cont++;
   }
}
else{
   echo "<tr><td><br><b>Integrantes:</b></td></tr>
   <tr><td>$nomeintegrantesbanco - $emailbanco </td></tr>";
}

echo "</table>
<br><br><br>
</div>
<div class='col-md-4'>
<form action='analise?1' method=post>
<input type=hidden name=id value='$id'>
<button type='submit' class='btn btn-success btn-block'>Aprovar</button>
</form>
</div>
<div class='col-md-4'>
<form action='analise?analise' method=post>
<button type=submit class='btn btn-primary btn-block'>Voltar</button>
</form>
</div>
<div class='col-md-4'>
<form action='analise?3' method=post>
<input type=hidden name=id value='$id'>
<button type='submit' class='btn btn-danger btn-block'>Reprovar</button>
</form>
</div>
</div>
</div>
</div>";
}
if(isset($_GET["1"])){

    $id=$_POST["id"];
    dados_confirmados($id);
    //include("analise_dadoenvioconfirmado.php");
    $url ='analise?analise';
    echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

}
if(isset($_GET["3"])){
    $id=$_POST["id"];

    dados_recursados($id);
    //include("analise_dadoenviorecusado.php");
    $url ='analise?analise';
    echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
   
}

?>