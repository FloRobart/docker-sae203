<?php 
$dbuser = 'review_site';
$dbpass = 'JxSLRkdutW';
$conn = new mysqli("localhost", $dbuser, $dbpass, "forum");

if (! $conn) {
  echo "HE HE HE HA";
  exit();
}

echo "sysbak<br/>";

echo "Pseudo             : admin</br>";
echo "Mot de passe       : admin</br>";

echo "Pseudo             : Forumeur</br>";
echo "Mot de passe       : celestin</br>";

echo "Pseudo             : 34alain34</br>";
echo "Mot de passe       : jaune</br>";

echo "Pseudo             : FloRobart</br>";
echo "Mot de passe       : Mazette!</br>";

echo "Pseudo             : MitsukeZ</br>";
echo "Mot de passe       : femme?eugh(cfo)</br>";

?>