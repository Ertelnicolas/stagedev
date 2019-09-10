<?php
//affichage des données qui arrivent
//var_dump($_POST);
//captation et securisation des données
$pseudo=htmlspecialchars($_POST['pseudo']);
$mdp=htmlspecialchars($_POST['mdp']);

//appel a la base (mdl)
try {
    $connexionalabase = mysqli_connect("localhost", "ertel", "mouts88", "users");
} catch (Exception $e) {
    echo"La connexion à la base a échoué";
}
//selection par rapport aux envois utilisateurs (mdl)
$sql = mysqli_query($connexionalabase,"SELECT pseudo, motdepasse FROM crud WHERE pseudo='".$pseudo."' AND motdepasse='".$mdp."'");
session_start();
    $_SESSION['pseudo']=$pseudo;
    $_SESSION['mdp']=$mdp;


//si reponse = 0 redirection vers le formulaire de connexion avec un $_GET pour envoyer le message erreur
if(mysqli_num_rows($sql) == 0) {
    $connexionalabase->close();
    header('Location: ../views/login_vw.php?message="Mauvais identifiant ou mot de passe"');
    
} //sinon tu envois l'utilisateur à la page d'accueil et connecté avec un message de bonjour
else {
    $connexionalabase->close();
    header('Location: ../views/accueil.php?message="Bonjour '.$pseudo.', vous êtes connecté"');
    exit;
}
    

    




