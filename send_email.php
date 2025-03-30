<?php
// send_email.php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connexion à la base de données
$host = 'localhost'; // Adresse du serveur MySQL
$dbname = 'yaho_concept'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur MySQL
$password = ''; // Mot de passe MySQL

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(json_encode(['status' => 'error', 'message' => 'Erreur de connexion à la base de données']));
}

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $message = htmlspecialchars($_POST['message']);

    // Insérer les données dans la base de données
    try {
        $stmt = $conn->prepare("INSERT INTO messages (name, email, tel, message) VALUES (:name, :email, :tel, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':message', $message);
        $stmt->execute();

        // Retourner une réponse JSON en cas de succès
        echo json_encode(['status' => 'success', 'message' => 'Votre message a été envoyé avec succès !']);
    } catch (PDOException $e) {
        // Retourner une réponse JSON en cas d'erreur
        echo json_encode(['status' => 'error', 'message' => 'Une erreur s\'est produite. Veuillez réessayer !']);
    }
}
?>