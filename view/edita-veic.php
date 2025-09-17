<?php
include '../header.php';
include '../db.php';

$sla2 = $_GET['ID'];

while ($veiculo = mysqli_fetch_array($consulta_veiculos)) {

    if($veiculo['id_veiculo'] == $sla2){
			?>
			<h1 class = 'formdesc'>Editar Veiculo</h1><br>
            <div class = 'formulario'>
			<form method="post" action="/locadora-de-veiculos/processo-edit-veic.php" class = 'form-cadastro'>

			<input type="hidden" name="id_veiculo"value="<?php echo $veiculo['id_veiculo']; ?>" required >

			<h2 class="form-cad-title">Nome</h2>
            <input type='text'name='veiculo_edit' placeholder='Digite o nome do veículo' class = 'campo-cadastroveic'value="<?php echo $veiculo['nome_veiculo']; ?>" required>

            <h2 class="form-cad-title">Modelo</h2>
            <input type='text'name='modelo_edit' placeholder='Digite o modelo do veículo'class = 'campo-cadastroveic'value="<?php echo $veiculo['modelo_veiculo']; ?>" required>

            <h2 class="form-cad-title">Placa</h2>
            <input type='text'name='placa_edit' placeholder='Digite a placa'class = 'campo-cadastroveic'value="<?php echo $veiculo['placa_veiculo']; ?>" required >

            <h2 class="form-cad-title">Preço</h2>
            <input type='number'name='prc_diario_edit' placeholder='Digite o preço diário'class='campo-cadastroveic'value="<?php echo $veiculo['valor_diario']; ?>" required >
            
            <input type='submit' value = 'Editar veiculo' class = 'botao-cad'>
    </div>
		<?php }} ?>