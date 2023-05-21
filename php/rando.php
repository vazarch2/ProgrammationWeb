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
$id=$_GET['id'];
//---Récupération des données correspondant à id-----//
try{
    $request = "SELECT * FROM randonnee WHERE id=$id";
    $result=$conn->query($request);
    $ligne=$result->fetch(PDO::FETCH_NUM);
}catch (PDOException $e){
    echo "Erreur lors de la récupération des données : " . $e->getMessage();
}
//---On range tout ça dans des variables-----//
$nom=$ligne[1];
$adresse=$ligne[2];
$code_postal=$ligne[3];
$ville=$ligne[4];
$description=$ligne[5];
$auteur=$ligne[6];
$score=$ligne[7];
$photo=$ligne[8];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type="text/css" rel="stylesheet" href="/css/rando.css">
</head>
<body class="detail">
<div class="header">
    <nav>
        <ul class="menu">
            <li><a href="accueil.php" >Randonner</a></li>
            <li><a href="../html/contribution.html">Contribuer</a></li>
        </ul>
    </nav>
</div>
<main>
    <!-- le contenu de la page -->
    <section id="randonnee">
        <?php echo "<h1>$nom</h1>"?>
        <?php echo "<img src='$photo'  alt='' />"?>
        <?php echo "<p>$auteur</p>"?>
        <?php echo "<p>$score/10</p>"?>
        <?php echo"<p>$adresse</p>"?>
        <?php echo"<p>$code_postal, $ville</p>"?>
    </section>
    <section >
        <h1>Description</h1>
        <?php
        echo"<p>";
        for($i=0;$i<250;$i++){
               echo $description[$i];
               if($i%50==25){
                   echo "-<br>";
               }
        }
        echo"</p>";
        ?>
    </section>
</main>
</body>
</html>