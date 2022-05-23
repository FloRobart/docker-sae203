<!DOCTYPE html>
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

$result = $conn->query($query)->fetch_array();
$reponses = $conn->query($responseQuery);

$reponseAPrint = $reponses->fetch_array();



/*echo "<a href=\"repondre.php?topicid=" . $_GET["topicid"] . "\">Répondre au topic</a>"*/

?>

<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Le forum</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <header>
            <h1>Forum de discussion</h1>
            <a href="inscription.html">S'inscrire</a>
        </header>
        <main>
          <section>
            <?php 
              echo "<h2>". $result["titre"] . "</h2>";
            ?>
          </section>
        </main>
        <footer>
            <p>SAÉ 2.03 - Floris ROBART, Ruben GROUT, Florian BIZET</p>
            <p>Inspiré des forums Blabla de jeuxvideo.com</p>
        </footer>
    </body>
</html>
