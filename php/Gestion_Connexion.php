<?php
    // création de variable pour vérifier que l'utilisateur est connecté
    $estConnected=false;
  //  $user_Ident;
    session_start(); //démarrer la session pour stocker les données utilisateur

    if (isset($_POST['submit'])) { //vérifier si le formulaire a été soumis
        $username = $_POST['username']; //récupérer l'identifiant saisi par l'utilisateur

        if (empty($username)) { //vérifier si l'identifiant est vide
            echo "Veuillez saisir votre identifiant.";
        } else {
            //connexion à la base de données

            $servername = "localhost";
            $database = "vazarch";
            $username = "vazarch";
            $password = "password";
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Erreur de connexion à la base de données : " . $e->getMessage();
            }

            //vérifier si l'utilisateur existe dans la base de données
            $query = "SELECT * FROM users WHERE username=:username";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($result) == 0) { //si l'utilisateur n'existe pas
                if (isset($_POST['newuser'])) { //si la case à cocher est cochée
                    //créer un nouveau compte utilisateur dans la base de données
                    $query = "INSERT INTO users (username) VALUES (:username)";
                    $stmt = $conn->prepare($query);
                    $stmt->bindParam(':username', $username);
                    if ($stmt->execute()) {
                        $_SESSION['username'] = $username; //stocker l'identifiant dans la session
                        echo "Nouvel utilisateur créé et connecté.";
                        $estConnected=true;
                        $user_Ident=$username;
                        header('Location: accueil.php');
                    } else {
                        echo "Erreur: " . $stmt->errorInfo()[2];
                    }
                } else { //si la case à cocher n'est pas cochée
                    echo "Identifiant inexistant. Veuiller Cochez la case pour créer un nouveau compte.";
                    echo "<br>";
                }
            } else { //si l'utilisateur existe déjà
                if (isset($_POST['newuser'])) { //si la case à cocher est cochée
                    echo "L'identifiant existe déjà. Veuillez choisir un nouveau.";
                } else { //si la case à cocher n'est pas cochée
                    $_SESSION['username'] = $username; //stocker l'identifiant dans la session
                    echo "Connexion réussie.";
                    $estConnected=true;
                    $user_Ident=$username;
                    header('Location: accueil.php');
                }
            }

            $conn = null; //fermer la connexion à la base de données
        }
    }

 //   function estConnecte(){
//     return $estConnected;
 //   }
 //   function getIdentifiant(){
    //    if(estConnecte()){
    //        return $user_Ident;
  //      }
  //      else{
 //           exit();
   //     }
  //  }
//    ?>