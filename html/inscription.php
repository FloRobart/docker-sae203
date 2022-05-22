<?php 
//Connexion bado
$dbuser = 'review_site';
$dbpass = 'JxSLRkdutW';
$conn = new mysqli("localhost", $dbuser, $dbpass, "forum");

if (! $conn) {
  echo "HE HE HE HA";
  exit();
}

//Infos Formulaire
$pseudoSaisi = $_POST["pseudo"];
$mdpSaisi    = $_POST["mdp"];

echo "Pseudo saisi : " . $pseudoSaisi . " <br/>Mot de passe saisi : " . $pseudoSaisi;

$hash = password_hash($mdpSaisi, PASSWORD_BCRYPT);
echo "<br/>" . $hash;

if (password_verify($mdpSaisi, $hash)) {echo "lets goooo !";}

$query = "INSERT INTO Users(pseudo, hashMdp) VALUES ('" . $pseudoSaisi . "','" . $hash . "');";

echo "<br/>Requête : " . $query . "<br/>";
if (! $conn->query($query)) {
    echo "Erreur : " . $conn->error;
}
echo "requete terminée !"
?>