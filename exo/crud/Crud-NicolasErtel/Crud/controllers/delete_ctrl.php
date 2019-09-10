<?php
//connection a la base de donner
    try {
        $connexionalabase = mysqli_connect("localhost", "ertel", "mouts88", "users");
    } catch (Exception $e) {
        echo"La connexion à la base a échoué";
    }
    //suppression SQL
session_start();
        $supprsql=mysqli_query($connexionalabase,"DELETE FROM crud WHERE pseudo='".$_SESSION['pseudo']."' AND motdepasse='".$_SESSION[mdp]."'");
        

        header('location:../views/menu_vw.php?message= votre compte a bien été supprimé.');
