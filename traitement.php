<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulaire_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération des données du formulaire
$nom = $_POST['nom'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Insertion dans la base de données
$sql = "INSERT INTO contacts (nom, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nom, $email, $message);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Données enregistrées avec succès !";
} else {
    echo "Erreur lors de l'enregistrement.";
}

$stmt->close();
$conn->close();
?>
