<div id="contenu">
	<h2>Mes Informations</h2>

<form method="POST"  action="index.php?uc=monEspace&action=modifierVisiteur">


	<head> 
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
		<title>Mise à jour information utilisateur</title> 
		<meta charset="utf-8"> 
	</head>
	<body>
		Votre nom : <input id="nom" type="text" name="nom" size="10" value="<?php echo $nom ?>" required> <br>
		Votre prenom : <input id="prenom" type="text" name="prenom" size="10" value="<?php echo $prenom ?>" required> <br>
		Votre login : <input id="login" type="text" name="login" size="30" value="<?php echo $login ?>" required> <br>
		Votre Mot de passe : <input id="mdp" type="text" name="mdp" size="30" value="<?php echo $mdp ?>" > <br>
		Votre adresse : <input id="adresse" type="text" name="adresse" size="40" value="<?php echo $adresse ?>" required> <br>
		Votre Code postal : <input id="cp" type="text" name="cp" size="10" value="<?php echo $cp ?>" required> <br>
		Votre Ville : <input id="ville" type="text" name="ville" size="30" value="<?php echo $ville ?>" required> <br>
	</body>
	<!--<fieldset>
            </legend>
            <p>
              <label for="txtNomHF">Nom: </label>
              <input type="text" id="txtNomHF" name="nom" size="10" maxlength="10" value=<?php //echo $nom ?> />
            </p>
			<p>
              <label for="txtPrenomHF">Prenom: </label>
              <input type="text" id="txtPrenomHF" name="prenom" size="10" maxlength="10" value=<?php //echo $prenom ?> />
            </p>
			<p>
              <label for="txtLoginHF">Login: </label>
              <input type="text" id="txtLoginHF" name="login" size="30" maxlength="45" value=<?php //echo $login ?> />
            </p>
			<p>
              <label for="txtMotDePasseHF">Mot de passe: </label>
              <input type="text" id="txtMotDePasseHF" name="mdp" size="30" maxlength="45" value=<?php //echo $mdp ?> />
            </p>
            <p>
              <label for="txtAdresseHF">Adresse</label>
              <input id="txtAdresseHF" type="text"  name="adresse" size="50" maxlength="50" value=<?php //echo $adresse ?> />
            </p>
            <p>
              <label for="txtCodePostalHF">CodePostal : </label>
              <input type="text" id="txtCodePostalHF" name="cp" size="10" maxlength="5" value=<?php //echo $cp ?> />
            </p>
			<p>
              <label for="txtVilleHF">Ville: </label>
              <input type="text" id="txtVilleHF" name="ville" size="30" maxlength="20" value=<?php //echo $ville ?> />
            </p>
    </fieldset>-->
<p>	
	
    <input id="ok" type="submit" value="Mettre a jour" size="20" onclick="return confirm('Voulez-vous vraiment mettre a jour vos informations ?');" />
</p> 