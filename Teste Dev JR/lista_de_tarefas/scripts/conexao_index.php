<?php 
include('scripts/conexao.php');
$sql_tarefas = "SELECT * FROM tarefas";
$query_tarefas = $mysqli->query($sql_tarefas) or die($mysqli->error);
$num_tarefas = $query_tarefas->num_rows;
?>