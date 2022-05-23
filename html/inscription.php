<?php 
//Connexion bado
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

$hash = password_hash($mdpSaisi, PASSWORD_BCRYPT);
$query = "INSERT INTO Users(pseudo, hashMdp) VALUES ('" . $pseudoSaisi . "','" . $hash . "');";


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
        <meta http-equiv="refresh" content="2; URL=index.php">
    </head>
    <body>
        <header>
            <h1><a href="index.php">Forum de discussion</a></h1>
            <a href="inscription.html">S'inscrire</a>
        </header>
        <main>
            <section>
              <h2>Bienvenue, <?php echo $pseudoSaisi ?> ! </h2>
              <p>Vous allez être redirigé vers la page d'accueil</p>
            </section>
        </main>
        <footer>
            <p>SAÉ 2.03 - Floris ROBART, Ruben GROUT, Florian BIZET</p>
            <p>Inspiré des forums Blabla de jeuxvideo.com</p>
        </footer>
    </body>
</html>