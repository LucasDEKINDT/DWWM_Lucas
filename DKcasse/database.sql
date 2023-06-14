


CREATE TABLE Categorie (idCategorie int AUTO_INCREMENT NOT NULL,
NomCategorie VARCHAR (50) NOT NULL,
CONSTRAINT CATEGORIE_PK  PRIMARY KEY (idCategorie) ) ENGINE=InnoDB;


CREATE TABLE Pieces (idpiece int AUTO_INCREMENT NOT NULL,
NomPiece VARCHAR (50) NOT NULL,
Prix INT (10) NOT NULL,
Stock VARCHAR (50) NOT NULL,
IdTypePiece INT NOT NULL,
CONSTRAINT PIECE_PK PRIMARY KEY (Idpiece) ) ENGINE=InnoDB;


CREATE TABLE TypePiece (IdTypePiece int AUTO_INCREMENT NOT NULL,
Referencepiece VARCHAR (50) NOT NULL,
IdCategorie INT,
CONSTRAINT TYPEPIECE_PK PRIMARY KEY (IdTypePiece) ) ENGINE=InnoDB;


CREATE TABLE Modeles (IdModele int AUTO_INCREMENT NOT NULL,
NomModele VARCHAR (50) NOT NULL,
Annee YEAR,
CONSTRAINT MODELES_PK PRIMARY KEY (IdModele) ) ENGINE=InnoDB;


CREATE TABLE Marques (IdMarque int AUTO_INCREMENT NOT NULL,
NomMarque VARCHAR (50) NOT NULL,
IdModele INT NOT NULL,
CONSTRAINT MARQUES_PK PRIMARY KEY (IdMarque) ) ENGINE=InnoDB;

CREATE TABLE Utilisateur (IdUtilisateur int AUTO_INCREMENT NOT NULL,
 Admin BOOLEAN,
 NomUtilisateur VARCHAR (50) NOT NULL,
  PrenomUtilisateur VARCHAR (50) NOT NULL,
   EmailUtilisateur VARCHAR (50) NOT NULL,
    MotDePasse VARCHAR (50) NOT NULL,
 CONSTRAINT UTILISATEUR_PK PRIMARY KEY (IdUtilisateur) ) ENGINE=InnoDB;

CREATE TABLE Correspondre (
    IdTypePiece int AUTO_INCREMENT NOT NULL,
     IdModele INT NOT NULL, 
    CONSTRAINT CORRESPONDRE_PK PRIMARY KEY (IdTypePiece,  IdModele) ) ENGINE=InnoDB;



ALTER TABLE Pieces ADD CONSTRAINT FK_Pieces_IdTypePiece FOREIGN KEY (IdTypePiece) REFERENCES typePiece (IdTypePiece);
ALTER TABLE typePiece ADD CONSTRAINT FK_typePiece_IdCategorie FOREIGN KEY (IdCategorie) REFERENCES categorie (IdCategorie);
ALTER TABLE Marques ADD CONSTRAINT FK_Marques_IdModele FOREIGN KEY (IdModele) REFERENCES Modeles (IdModele);
ALTER TABLE Correspondre ADD CONSTRAINT FK_Correspondre_IdTypePiece FOREIGN KEY (IdTypePiece) REFERENCES typePiece (IdTypePiece);
ALTER TABLE Correspondre ADD CONSTRAINT FK_Correspondre_IdModele FOREIGN KEY (IdModele) REFERENCES Modeles (IdModele);


