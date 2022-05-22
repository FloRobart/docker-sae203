<p>Résultat : </p>
<p>test dockerrr</p>
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

echo "Pseudo saisi : " . $pseudoSaisi . " <br/>Mot de passe saisi : " . $mdpSaisi;

//Requête SQL
$query = "SELECT * FROM Users WHERE pseudo = '" . $pseudoSaisi . "';";

echo "<br/>Requête : " . $query . "<br/>";
if (! $conn->query($query)) {
    echo "Erreur : " . $conn->error;
}

$queryArray = $conn->query($query)->fetch_array();

if ($queryArray == NULL) {echo "No account ?!";}
echo "<br/> Compte détecté : ";
print_r($queryArray);

echo "requete réussie !<br/>";

//Vérif Mot de Passe
if (password_verify($mdpSaisi, $queryArray["hashMdp"])) {
    echo "connexion réussie !<br/>";
} else {
    echo "connexion ratée...<br/>";
}
echo "script terminé !"

?>