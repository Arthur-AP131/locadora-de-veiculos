<?php
include 'db.php'; // Conexão com o banco de dados
include 'header.php';

?>


<h1 class= formdesc>Cadastro de veículos</h1>
    <div class = 'formulario'>
   
        <form method="post" action="processa-edit-veic.php">
    <input type="hidden" name="id_veiculo" value="<?php echo $veiculo['id_veiculo']; ?>">

    <input type="text" name="veiculo" value="<?php echo $veiculo['nome_veiculo']; ?>" required>
    <input type="text" name="modelo" value="<?php echo $veiculo['modelo_veiculo']; ?>" required>
    <input type="text" name="placa" value="<?php echo $veiculo['placa_veiculo']; ?>" required>
    <input type="number" name="prc_diario" value="<?php echo $veiculo['valor_diario']; ?>" required>

    </div>
