<?php
//---Info serveur-----//
$servername = "localhost";
$database = "vazarch";
$username = "vazarch";
$password = "password";

//---Connection au serveur-----//
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type="text/css"  rel="stylesheet" href="/css/feuilleStyleAccueil.css">
</head>
<body class="fond">
<!-- le menu de navigation -->
<div class="header">
    <nav>
        <ul class="menu">
            <li><a href="accueil.php" class="actuel">Randonner</a></li>
            <li><a href="../html/contribution.html">Contribuer</a></li>
        </ul>
    </nav>
</div>
<div class='scroller'>
    <?php
    //-----Affichage du tableau-----//
    try{
        $request = "SELECT id,nom, adresse,code_postal,ville FROM randonnee ORDER BY nom,adresse";
        $result=$conn->query($request);
    }catch (PDOException $e){
        echo "Erreur lors de la récupération des données : " . $e->getMessage();
    }
    echo "<div class='table'>";
    echo "<div id='first_row'>";
    echo "<p>Nom</p>
    <p>Adresse</p>
    <p>Code postal</p>
    <p>Ville</p>";
    echo "</div>";
    while($ligne = $result->fetch(PDO::FETCH_NUM)) {
        echo "<div class='row'><a href='rando.php?id=$ligne[0]'>";
        for($i=1; $i<count($ligne); $i++) {
            echo "<p>$ligne[$i]</p>";
        }
        echo "</a></div>";
    }
    echo "</div>";
    $result->closeCursor();
    $idcom = NULL;
    ?>
</div>
</body>
</html>