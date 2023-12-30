<?php

$hostname = "localhost";
$usuario = "root";
$password = "";
$database = "tarefas";

$mysqli = new mysqli($hostname, $usuario, $password, $database);
if($mysqli->connect_errno) {
    die("Falha na conexão com o banco de dados");
}

 function formatar_data($data){
     return implode('/', array_reverse(explode('-', $data)));
}