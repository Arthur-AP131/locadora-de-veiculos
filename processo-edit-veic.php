<?php

include 'db.php';

$id = $_POST['id_veiculo'];
$veiculo = $_POST['veiculo_edit'];
$modelo = $_POST['modelo_edit'];
$placa = $_POST['placa_edit'];
$preco = $_POST['prc_diario_edit'];


$query_update = "UPDATE VEICULOS SET nome_veiculo='$veiculo', modelo_veiculo='$modelo', placa_veiculo= '$placa', valor_diario='$preco' WHERE id_veiculo = $id";

mysqli_query($conexao, $query_update);

header('location:index.php');