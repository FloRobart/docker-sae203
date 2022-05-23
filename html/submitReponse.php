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

$query = "INSERT INTO Reponse (idTopic, contenu, idUser) VALUES (". $topic . ",'" . $topicContent ."'," . $queryArray["idUser"] . ");";

if (! $conn->query($query)) {
    echo "Erreur : " . $conn->error;
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Le forum</title>
        <link rel="stylesheet" href="style.css"/>
        <meta http-equiv="refresh" content="2; URL=topic.php?topicid=<?php echo $topic; ?>">
    </head>
    <body>
        <header>
            <h1><a href="index.php">Forum de discussion</a></h1>
            <a href="inscription.html">S'inscrire</a>
        </header>
        <main>
            <section>
              <h2>Votre réponse a bien été postée</h2>
              <p>Vous allez être redirigé vers la page du topic</p>
            </section>
        </main>
        <footer>
            <p>SAÉ 2.03 - Floris ROBART, Ruben GROUT, Florian BIZET</p>
            <p>Inspiré des forums Blabla de jeuxvideo.com</p>
        </footer>
    </body>
</html>