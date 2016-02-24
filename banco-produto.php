<?php

function insereProduto($conexao,Produto $produto){
  $query="insert into produtos (nome,preco,descricao) values ('{$produto->nome}',{$produto->preco},'{$produto->descricao}')";
  return mysqli_query($conexao,$query);
}

function listaProdutos($conexao) {
  $produtos = array();
  $resultado = mysqli_query($conexao, "select * from produtos");
  while($produto = mysqli_fetch_assoc($resultado)) {
    array_push($produtos, $produto);
    }

      return $produtos;
}

function removeProduto($conexao,$id){
  $query = "delete from produtos where id = {$id}";
  return mysqli_query($conexao,$query);
}

function alteraProduto($conexao,$id,Produto $produto){
  $query = "update produtos set nome = '{$produto->nome}', preco = {$produto->preco}, descricao = '{$produto->descricao}', where id = '{$id}'";
  return mysqli_query($conexao,$id);
}

?>
