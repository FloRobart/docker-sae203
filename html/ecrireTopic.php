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

$topicTitle = $_POST["title"];
$topicContent = $_POST["content"];

$query = "INSERT INTO Topic (titre, contenu, idUser) VALUES ('". $topicTitle . "','" . $topicContent ."', ". $queryArray["idUser"] . ");";

$conn->query($query);

echo "Travail terminé";


?>