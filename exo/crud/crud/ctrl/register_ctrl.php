<?php
//var_dump($_POST);
$pseudo = htmlspecialchars($_POST['pseudo']);
$motdepasse = htmlspecialchars($_POST['motdepasse']);

$conn = mysqli_connect('localhost','ertel','mouts88','users');

$insert = "INSERT INTO crud (pseudo, motdepasse) VALUES ('$pseudo','$motdepasse')";
$conn->query($insert);