<?php 

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

//Requête SQL
$query = "SELECT * FROM Users WHERE pseudo = '" . $pseudoSaisi . "';";

$queryArray = $conn->query($query)->fetch_array();

if ($queryArray == NULL) {echo "Pseudonyme Invalide"; return;}

//Vérif Mot de Passe
if (!password_verify($mdpSaisi, $queryArray["hashMdp"])) {
    echo "Mot de Passe Incorrect !";
    return;
} 



$topic = $_GET["topicid"];
$topicContent = $_POST["contenuRep"];

$query = "INSERT INTO Reponse (idTopic, contenu) VALUES (". $topic . ",'" . $topicContent ."');";

if (! $conn->query($query)) {
    echo "Erreur : " . $conn->error;
}


?>