<?php
include '../header.php';
include '../db.php';

echo "<div class: alugar-veiculo-container>";
if (isset($_GET['ID'])) {
    $id_veiculo = $_GET['ID'];

    // Buscar detalhes do veículo no banco de dados
    $query = "SELECT * FROM VEICULOS WHERE id_veiculo = $id_veiculo";
    $resultado = $conexao->query($query);

}else {
    echo "<p>ID do veículo não fornecido.</p>";
}
echo "</div>";