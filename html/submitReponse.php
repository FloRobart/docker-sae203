<?php 

$dbuser = 'review_site';
$dbpass = 'JxSLRkdutW';
$conn = new mysqli("localhost", $dbuser, $dbpass, "forum");



if (! $conn) {
  echo "HE HE HE HA";
  exit();
}

$topic = $_GET["topicid"];
$topicContent = $_POST["contenuRep"];

$query = "INSERT INTO Reponse (idTopic, contenu) VALUES (". $topic . ",'" . $topicContent ."');";

echo $query;

if (! $conn->query($query)) {
    echo "Erreur : " . $conn->error;
}

echo "Travail terminé";


?>