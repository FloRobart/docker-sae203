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

INSERT INTO Topic (titre, contenu)
VALUES ("Topic de test", "Floris est raciste");

INSERT INTO Reponse (idTopic, contenu)
VALUES (1, "t'es guez bro");

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
