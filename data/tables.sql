CREATE TABLE User (
    idUser INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    pseudo  VARCHAR,
    hashMdp VARCHAR(255);
);

CREATE TABLE Topic (
    idTopic INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    titre   VARCHAR,
    contenu TEXT,
    idUser  INT REFERENCES(User)
);

CREATE TABLE Reponse (
    idReponse INT PRIMARY KEY,
    idTopic INT REFERENCES(Topic),
    idUser  INT REFERENCES(User),
    contenu TEXT
);
