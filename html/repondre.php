<?php 
$topic = $_GET["topicid"];
?>

<!DOCTYPE html>
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
            <section>
                <form action='submitReponse.php?topicid=<?php echo $topic ?>' method = 'post'>";
                    <h2>Répondre à un topic</h2>
                    <p>Réponse : <textarea name="contenuRep"></textarea></p>
                    <p>Pseudo       : <input type="text" name="pseudo"/></p>
                    <p>Mot de passe : <input type="password" name="mdp"/></p>
                    <input type='submit' value="Poster la réponse"/>
                </form>
            </section>
        </main>
        <footer>
            <p>SAÉ 2.03 - Floris ROBART, Ruben GROUT, Florian BIZET</p>
            <p>Inspiré des forums Blabla de jeuxvideo.com</p>
        </footer>
    </body>
</html>


