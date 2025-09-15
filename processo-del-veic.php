<?php

include'db.php';

$sla = $_GET['ID'];


$query = "DELETE FROM VEICULOS WHERE id_veiculo = $sla";

mysqli_query($conexao, $query);

header('location:index.php');

?>