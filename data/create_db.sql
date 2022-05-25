CREATE DATABASE forum;

USE forum;


CREATE TABLE Users (
    idUser INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
    pseudo  VARCHAR(60),
    hashMdp VARCHAR(255),
    UNIQUE(pseudo)
);

CREATE TABLE Topic (
    idTopic INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    titre   VARCHAR(200),
    contenu TEXT,
    idUser  INT REFERENCES Users(idUser)
);

CREATE TABLE Reponse (
    idReponse INT PRIMARY KEY AUTO_INCREMENT,
    idTopic INT REFERENCES Topic(idTopic),
    idUser  INT REFERENCES Users(idUser),
    contenu TEXT
);

INSERT INTO Users (pseudo, hashMdp)
VALUES ("FloFreeride", "i"),
       ("RubenBLOX","i"), 
       ("FloPasFreeride", "i"), 
       ("BoisPonce", "i"), 
       ("PythonSteban", "i"), 
       ("Papicelin", "i"), 
       ("xXx_GameurentCrafteurent76_xXx", "i"), 
       ("Williamus", "i"), 
       ("BryanFreeHugs", "i"), 
       ("LeMaitreDuJeu", "i"), 
       ("Maxime (H)Ackerman", "i"), 
       ("ThéoLePremierPromo", "i"), 
       ("Douis", "i"), 
       ("Nicolarc", "i"), 
       ("malo-8", "i"), 
       ("Ricosmos", "i"), 
       ("PoloTequito", "i"),
       ("Romanovious Gowasconis", "i"), 
       ("Messire de Blanchet", "i"), 
       ("Tom de Grandsire", "i"), 
       ("Ane à aile", "i"), 
       ("alexandrie", "i"),
       ("alexandre desplan", "i"),
       ("SuperDesco", "i");

INSERT INTO Topic (titre, contenu, idUser)
VALUES ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("Exemple de topic", "Ce topic sert dexemple", 1),
       ("MA NOUVELLE RTX", "POUR JOUER A GENSHIN EN 8K", 23),
       ("jen ai marre du jap"                                                                                       , "je comprends rien et en plus florian fait des bruits de golems au fond et saoule tout le monde",22),
       ("JAI ENCORE PERDU A LOL"                                                                                    , "jcrois jvais retourner a la ferme", 20),
       ("Mon copain narrête pas de frapper son bureau quand il joue a lol : que dois-je faire pour que cela cesse ?", "pitié", 21),
       ("RAPPEL : PAS LES PRISES ROUGE"                                                                             , "Ce topic sert dexemple", 10),
       ("pitié rendez moi python"                                                                                   , "CETAIT PLUS SIMPLE JE NY ARRIVE PLUS RAAAAh", 16),
       ("Des tips sur les cryptos ?"                                                                                , "une soudaine envie dinvestir", 15),
       ("Daily Smash Or Pass : Jour 35"                                                                             , "Robert Downey Jr., Smash or Pass ?", 13),
       ("jai fait une injection sql sur ce forum"                                                                   , "florian tas tellement mal codé le truc jai posté ce topic avec une injection sql :)", 11),
       ("calin général a 15h en 618"                                                                                , "venez tous", 9),
       ("arretez de me diffamer parce que je joue a bang dream"                                                     , "je vous en supli", 8),
       ("JEU VIDEO GAMING"                                                                                          , "GRRRIHEOKLJRHZEKHJLRHKLZEHJR", 7),
       ("on mange a quelle heure jai faim"                                                                          , "jpense faut venir a 11h30 pour avoir tout a manger, jai vraiment faim pitié", 5),
       ("Drop Rates Summoners Wars"                                                                                 , "je sais pas va voir sur google bro", 4),
       ("Ruben le diffamateur"                                                                                      , "jaccuse Ruben de me diffamer en permanence avec son journalisme abusif", 1),
       ("Venez voir mon live !"                                                                                     , "twitch.tv/noctifield", 24),
       ("Como esta ?"                                                                                               , "ESTA BUENO !", 17),
       ("Visite du chateau de Bouillancourt"                                                                        , "Jinvite tout le monde", 19),
       ("Je vais battre Florian aux toupies"                                                                        , "Il est bien gentil mais il saoule tout le monde avec ses jouets en plastique, je vais le calmer un peu", 12),
       ("Vivre depuis la création, mon expérience"                                                                  , "En réalité, je suis Adam, et jen veux a Eve de nous avoir rendu mortel", 6),
       ("Livre de citation de Floris en vente en 618"                                                               , "Retrouvez les meilleurs citations glissantes de notre ami Floris Robart, pour la modique somme de 18€99", 2),
       ("Convention du Havre ou plutot la convention du cringe"                                                     , "Les cosplayers qui parlent japonais sur scène, les furries avec une voix dissonante, les fans de genshin qui hurlent dans le public... pitié il sagirait darrêter", 1),
       ("Rappel : Ne pas faire boire William"                                                                       , "Jai bien aimé quand il a ramené les chouquettes alors laissez le venir", 10),
       ("Qui aime Juan?"                                                                                            , "Je pense que tout le monde est daccord avec moi pour dire GLOIRE A JUAN", 3),
       ("Deuxième Rappel : Ne pas faire boire William VENDREDI SOIR"                                                , "Je veux le féliciter pour sa note dIHM alors PAS DALCOOL SINON DS PAPIER", 10),
       ("Floris ne livre plus! OMG"                                                                                 , "Incroyable ! Hier Soir, deux individus, un grand et un blond, ont demandé a Floris de leur livrer un kebab kebab, et ce dernier a refusé !", 2),
       ("Message de PLP : Pas les prises ROUGE POUR LA 7 EME FOIS"                                                  , "IL SAGIRAIT DARRETER", 10),
       ("QUANDALE DINGLE LORE"                                                                                      , "Greetings! Quandale Dingle here. My cousin Henry Dinglenut got arrested for putting TNT in a daycare center. (WHAT THE FUCK??) I put a camera in Joe Bidens bathroom and watched him take a poop. (WHAT????) My Asian brother, Quanliling Dingle put illegal substances in my ramen and I died.", 18),
       ("Qui pour among us ?"                                                                                       , "pitié venez", 14),
       ("top 10 des chatons les plus mignons"                                                                       , "metter vos chat en réponse pour voir le quel est le plus mignon", 1),
       ("BEYBLADE : 1 ER DE PROMO VS FLORIAN RESULTAT : FLORIAN GAGNE 2-1"                                          , "VICTOIRE INCROYABLE POUR FLORIAN QUI BAT LE PREMIER DE LA PROMO !", 2),
       ("Des élèves sont cachés parmi les comptes"                                                                  , "Ce topic sert dexemple", 3),
       ("Ou bien en créer un nouveau"                                                                               , "oui", 3),
       ("Vous pouvez défiler la liste complète des topics présents"                                                 , "en effet", 3),
       ("Bienvenue sur le forum !"                                                                                  , "Vous pouvez naviguer librement parmi les messages", 3);


GRANT ALL ON forum.* to review_site@localhost IDENTIFIED BY 'JxSLRkdutW';

/*
USE reviews;

CREATE TABLE user_review (
  id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  reviewer_name CHAR(100),
  star_rating TINYINT,
  details VARCHAR(4000)
  );
  
INSERT INTO user_review (reviewer_name, star_rating, details) VALUES ('Ben', '5', 'Love the calzone!');
INSERT INTO user_review (reviewer_name, star_rating, details) VALUES ('Leslie', '1', 'Calzones are the worst.');

GRANT ALL ON reviews.* to review_site@localhost IDENTIFIED BY 'JxSLRkdutW';
*/
