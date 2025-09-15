<?php
include 'db.php'; // Conexão com o banco de dados

$a = $_POST['veiculo'];
$b = $_POST['modelo'];
$c = $_POST['placa'];
$d = $_POST['prc_diario'];

$query = "INSERT INTO VEICULOS (nome_veiculo, modelo_veiculo, placa_veiculo, valor_diario) VALUES('$a', '$b', '$c', '$d')";

if (mysqli_query($conexao, $query)) {
    echo "<p style='color: green;'>Veículo cadastrado com sucesso!</p>";
    header("refresh:2; url=index.php"); // Redireciona em 2 segundos
} else {
    echo "<p style='color: red;'>Erro ao cadastrar: </p>";
}
?>
