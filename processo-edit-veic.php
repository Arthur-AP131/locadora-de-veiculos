<?php

include 'db.php';

$id = $_POST['id_veiculo'];
$veiculo = $_POST['veiculo_edit'];
$modelo = $_POST['modelo_edit'];
$placa = $_POST['placa_edit'];
$preco = $_POST['prc_diario_edit'];

if(isset($_FILES['imagem_edit']) && $_FILES['imagem_edit']['error'] === UPLOAD_ERR_OK){
    $imagem_tmp_edit = $_FILES['imagem_edit']['tmp_name'];
    $imagem_bin_edit = file_get_contents($imagem_tmp_edit);
    $imagem_bin_edit = mysqli_real_escape_string($conexao, $imagem_bin_edit);

    $query_update = "UPDATE VEICULOS SET nome_veiculo='$veiculo', modelo_veiculo='$modelo', placa_veiculo='$placa', valor_diario='$preco', imagem_veiculo='$imagem_bin_edit' WHERE id_veiculo = $id";
} else {
    $query_update = "UPDATE VEICULOS SET nome_veiculo='$veiculo', modelo_veiculo='$modelo', placa_veiculo='$placa', valor_diario='$preco' WHERE id_veiculo = $id";
}

if (mysqli_query($conexao, $query_update)) {
    echo "<div style = 'display: flex; align-items: center; justify-content: center; width: 100%; height: 100%'><div style = 'display: flex; background-color: #efefef; width: 600px; height: 300px; border-radius: 15px; align-items: center; justify-content: center'><p style = 'color: #00bf63; font-family: sans-serif'>Veículo editado com sucesso!</p></div></div>";
    header("refresh:2; url=index.php");
} else {
    echo "<p style='color: red;'>Erro ao editar</p>";
}
?>