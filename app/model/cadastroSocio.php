<?php
require_once('../../bd/Socio.php'); 
require_once('../../bd/SocioDAO.php');

// Varificando se há alguma variável no post antes de começar a trabalhar
if(!isset($_POST['nome']) && !isset($_POST['clubes'])){
    echo "<script>alert('post vazio, por favor, envie dados.');</script>";
    echo "<script>window.location = '/ClubeWeb/app/view/CadastrarSocio.php';</script>";
	die(); 
}
else {

    $socio = new Socio(); 

    $socio->setNome($_POST['nome']); 
    $socio->setCod_clube($_POST['clubes']); 
    
    $daoSocio = SocioDAO::getInstance(); 
    $resultado = $daoSocio->inserir($socio); 

    if($resultado){
        echo "<script>alert('Socio cadastrado com succeso!');</script>";
        echo "<script>window.location = '/ClubeWeb/app/view/CadastrarSocio.php';</script>";
    }

    echo($resultado); 
}
?>