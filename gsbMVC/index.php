<?php
error_reporting(E_ALL);
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
//echo "index";
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");break;
	}
	case 'etatFrais' :{
		//echo 'coucou';
		include("controleurs/c_etatFrais.php");break; 
	}
	case 'monEspace' :{
		include("controleurs/c_monEspace.php");break;
	}
}
include("vues/v_pied.php") ;
?>

