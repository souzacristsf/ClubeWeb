<?php
require_once('../../bd/Socio.php'); 
require_once('../../bd/SocioDAO.php');

$socio = new Socio(); 
$socio->setCod_socio($_GET['id']); 

$daoSocio = SocioDAO::getInstance(); 
$resultado = $daoSocio->Deletar($socio->getCod_socio()); 

if($resultado){
        echo "<script>alert('Socio deletado com succeso!');</script>";
        echo "<script>window.location = '/ClubeWeb/app/view/ListarSocio.php';</script>";
}

?>