<?php 
//Connexion bado
$dbuser = 'review_site';
$dbpass = 'JxSLRkdutW';
$conn = new mysqli("localhost", $dbuser, $dbpass, "forum");

if (! $conn) {
  echo "HE HE HE HA";
  exit();
}

$topicID = $_GET["topicid"];

if ($topicID == null) {echo "410 eussou"; return;}

$query = "SELECT * FROM Topic WHERE idTopic = " . $topicID . ";";
$responseQuery = "SELECT * FROM Reponse WHERE idTopic = " . $topicID . ";";

echo "test 2 requetes";

$result = $conn->query($query)->fetch_array();
echo "topic recup";
$reponses = $conn->query($responseQuery);

$reponseAPrint = $reponses->fetch_array();

print_r($result);

while ($reponseAPrint) {
  print_r($reponseAPrint);
  $reponseAPrint = $reponses->fetch_array();
}

echo "<a href=\"repondre.php?topicid=" . $_GET["topicid"] . "\">Répondre au topic</a>"

?>

