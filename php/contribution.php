<?php
//---Info serveur-----//
$servername = "localhost";
$database = "vazarch";
$username = "root";
$password = "password";

//---Récupération du formulaire-----//
$nom=strval($_POST['nom']);
$adresse=strval($_POST['adresse']);
$ville = strval($_POST['ville']);
$code=$_POST['code'];
$description=$_POST['description'];
$auteur=$_POST['auteur'];
$score=$_POST['score'];
$photo="../database/img/".$_FILES['photo']['full_path'];

//---On range l'image dans le dossier database/img/-----//
move_uploaded_file($_FILES['photo']['tmp_name'], "../database/img/".$_FILES['photo']['full_path']);

//--Connection au serveur---//
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

//--On envoie les données du formulaire---//
try {
    $stmt = $conn->prepare("INSERT INTO randonnee (nom,adresse,code_postal,ville,description,auteur,score,photo)
VALUES (:nom,:adresse,:code,:ville,:description,:auteur,:score,:photo)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':code', $code);
    $stmt->bindParam(':ville', $ville);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':auteur', $auteur);
    $stmt->bindParam(':score', $score);
    $stmt->bindParam(':photo', $photo);
    $stmt->execute();
} catch (PDOException $e) {
    echo "Erreur lors de l'insertion des données : " . $e->getMessage();
}

//--On récupère l'id correspondant (c'est-à-dire les dernières données insérées ---//
try{
    $request = "SELECT max(id) FROM randonnee";
    $result=$conn->query($request);
    $ligne=$result->fetch(PDO::FETCH_NUM);
}catch (PDOException $e){
    echo "Erreur lors de la récupération des données : " . $e->getMessage();
}

$result->closeCursor();
$conn=null;

//--On redirige l'utilisateur vers la page affichant la rando avec l'id correspondant//
header("Location: " . "/ProgrammationWeb/php/rando.php?id=$ligne[0]");
exit();