<?php require_once('cabecalho.php'); ?>

<?php

$types = array( 'png', 'jpg', 'jpeg', 'gif' );
if ( $handle = opendir('C:\Users\Usuario\Desktop\Editadas') ) {
    while ( $entry = readdir( $handle ) ) {
        $ext = strtolower( pathinfo( $entry, PATHINFO_EXTENSION) );
        if( in_array( $ext, $types ) ) echo $entry;
    }
    closedir($handle);
}   

?>

<?php require_once('rodape.php'); ?>