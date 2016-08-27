<?php
require_once('../../bd/Socio.php'); 
require_once('../../bd/SocioDAO.php');

$daoSocio = SocioDAO::getInstance();
$listaSocios = $daoSocio->ListarSocio(); 

// var_dump($listaSocios);

?>