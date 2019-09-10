<?php
session_start();

//connexion BDD
try {
    $connexionalabase = mysqli_connect("localhost", "ertel", "mouts88", "mabase");
} catch (Exception $e) {
    echo"La connexion à la base a échoué";
}

$pseudo=htmlspecialchars($_POST['pseudo']);
$ann=$_POST['ann'];

//Enregistrement BDD
if(isset($_POST['ann'])){

$insertiondate = mysqli_query($connexionalabase, "INSERT INTO tabledate (pseudo, datenaissance) VALUES ('".$pseudo."', '".$ann."')");

header('Location: vw.php?message="Vous vous êtes bien enregistré"');
} 
