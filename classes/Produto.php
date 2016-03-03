<?php
  class Produto {
    public $nome;
    public $preco;
    public $descricao;

  function transformarJson(){
    return json_encode($this);
  }

}

 ?>
