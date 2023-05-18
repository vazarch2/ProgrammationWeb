<?php
$nom=strval($_GET['nom']);
$adresse=strval($_GET['adresse']);
$ville = strval($_GET['ville']);
$code=$_GET['code'];

$servername = "localhost";
$database = "vazarch";
$username = "root";
$password = "password";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion à la base de données établie avec succès.";
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
try {
    $stmt = $conn->prepare("INSERT INTO randonnee (nom,adresse,code_postal,ville)
VALUES (:nom,:adresse,:code,:ville)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':code', $code);
    $stmt->bindParam(':ville', $ville);
    $stmt->execute();

    echo "Les données ont été insérées avec succès dans la base de données.";
} catch (PDOException $e) {
    echo "Erreur lors de l'insertion des données : " . $e->getMessage();
}
$conn=null;
header("Location: " . "/ProgrammationWeb/html/contribution.html");
exit();