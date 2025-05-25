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
		$pagina = 'home';
	}
}
 
else{ 
	$pagina = 'login';
}
 
switch ($pagina) {
	case 'home': include 'view/home.php'; break;
	case 'cadastro-de-veiculos': include 'cadastro-de-veiculos.php'; break;
	default: include 'view/login.php'; 
	break;
}

include 'footer.php';