<?php
 
 $servidor = "localhost";
 $usuario = "root";
 $senha = "";
 $db = "locadora";
 
 $conexao = mysqli_connect($servidor, $usuario, $senha, $db);

 if (mysqli_connect_errno()) {
    echo "Falha na conexão: (" . mysqli_connect_error() . ")" . mysqli_connect_errno();
 }