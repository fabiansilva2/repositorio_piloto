<?php
function limpar_texto($str){ 
    return preg_replace("/[^0-9]/", "", $str); 
}

if(count($_POST) > 0) {

    include('scripts/conexao.php');
    
    $erro = false;
    $texto = $_POST['texto'];

    if(empty($texto)) {
        $erro = "Preencha o texto";
    }

    if($erro) {
        echo "<p><b>ERRO: $erro</b></p>";
    } else {
        $sql_code = "INSERT INTO tarefas (texto, data_cadastro) 
        VALUES ('$texto', NOW())";
        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
        if($deu_certo) {
            echo "<script>alert('Tarefa Cadastrada!');</script>"; 
            unset($_POST);
        }
    }

}

?>