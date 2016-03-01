<?php include("cabecalho.php");
include("conectaphp.php");
include ("banco-produto.php");
require("classes/Produto.php");

$produto = new Produto;

$produto->$id = $_POST['id'];
$produto->$nome= $_POST['nome'];
$produto->$preco= $_POST['preco'];
$produto->$descricao = $_POST['descricao'];

if(alteraProduto($conexao, $produto)) { ?>
    <p class="text-success">  Produto <?=$produto->nome; ?>, <?=$produto->preco; ?> foi alterado!</p>
    <?php } else {
      $msg = mysqli_error($conexao);
      ?>

    <p class="text-danger">  Produto <?=$produto->nome; ?> Não foi alterado:<?= $msg?></p>
    <?php
}

?>

<?php include("rodape.php")?>
