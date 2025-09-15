<?php

include 'db.php';

$id = $_POST['id_veiculo'];
$veiculo = $_POST['veiculo'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$preco = $_POST['prc_diario'];


$query = "UPDATE VEICULOS SET nome_veiculo='$veiculo', modelo_veiculo='$modelo', placa_veiculo= '$placa', valor_diario='$preco' WHERE id = $id";

mysqli_query($conexao, $query);

header('location:index.php');