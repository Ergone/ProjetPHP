CREATE TABLE utilisateur (
	pseudo TEXT PRIMARY KEY,
	mail TEXT,
    motdepasse TEXT,
    localisation TEXT
);

CREATE TABLE categorie (
	id INTEGER PRIMARY KEY,
	nom TEXT,
    image TEXT
);

CREATE TABLE jeu (
	ref INTEGER PRIMARY KEY,
	libelle TEXT,
	categorie INTEGER,
	prix REAL,
	image TEXT,
    support TEXT,
    quantite INTEGER,
    description TEXT,
    FOREIGN KEY(categorie) REFERENCES categorie(id)
);

CREATE TABLE panier (
	pseudo TEXT PRIMARY KEY,
	ref INTEGER PRIMARY KEY,
    FOREIGN KEY(pseudo) REFERENCES utilisateur(pseudo),
    FOREIGN KEY(ref) REFERENCES Jeu(ref)
);
