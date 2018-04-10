<?php

include("conexao.php");


function BuscarUsuario($conexao, $id){
    $SqlBuscaQuery = "Select * from cusuario where codigo = {$codigo}";
    $resultadoBusca = mysqli_query($conexao,$SqlBuscaQuery);
    return mysqli_fetch_assoc($resultadoBusca);

}

function AlterarUsuario($conexao,$codigo,$usuario,$email,$codpessoa,$dataalteracao,$dtvenc){
    $SqlAlteraQuery = "update usuario set usuario='{$usuario}', email = '{$email}', dataalteracao= '{$dataalteracao}', dtvenc ='{$dtvenc}'' where id = '{$id}'";
    return mysqli_query($conexao,$SqlAlteraQuery);

}

function InserirUsuario($conexao,$usuario,$email,$datacriacao,$codfuncao,$codsecao,$codpessoa){
    $nmUsuario = mysqli_real_escape_string($conexao, $nmUsuario);
    $SqlInsertQuery = "insert into cusuario (usuario,email,datacriacao,dataalteracao,codfuncao,codsecao,codpessoa) values ('{$usuario}','{$email}',datacriacao='{$datacriacao}',dataalteracao='{$dataalteracao}',codfuncao={$codfuncao},codsecao={$codsecao})";
      
    $ResultadoInsert = mysqli_query($conexao,$SqlInsertQuery);
    return $ResultadoInsert;
    
}

function RemoverUsuario($conexao, $codigo){
    $SqlDeleteQuery = "delete from usuario where codigo ={$codigo}";
    return mysqli_query($conexao, $SqlDeleteQuery);
               
}