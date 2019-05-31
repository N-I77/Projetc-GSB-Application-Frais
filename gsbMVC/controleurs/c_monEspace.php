<?php
include("vues/v_sommaire.php");

$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];




switch($action){
	case 'voirVisiteur':{
		$lesDonnees=$pdo->getDonneeVisiteur($idVisiteur);

		$nom = $lesDonnees['nom'];
		$prenom = $lesDonnees['prenom'];
		$login = $lesDonnees['login'];
		$mdp = $lesDonnees['mdp'];
		$adresse = $lesDonnees['adresse'];
		$cp = $lesDonnees['cp'];
		$ville = $lesDonnees['ville'];
		include("vues/v_monEspace.php");
		break;
	}
	case 'modifierVisiteur':{
		
		$nom = $_REQUEST['nom'];
		$prenom = $_REQUEST['prenom'];
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$adresse = $_REQUEST['adresse'];
		$cp = $_REQUEST['cp'];
		$ville = $_REQUEST['ville'];
		$pdo->majInfosVisiteur($nom, $prenom, $login, $mdp, $adresse, $cp, $ville, $idVisiteur);
		include("vues/v_monEspace.php");
		break;
		
		
		
		
		
		
		
	}
}
//include("vues/v_monEspace.php");


?>