<?php
include 'db.php'; // Conexão com o banco de dados

$a = $_POST['veiculo'];
$b = $_POST['modelo'];
$c = $_POST['placa'];
$d = $_POST['prc_diario'];

if(isset($_FILES['imagem_edit']) && $_FILES['imagem_edit']['error'] === UPLOAD_ERR_OK){

    $imagem_tmp = $_FILES['imagem']['tmp_name'];
    $imagem_bin = file_get_contents($imagem_tmp);

    $imagem_bin = mysqli_real_escape_string($conexao, $imagem_bin);

    $e = $imagem_bin;

    $query_cad = "INSERT INTO VEICULOS (nome_veiculo, modelo_veiculo, placa_veiculo, valor_diario, imagem_veiculo) VALUES('$a', '$b', '$c', '$d', '$e')";

    if (mysqli_query($conexao, $query_cad)) {
        echo "<div style = 'display: flex; align-items: center; justify-content: center; width: 100%; height: 100%'><div style = 'display: flex; background-color: #efefef; width: 600px; height: 300px; border-radius: 15px; align-items: center; justify-content: center'><p style = 'color = #00bf63; font-family: sans-serif'>Veículo cadastrado com sucesso!</p></div></div>";
        header("refresh:2; url=index.php"); // Redireciona em 2 segundos
    } else {
        echo "<p style='color: red;'>Erro ao cadastrar</p>";
    };
}
else{
    echo "erro no upload";
};


?>
