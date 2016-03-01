<?php include("cabecalho.php");
include("conectaphp.php");
include ("banco-produto.php");
require("classes/Produto.php");
?>

<table class="table table-striped table-bordered">
<?php
  $produtos= listaProduto($conexao);
  foreach($produtos as $produto) :
?>
  <tr>
  <td><?=$produto['nome'] ?></td>
  <td><?=$produto['preco']?></td>
  <td><?=$produto['descricao']?></td>
  <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?= $produto['id'] ?>">Alterar</a></td>
  <td>
    <form action="remove-produto.php?id=<?=$produto['id']?>" method="post">
      <input type="hidden" name="id" value="<?=$produto['id']?>" />
        <button class="btn btn-danger">remover</button>
    </form>

  </td>
</tr>
<?php
  endforeach
?>

<?php include("rodape.php"); ?>
