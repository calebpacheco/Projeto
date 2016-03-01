<?php include("cabecalho.php");
include("conectaphp.php");
include ("banco-produto.php");
require("classes/Produto.php");

$produto = new Produto;

$produto->nome = $_POST['nome'];
$produto->preco = $_POST['preco'];
$produto->descricao = $_POST['descricao'];

if(insereProduto($conexao,$produto)) { ?>
    <p class="text-success">  Produto <?= $produto->nome; ?>, <?= $produto->preco; ?> adicionado com sucesso!</p>
    <?php } else {
      $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">  Produto <?= $produto->nome; ?>, <?= $produto->preco; ?> O produto não foi adicionado:<?= $msg?></p>
    <?php
}

?>
<?php include("rodape.php"); ?>
