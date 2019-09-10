<?php
//affichage des données qui arrivent
//var_dump($_POST);

//captation et securisation des données
$pseudo=htmlspecialchars($_POST['pseudo']);
$mdp=htmlspecialchars($_POST['mdp']);

//essai de connexion a la base de donnée(futur model)
try {
    $connexionalabase = mysqli_connect("localhost", "ertel", "mouts88", "users");
} catch (Exception $e) {
    echo"La connexion à la base a échoué";
}

//essai d'insertion dans la base 
try {
    $insertion = "INSERT INTO crud(pseudo, motdepasse) VALUES ('$pseudo', '$mdp')";
    session_start();
    $_SESSION['pseudo']=$pseudo;
    $_SESSION['mdp']=$mdp;
    $connexionalabase->query($insertion);
    header('Location: ../views/accueil.php?message="Bonjour '.$pseudo.', votre compte a bien été crée, vous êtes connecté"');


    
} catch (Exception $e) {

    echo"impossible de vous enregistrer, veuillez nous excuser.";
}

    
    
        
    








