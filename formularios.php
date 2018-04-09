<?php require_once('cabecalho.php'); ?>



<div id="container">

<p class="display-1 text-center">Formulários</p>

<table class="sortable">

<?php

$path = 'arquivos/formularios/';
$diretorio = dir($path);


while($arquivo = $diretorio -> read()){

     if($arquivo != "." && $arquivo != ".." ){ 

      echo utf8_encode("<a href='".$path.$arquivo."'>".$arquivo."</a><br />");

     }
}     
$diretorio -> close();


?>

</div>

<?php require_once('rodape.php'); ?>