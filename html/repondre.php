<?php 
$topic = $_GET["topicid"];

echo "<form action='submitReponse.php?topicid=" . $topic . "' method = 'post'>";
echo "  <p>Réponse : <input type='text' name='contenuRep'/></p>";
echo "  <input type='submit'/>";
echo "</form>"
?>