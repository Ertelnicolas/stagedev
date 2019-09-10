<?php
//var_dump($_POST);
$pseudo = htmlspecialchars($_POST['pseudo']);
$motdepasse = htmlspecialchars($_POST['mdp']);

$conn = mysqli_connect('localhost','ertel','mouts88','users');

$select = mysqli_query($conn,"SELECT pseudo,motdepasse FROM crud WHERE pseudo=$pseudo AND motdepasse=$motdepasse");

$conn->query($select);
mysqli_num_rows($Requete)
    if ==0){
        header("Location: ../vw/login_vw.php");
    }
    else{
        header("Location: ../vw/accueil_vw.php");
    }
