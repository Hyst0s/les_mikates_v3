CREATE DATABASE mikate_bdd;
USE mikate_bdd;

-- Table utilisateurs
CREATE TABLE utilisateur 
(
    id_utilisateur INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(25) NOT NULL,
    prenom VARCHAR (25) NOT NULL,
    pseudo VARCHAR(25) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(25) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    avatar VARCHAR(255) NOT NULL,
    role ENUM ('utilisateur', 'admin') DEFAULT 'utilisateur'
);

-- Table Produit

CREATE TABLE produit
(
id_produit INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(50) NOT NULL,
description VARCHAR(255) NOT NULL,
prix DECIMAL NOT NULL,
image VARCHAR(255) NOT NULL,
allergene VARCHAR(255) NOT NULL,
ingredients VARCHAR(255) NOT NULL
);

-- Table Panier

CREATE TABLE panier
(
    id_panier INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    quantite DECIMAL NOT NULL,
    id_produit INT NOT NULL
);

-- Table commande

CREATE TABLE commande
(
    id_commande INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    montant DECIMAL NOT NULL,
    date_commande TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    statut VARCHAR(100) NOT NULL,
    adress_livraison VARCHAR(255) NOT NULL,
    date_livraison TIMESTAMP NOT NULL,
    id_panier INT NOT NULL
);

-- Table paiement

CREATE TABLE paiement
(
    id_paiement  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    statut VARCHAR(255) NOT NULL,
    montant DECIMAL NOT NULL,
    id_transaction INT NOT NULL,
    date_paiement TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
