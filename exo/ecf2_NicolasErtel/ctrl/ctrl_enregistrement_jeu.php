<?php
$jeu = htmlspecialchars($_POST['enr_jeu']);
$description_jeu = htmlspecialchars($_POST['enr_description_jeu']);
$editeur = htmlspecialchars($_POST['enr_editeur']);
$sortie = ($_POST['enr_sortie']);

$connexionalabase = mysqli_connect("localhost", "ertel", "mouts88", "ecfbase");

$insertion = mysqli_query($connexionalabase, "INSERT INTO jeux (jeu, description_jeu, editeur, sortie) VALUES ('".$jeu."' ,'".$description_jeu."' ,'".$editeur."' ,'".$sortie."')");
header('Location: ../index.php');
