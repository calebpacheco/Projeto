<?php include("cabecalho.php");
include("conectaphp.php");
include ("banco-produto.php");

$id = $_GET['id'];

if(removeProduto($conexao,$id)) { ?>
    <p class="text-success"> O Produto removido com sucesso!</p>
    <?php } else {
      $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">  O Produto não foi removido:<?= $msg?></p>
    <?php
}

?>
<?php include("rodape.php"); ?>
