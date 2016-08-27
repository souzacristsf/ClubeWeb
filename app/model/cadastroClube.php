<?php
require_once('../../bd/Clube.php'); 
require_once('../../bd/ClubeDAO.php'); 

//Varificando se há alguma variável no post antes de começar a trabalhar
if(!isset($_POST['nome'])){
    echo "<script>alert('post vazio, por favor, envie dados.');</script>";
    echo "<script>window.location = '/ClubeWeb/app/view/CadastrarClube.php';</script>";
	die; 
}

else {
    $clube = new Clube(); 

    $clube->setNome($_POST['nome']); 
    
    $daoClube = ClubeDAO::getInstance(); 
    $resultado = $daoClube->inserir($clube); 

    if($resultado){
        echo "<script>alert('Clube cadastrado com succeso!');</script>";
        echo "<script>window.location = '/ClubeWeb/app/view/CadastrarClube.php';</script>";
    }

    echo($resultado); 
}

?>