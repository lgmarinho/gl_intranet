<?php require_once('cabecalho.php'); ?>

<?php
$path = 'arquivos/politicas/';
$diretorio = dir($path);


while($arquivo = $diretorio -> read()){

	 if($arquivo != "." && $arquivo != ".." ){

      echo utf8_encode("<a href='".$path.$arquivo."'>".$arquivo."</a><br />");

     }
}     
$diretorio -> close();

?>

<?php require_once('rodape.php'); ?>