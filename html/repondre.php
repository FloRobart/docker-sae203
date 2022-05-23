<?php 
$topic = $_GET["topicid"];

echo "<form action='submitReponse.php?topicid=" . $topic . "' method = 'post'>";
echo "  <p>Réponse : <textarea name=\"contenuRep\"></textarea></p>";
echo "  <p>Pseudo       : <input type=\"text\" name=\"pseudo\"/></p>";
echo "  <p>Mot de passe : <input type=\"password\" name=\"mdp\"/></p>";
echo "  <input type='submit'/>";
echo "</form>"
?>