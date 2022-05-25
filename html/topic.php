<!DOCTYPE html>
<?php 


//Connexion bado
$dbuser = 'review_site';
$dbpass = 'JxSLRkdutW';
$conn = new mysqli("localhost", $dbuser, $dbpass, "forum");
$conn->set_charset("utf8");

if (! $conn) {
  echo "HE HE HE HA";
  exit();
}

$topicID = $_GET["topicid"];

if ($topicID == null) {echo "410 eussou"; return;}

$query = "SELECT t.*, u.pseudo FROM Topic t JOIN Users u ON t.idUser = u.idUser WHERE idTopic = " . $topicID . ";";
$responseQuery = "SELECT r.*, u.pseudo FROM Reponse r JOIN Users u ON r.idUser = u.idUser WHERE idTopic = " . $topicID . ";";

$result = $conn->query($query)->fetch_array();
$reponses = $conn->query($responseQuery);


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
            <h1><a href="index.php">Forum de discussion</a></h1>
            <a href="inscription.html">S'inscrire</a>
        </header>
        <main>
          <?php 
            echo "<a href='repondre.php?topicid=" . $topicID . "'>Répondre a ce topic</a>";
          ?>
          <section>
            <?php 
              echo "<h2>" . $result["titre"] . "</h2>";
              echo "<p>Auteur : " . $result["pseudo"] . "</p>";
              echo "<hr/>";
              echo "<pre>";
              echo htmlspecialchars($result["contenu"]);
              echo "</pre>";
            ?>
          </section>
          <?php 
            $resultArray = $reponses->fetch_array();
            while ($resultArray) {
              echo "<section>";
              echo "<h2>" . $resultArray["pseudo"] . "</h2>"; 
              echo "<hr/>";
              echo "<pre>";
              echo htmlspecialchars($resultArray["contenu"]);
              echo "</pre>";
              echo "</section>";
              $resultArray = $reponses->fetch_array();
            } 
          ?>

        </main>
        <footer>
            <p>SAÉ 2.03 - Floris ROBART, Ruben GROUT, Florian BIZET</p>
            <p>Inspiré des forums Blabla de jeuxvideo.com</p>
        </footer>
    </body>
</html>
