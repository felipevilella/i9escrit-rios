<?php 
require_once"funcoes.php ";

if(isset($_GET["1"])){
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
 <th scope='col'>situação</th>
 </tr>
 </thead>";
 include("analise_projetos_bd.php");
 include("projeto_situacao5.php");
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
  $variacao="";
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
  <th scope='col'>situação</th>
  </tr>
  </thead>";
  include("analise_projetos_bd.php");
  include("projeto_situacao2.php");
  echo"</table>
  <br><br><br>
  </div>
  </div> 
  </div>

  </div>
  </div>
  </div>";
}
if(isset($_GET["3"])){
 $variacao="1";
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
 <th scope='col'>situação</th>
 </tr>
 </thead>";
 include("analise_projetos_bd.php");
 include("projeto_situacao2.php");
 echo"</table>
 <br><br><br>
 </div>
 </div> 
 </div>

 </div>
 </div>
 </div>";
}
if(isset($_GET["4"])){
 $variacao="3";
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
 <th scope='col'>situação</th>
 </tr>
 </thead>";
 include("analise_projetos_bd.php");
 include("projeto_situacao2.php");
 echo"</table>
 <br><br><br>
 </div>
 </div> 
 </div>

 </div>
 </div>
 </div>";
}
if(isset($_GET["5"])){


 $email=$_SESSION['usuarioLogin'];

 echo "<div id='about'>
 <div class='container'>
 <div class='row'>
 <div class='col-md-12'>
 <h3>Meus projetos</h3><br>
 <table class='table'>
 <thead class='thead-dark'>
 <tr>
 <th scope='col'>#</th>
 <th scope='col'>Nome do projeto </th>
 <th scope='col'>Categoria</th>
 <th scope='col'>situação</th>
 <th scope='col'>opção1</th>
 <th scope='col'>opção2</th>
 </tr>
 </thead>";
 include("analise_projetos_bd_usuarios.php");
 include("projeto_situacao.php");
 echo"</table>
 <br><br><br>
 </div>
 </div> 
 </div>

 </div>
 </div>
 </div>";
}
if(isset($_GET["6"])){

 $email=$_SESSION['usuarioLogin'];
 $variacao=projetos_variacao($email);

 echo "<div id='about'>
 <div class='container'>
 <div class='row'>
 <div class='col-md-12'>
 <h3>Projetos criados</h3><br>
 <table class='table'>
 <thead class='thead-dark'>
 <tr>
 <th scope='col'>#</th>
 <th scope='col'>Nome do projeto </th>
 <th scope='col'>Categoria</th>
 <th scope='col'>situação</th>
 </tr>
 </thead>";
 include("analise_projetos_bd_usuarios.php");
 include("projeto_situacao1.php");
 echo"</table>
 <br><br><br>
 </div>
 </div> 
 </div>

 </div>
 </div>
 </div>";
}

if(isset($_GET["8"])){
  $id=$_POST["id"];
  include"projetos_formulario_alteracao.php";
  include"projetos_formulario_alteracao1.php";

}
if(isset($_GET["9"])){

  $email=$_SESSION['usuarioLogin'];
  projetos_exclusao($email);
  $url = 'projetos?5';
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
  echo("<script LANGUAGE=\"JavaScript\">
    alert(\"projeto excluido com sucesso\");
    </SCRIPT>");
}
if(isset($_GET["10"])) {

  $id=$_POST["id"];
  $nome_banco=$_POST["nome"];
  $nome_integrante=$_POST["nome_integrante"];
  $emailbanco=$_POST["Email"];
  $quantidade=$_POST["Quantidade"];
  $video=$_POST["video"];
  $documento=$_POST["video"];
  $patentebanco=$_POST["Patente"];
  $descricaobanco=$_POST["descricao"];
  $objetivobanco=$_POST["Objetivo"];
  $databanco=$_POST["data"];
  $tag=$_POST["tag"];


  if(empty($documento)){
    formulario_alteracao($id,$nome_banco,$nome_integrante,$emailbanco,$quantidade,$patentebanco,$descricaobanco,$objetivobanco,$databanco,$video,$tag);
    if($quantidade<2){
      $url = 'projetos?5';
      echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
      echo("<script LANGUAGE=\"JavaScript\">
        alert(\"projeto alterado com sucesso\");
        </SCRIPT>");
    }
    else{
    $funcao=$quantidade;
    echo "
    <div id='about'>
    <div class='container'>
    <div class='row'>

    <div class='col-md-9 col-xs-12 forma' >
    <form action=projetos?11 method=post>
    <input type=hidden name=email value=$email>";
    include"participantes_bd_alterar.php";
    echo "<div class='cBtn col-xs-12'>
    <br>
    <button type='submit' class='btn btn-primary'>SALVAR INTEGRANTES</button>
    <br><br><br><br><br>
    </form>

    </div>
    </div>
    </div>
    </div> 
    </div>
    ";
    }
  }
  else{
   formulario_alteracao_arquirvo($id,$nome_banco,$nome_integrante,$emailbanco,$quantidade,$patentebanco,$descricaobanco,$objetivobanco,$databanco,$video,$tag,$documento);

   if($quantidade<2){
    $url = 'projetos?5';
    echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    echo("<script LANGUAGE=\"JavaScript\">
      alert(\"projeto alterado com sucesso\");
      </SCRIPT>");
  }
  else{
    $email=$_SESSION["usuarioLogin"];
    $funcao=$quantidade;
    echo "
    <div id='about'>
    <div class='container'>
    <div class='row'>

    <div class='col-md-9 col-xs-12 forma' >
    <form action=projetos?11 method=post>
    <input type=hidden name=email value=$email>";
    
    include"participantes_bd_alterar.php";
    
    echo "<div class='cBtn col-xs-12'>
    <br>
    <button type='submit' class='btn btn-primary'>SALVAR INTEGRANTES</button>
    <br><br><br><br><br>
    </form>

    </div>
    </div>
    </div>
    </div> 
    </div>
    ";
  }
}
}
if(isset($_GET["11"])){
  $cont=$_POST["cont"];
  $aux=1;
  while ($aux <= $cont) {
     $nome=$_POST["nome_integrante$aux"];
     $email=$_POST["Email$aux"];
     $id=$_POST["id$aux"];
     formulario_alteracao_dados($nome,$email,$id);
     $aux++;
  }
  $url = 'projetos?5';
    echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    echo("<script LANGUAGE=\"JavaScript\">
      alert(\"dados alterado com sucesso\");
      </SCRIPT>");
}


?>