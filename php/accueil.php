 <?php

 if(isset($_POST["inscri"]))


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link type="text/css" rel="stylesheet" href="/css/contribution.css">
</head>
<body>

<form method="POST" action="">

<label for="nom">Votre nom </label>
<input type="text" id="nom" name="nom" placeholder="Entrez votre nom...">  <br/>

<label for="prenom">Votre prénom </label>
<input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom...">  <br/>

<label for="pseudo">Votre pseudo </label>
<input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo...">  <br/>

<label for="mail">Votre e-mail </label>
<input type="text" id="mail" name="mail" placeholder="Entrez votre e-mail...">  <br/>

<label for="motDePasse">Votre Mot De Passe </label>
<input type="password" id="motDePasse" name="motDePasse" placeholder="Entrez votre Mot De Passe...">  <br/>

<input type="submit" value="M'inscrire" name="inscri">

</form>


</body>

</html>