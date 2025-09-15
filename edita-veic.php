<?php

include'db.php';

$sla2 = $_GET['id_veiculo'];

while ($veiculo = mysqli_fetch_array($consulta_alunos)){

    if($veiculo['id_veiculo'] == $sla2){
			?>
			<h1>Editar Veiculo</h1><br>
			<form method="post" action="processa-edit-veic.php">

			<input type="hidden" name="id_veiculo"value="<?php echo $veiculo['id_veiculo']; ?>">

			<h2 class="form-cad-title">Nome</h2>
            <input type='text'name='veiculo' placeholder='Digite o nome do veículo' class = 'campo-cadastroveic'value="<?php echo $veiculo['nome_veiculo']; ?>" required>

            <h2 class="form-cad-title">Modelo</h2>
            <input type='text'name='modelo' placeholder='Digite o modelo do veículo'class = 'campo-cadastroveic'value="<?php echo $veiculo['modelo_veiculo']; ?>" required>

            <h2 class="form-cad-title">Placa</h2>
            <input type='text'name='placa' placeholder='Digite a placa'class = 'campo-cadastroveic'value="<?php echo $veiculo['placa_veiculo']; ?>" required>

            <h2 class="form-cad-title">Preço</h2>
            <input type='number'name='prc_diario' placeholder='Digite o preço diário'class='campo-cadastroveic'value="<?php echo $veiculo['valor_diario']; ?>" required>

            <h2 class="form-cad-title">Imagem</h2>
            <input type="file" accept="image/*">
            
            <input type='submit' value = 'Editar veiculo' class = 'botao-cad'>
			</form>
		<?php }} ?>
	