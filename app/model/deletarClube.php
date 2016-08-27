<?php
require_once('../../bd/Clube.php'); 
require_once('../../bd/ClubeDAO.php');

$clube = new Clube(); 
$clube->setCod_clube($_GET['id']); 
var_dump($clube->getCod_clube());
$daoClube = ClubeDAO::getInstance(); 
$resultado = $daoClube->Deletar($clube->getCod_clube()); 

if($resultado){
        echo "<script>alert('Clube deletado com succeso!');</script>";
        echo "<script>window.location = '/ClubeWeb/app/view/ListarClube.php';</script>";
}

?>