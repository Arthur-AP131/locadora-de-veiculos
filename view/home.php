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
<br><br><br>
<div class="home-title">
    <h1>Home</h1>
    <input type="button" value="Cadastrar Veículo" class="botao-cad-home" onclick="window.location.href='cadastro-de-veiculos.php'">
</div>
<br><br><br>

<div class= "div-card">

    <?php
    if (isset($veiculos) && count($veiculos) > 0) {
        foreach ($veiculos as $veiculo) {
            echo "<div class='card-veiculo'>";
                echo "<div class = 'card-cima'>";
                    echo "<h2>{$veiculo['nome_veiculo']}</h2>";
                    echo "<p class= 'card-modelo'>{$veiculo['modelo_veiculo']}</p>";
                    echo "<p class = 'card-placa'>Placa: {$veiculo['placa_veiculo']}</p>";
                echo"</div>";

                echo "<div class = 'card-baixo'>";
                    echo "<p class = 'card-valor'>R$ {$veiculo['valor_diario']}/Dia</p>";
                     echo " <input type='button' value='Alugar Veículo' class='botao-alugar'>";
                     echo " <a href=processo-del-veic.php?ID={$veiculo['id_veiculo']}> <input type='button' value='Deletar' class='botao-deletar'> <a/>";
                    echo " <a href=edita-veic.php?ID={$veiculo['id_veiculo']}> <input type='button' value='Editar' class='botao-alugar'> <a/>";
                echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p>Nenhum veículo cadastrado.</p>";
    }
    ?>

</div>

<img src="" alt="">