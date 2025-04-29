<?php 
 
#iniciar sessão
session_start();
 
#Base de dados
include 'db.php';
 
#Cabecalho
include 'header.php';
 
 
#Conteúdo da página
 
if(isset($_SESSION['login'])){//se existir um login
    if(isset($_GET['pagina'])){
 		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'teste';
	}
}
 
else{ 
	$pagina = 'home';
}
 
switch ($pagina) {
	case 'teste': include 'view/teste.php'; break;
	default: include 'view/home.php'; 
	break;
}

include 'footer.php';