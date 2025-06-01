<?php
include 'db.php'; // Conexão com o banco de dados

$query = "SELECT * FROM veiculos";
$resultado = $conexao->query($query);
if ($resultado) {
    $veiculos = $resultado->fetch_all(MYSQLI_ASSOC);
} else {
    echo "Erro ao buscar veículos: " . $conexao->error;
}

?>

<div class="home-title">
    <h1>Home</h1>
    <input type="button" value="Cadastrar Veículo" class="botao" onclick="window.location.href='cadastro-de-veiculos.php'">
</div>
<br><br>

<div class= "div-card">
    <div class="card">
        <?php
        if (isset($veiculos) && count($veiculos) > 0) {
            foreach ($veiculos as $veiculo) {
                echo "<div class='card'>";
                echo "<h2>{$veiculo['nome_veiculo']}</h2>";
                echo "<p>Modelo: {$veiculo['modelo_veiculo']}</p>";
                echo "<p>Placa: {$veiculo['placa_veiculo']}</p>";
                echo "<p>Valor Diário: {$veiculo['valor_diario']}</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Nenhum veículo cadastrado.</p>";
        }
        ?>
    </div>
</div>