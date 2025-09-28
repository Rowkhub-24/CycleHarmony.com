-- Script SQL pour créer la base et la table
CREATE DATABASE IF NOT EXISTS formulaire_db;
USE formulaire_db;

CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    date_envoi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


git init
git add .
git commit -m "Ajout du formulaire avec base de données"
git branch -M main
git remote add origin https://github.com/Rowkhub-24/C.git
git push -u origin main