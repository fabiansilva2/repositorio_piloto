<?php
if(isset($_POST['confirmar'])) {

    include("scripts/conexao.php");
    $id = intval($_GET['id']);
    $sql_code = "DELETE FROM clientes WHERE id = '$id'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    if($sql_query) { ?>
        <div class="container pt-5">
        <h4>Cliente deletado com sucesso!</h4><br>
        <p><a href="index.php" class="btn btn-primary btn-sm">Voltar para o Início</a>.</p>
        </div>
        <?php
        die();
    }
}
?>