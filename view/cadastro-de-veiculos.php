<?php
include '../db.php'; // Conexão com o banco de dados
include '../header.php';

?>


<h1 class= formdesc>Cadastro de veículos</h1>
    <div class = 'formulario'>
   
           <form method = 'post' action = '/locadora-de-veiculos/processo-cad-veic.php' class = "form-cadastro" enctype="multipart/form-data" autocomplete = "off">
            <h2 class="form-cad-title">Nome</h2>
            <input type = 'text' name = 'veiculo' placeholder = 'Digite o nome do veículo' class = 'campo-cadastroveic' required>
            <h2 class="form-cad-title">Modelo</h2>
            <input type = 'text' name = 'modelo' placeholder = 'Digite o modelo do veículo'class = 'campo-cadastroveic' required>
            <h2 class="form-cad-title">Placa</h2>
            <input type = 'text' name = 'placa' placeholder = 'Digite a placa'class = 'campo-cadastroveic' required>
            <h2 class="form-cad-title">Preço</h2>
            <input type = 'number' name = 'prc_diario' placeholder = 'Digite o preço diário'class = 'campo-cadastroveic' required>
            <input type = 'submit' value = 'Cadastrar veículo' class = 'botao-cad'>
    </div>
