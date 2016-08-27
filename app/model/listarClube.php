<?php
require_once('../../bd/Socio.php'); 
require_once('../../bd/SocioDAO.php');

$daoSocio = SocioDAO::getInstance();
$resultados = $daoSocio->ShowClube(); 


?>