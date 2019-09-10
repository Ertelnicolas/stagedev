<?php
    session_start();

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = htmlspecialchars($_POST['mdp']);

    $ancpseudo = $_SESSION['pseudo'];
    $ancmdp = $_SESSION['mdp'];
    
    try {

        $connexionalabase = mysqli_connect("localhost", "ertel", "mouts88", "users");
    } catch (Exception $e) {
        echo "La connexion à la base a échoué";
    }

    

if(!empty($pseudo)){
    $requetePseudo = mysqli_query($connexionalabase,"UPDATE crud SET pseudo = '".$pseudo."' WHERE pseudo = '".$ancpseudo."'");
    $_SESSION['pseudo'] = $pseudo;

    header('Location: ../views/menu_vw.php?message="vous avez bien modifié votre compte. "');
}
    
if(!empty($mdp)){
    $requeteMotdepasse = mysqli_query($connexionalabase,"UPDATE crud SET motdepasse = '".$mdp."' WHERE motdepasse = '".$ancmdp."'");
    $_SESSION['mdp'] = $mdp;

    header('Location: ../views/menu_vw.php?message="vous avez bien modifié votre compte. "');
}
    
if (!empty($mdp) && !empty ($pseudo)){
    $requetetou = mysqli_query($connexionalabase, "UPDATE crud SET motdepasse = '".$mdp."' , pseudo = '".$pseudo."' WHERE motdepasse = '".$ancmdp."' AND pseudo = '".$ancpseudo."'" );

    header('Location: ../views/menu_vw.php?message="vous avez bien changer votre mot de passe ainsi que votre pseudo!"');
    
}
if(empty($mdp) && empty($pseudo)){
    header('Location: ../views/menu_vw.php?message="T\'as rien changer!"' );
}