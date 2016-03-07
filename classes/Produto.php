<?php
  class Produto {
    public $id;
    public $nome;
    public $preco;
    public $descricao;

  function transformarJson(){
     json_encode($this);
  }

}

 ?>
