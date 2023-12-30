<?php
include('scripts/conexao.php');
$id = intval($_GET['id']);
function limpar_texto($str){ 
    return preg_replace("/[^0-9]/", "", $str); 
}

if(count($_POST) > 0) {

    $erro = false;
    $texto = $_POST['texto'];

    if(empty($texto)) {
        $erro = "Preencha o texto";
    }

    if($erro) {
        echo "<p><b>ERRO: $erro</b></p>";
    } else {
        $sql_code = "UPDATE tarefas
        SET texto = '$texto', 
        WHERE id = '$id'";
        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
        if($deu_certo) {
            echo "<script>alert('Cadastrado Atualizado!');</script>";
            unset($_POST);
        }
    }

}

$sql_tarefa = "SELECT * FROM tarefas WHERE id = '$id'";
$query_tarefa = $mysqli->query($sql_tarefa) or die($mysqli->error);
$tarefa = $query_tarefa->fetch_assoc();

?>