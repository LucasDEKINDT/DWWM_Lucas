

DROP TABLE IF EXISTS categorie ;
CREATE TABLE categorie (idCategorie int AUTO_INCREMENT NOT NULL,
NomCategorie VARCHAR (50) NOT NULL,
CONSTRAINT CATEGORIE_PK  PRIMARY KEY (idCategorie) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Pieces ;
CREATE TABLE Pieces (idpiece int AUTO_INCREMENT NOT NULL,
NomPiece VARCHAR (50) NOT NULL,
Prix INT (10) NOT NULL,
Stock VARCHAR (50) NOT NULL,
CONSTRAINT PIECE_PK PRIMARY KEY (idpiece) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS typePiece ;
CREATE TABLE typePiece (idTypePiece int AUTO_INCREMENT NOT NULL,
Referencepiece VARCHAR (50) NOT NULL,
CONSTRAINT TYPEPIECE_PK PRIMARY KEY (idTypePiece) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS Modeles ;
CREATE TABLE Modeles (idModele int AUTO_INCREMENT NOT NULL,
NomModele VARCHAR (50) NOT NULL,
Annee YEAR,
CONSTRAINT MODELE_PK PRIMARY KEY (idModele) ) ENGINE=InnoDB;

DROP TABLE IF EXISTS marques ;
CREATE TABLE marques (idMarque int AUTO_INCREMENT NOT NULL,
NomMarque VARCHAR (50) NOT NULL,
CONSTRAINT MARQUE_PK PRIMARY KEY (idMarque) ) ENGINE=InnoDB;


DROP TABLE IF EXISTS correspondre ;
CREATE TABLE correspondre (idTypePiece int AUTO_INCREMENT NOT NULL,
idModele INT NOT NULL (50) NOT NULL,
CONSTRAINT TYPEPIECE_PK MODELE_PK PRIMARY KEY (idTypePiece,idModele) ) ENGINE=InnoDB;


ALTER TABLE Pieces ADD CONSTRAINT FK_Pieces_idTypePiece FOREIGN KEY (idTypePiece) REFERENCES typePiece (idTypePiece);
ALTER TABLE typePiece ADD CONSTRAINT FK_typePiece_idCategorie FOREIGN KEY (idCategorie) REFERENCES categorie (idCategorie);
ALTER TABLE Modeles ADD CONSTRAINT FK_Modeles_idMarque FOREIGN KEY (idMarque) REFERENCES marques (idMarque);
ALTER TABLE correspondre ADD CONSTRAINT FK_correspondre_idTypePiece FOREIGN KEY (idTypePiece) REFERENCES typePiece (idTypePiece);
ALTER TABLE correspondre ADD CONSTRAINT FK_correspondre_idModele FOREIGN KEY (idModele) REFERENCES Modeles (idModele);

