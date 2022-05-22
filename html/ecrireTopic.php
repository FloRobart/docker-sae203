<?php 

$dbuser = 'review_site';
$dbpass = 'JxSLRkdutW';
$conn = new mysqli("localhost", $dbuser, $dbpass, "forum");

if (! $conn) {
  echo "HE HE HE HA";
  exit();
}

$topicTitle = $_POST["title"];
$topicContent = $_POST["content"];

$query = "INSERT INTO Topic (titre, contenu) VALUES ('". $topicTitle . "','" . $topicContent ."');";

$conn->query($query);

echo "Travail terminé";


?>