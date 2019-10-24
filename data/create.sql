CREATE TABLE utilisateur (
	pseudo TEXT PRIMARY KEY,
	mail TEXT,
    motdepasse TEXT,
    localisation TEXT
);

CREATE TABLE categorie (
	id INTEGER PRIMARY KEY,
	nom TEXT,
	description TEXT,
    image TEXT
);

CREATE TABLE jeu (
	ref INTEGER PRIMARY KEY,
	libelle TEXT,
	categorie INTEGER,
	prix REAL,
	support TEXT,
	image TEXT,
    quantite INTEGER,
    description TEXT,
    FOREIGN KEY(categorie) REFERENCES categorie(id)
);


CREATE TABLE panier (
	pseudo TEXT,
	ref INTEGER,
    FOREIGN KEY(pseudo) REFERENCES utilisateur(pseudo),
    FOREIGN KEY(ref) REFERENCES Jeu(ref),
	PRIMARY KEY (pseudo,ref)
);
