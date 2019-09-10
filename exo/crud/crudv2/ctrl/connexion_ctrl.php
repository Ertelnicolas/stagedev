<?php
session_start();


try {
    $connexionalabase = mysqli_connect("localhost", "ertel", "mouts88", "essai");
} catch (Exception $e) {
    echo"La connexion à la base a échoué";
}   
$recherchebdd_cook= mysqli_query($connextionalabase,"SELECT pseudo,mdp FROM utilisateur WHERE pseudo='".$_COOKIE['cookpseudo']."' AND mdp='".$_COOKIE['cookmdp']."'");

//connexion via cookie encore tiède
    if(mysqli_num_rows($recherchebdd_cook)!=0){
    
        header('Location: ../vw/home_vw.php?message="oups"');
    }
//inscription via formulaire s'il a rempli les champs
elseif((isset($_POST['pseudo']))&&(isset($_POST['mdp']))){

    $pseudo=htmlspecialchars($_POST['pseudo']);
    $mdp=htmlspecialchars($_POST['mdp']);

    $recherchebdd_inscription = mysqli_query($connexionalabase,"SELECT pseudo, mdp FROM utilisateur WHERE pseudo='".$pseudo."' AND mdp='".$mdp."'");
    $_SESSION['pseudo']=$pseudo;
    $_SESSION['mdp']=$mdp;
//insertion dans la bdd
    try {
        $insertion = mysqli_query($connexionalabase, "INSERT INTO utilisateur (pseudo, mdp) VALUES ('".$pseudo."', '".$mdp."')");
        //envoie sur home_vw.php
        header('Location: ../vw/home_vw.php');
        //impossibilité de se connecter
    } catch (Exception $e) {
        echo"impossible de vous enregistrer, veuillez nous excuser.";
    }
}
//connexion via formulaire
elseif((isset($_POST['pseudos']))&&(isset($_POST['mdps']))){

    $mdps=htmlspecialchars($_POST['mdps']);
    $pseudos=htmlspecialchars($_POST['pseudos']);

    $recherchebdd_connexion = mysqli_query($connexionalabase,"SELECT pseudo, mdp FROM utilisateur WHERE pseudo='".$pseudos."' AND mdp='".$mdps."'");
    $_SESSION['pseudo']=$pseudos;
    $_SESSION['mdp']=$mdps;

    if(mysqli_num_rows($recherchebdd_connexion) == 0){
        $connexionalabase->close();
        header('Location: ../vw/formulaire_vw.php');

    }else{
        $connexionalabase->close();
        header('Location: ../vw/home_vw.php');
        exit;
    }
}
    
//autres
else{
echo 'j\'ai oublier un truc, autant pour toi!';
}
