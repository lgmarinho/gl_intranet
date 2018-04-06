<?php

include("conexao.php");


function BuscarUsuario($conexao, $id){
    $SqlBuscaQuery = "Select * from usuario where id = {$id}";
    $resultadoBusca = mysqli_query($conexao,$SqlBuscaQuery);
    return mysqli_fetch_assoc($resultadoBusca);

}

function AlterarUsuario($conexao,$id,$nmUsuario,$email,$setor_id){
    $SqlAlteraQuery = "update usuario set nome='{$nmUsuario}', email = {$email}, setor= {$setor_id} where id = '{$id}'";
    return mysqli_query($conexao,$SqlAlteraQuery);

}

function InserirUsuario($conexao,$nmUsuario,$email){
    $nmUsuario = mysqli_real_escape_string($conexao, $nmUsuario);
    $SqlInsertQuery = "insert into usuario (nome, email) values ('{$nmUsuario}',{$email})";
      
    $ResultadoInsert = mysqli_query($conexao,$SqlInsertQuery);
    return $ResultadoInsert;
    
}

function RemoverUsuario($conexao, $id){
    $SqlDeleteQuery = "delete from usuario where id ={$id}";
    return mysqli_query($conexao, $SqlDeleteQuery);
               
}