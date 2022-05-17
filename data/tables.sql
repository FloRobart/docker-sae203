CREATE TABLE User (
    idUser  INT PRIMARY KEY NOT NULL,
    pseudo  VARCHAR,
    hashMdp VARCHAR
);

CREATE TABLE Topic (
    idTopic INT PRIMARY KEY NOT NULL,
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
