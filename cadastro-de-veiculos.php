<?php
include 'db.php'; // Conexão com o banco de dados
include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    
</body>
</html>
<body>

<h1 class= formdesc>Cadastro de veículos</h1>
    <div class = 'formulario'>
   
        <form method = 'post' action = 'processo-cad-veic.php' class = "form-cadastro">
            <h2 class="form-cad-title">Nome</h2>
            <input type = 'text' name = 'veiculo' placeholder = 'Digite o nome do veículo' class = 'campo-cadastroveic'>
            <h2 class="form-cad-title">Modelo</h2>
            <input type = 'text' name = 'modelo' placeholder = 'Digite o modelo do veículo'class = 'campo-cadastroveic'>
            <h2 class="form-cad-title">Placa</h2>
            <input type = 'text' name = 'placa' placeholder = 'Digite a placa'class = 'campo-cadastroveic'>
            <h2 class="form-cad-title">Preço</h2>
            <input type = 'number' name = 'prc_diario' placeholder = 'Digite o preço diário'class = 'campo-cadastroveic'>
            <input type = 'submit' value = 'Cadastrar veículo' class = 'botao-cad'>
        </form>
    </div>
</body>
</html>