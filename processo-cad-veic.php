<?php
include 'db.php'; // Conexão com o banco de dados

$a = $_POST['veiculo'];
$b = $_POST['modelo'];
$c = $_POST['placa'];
$d = $_POST['prc_diario'];

$query = "INSERT INTO VEICULOS (nome_veiculo, modelo_veiculo, placa_veiculo, valor_diario) VALUES('$a', '$b', '$c', '$d')";

mysqli_query($conexao, $query);

header('location:index.php');
?>