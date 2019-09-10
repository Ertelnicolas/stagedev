<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require 'head.php' ?>
    </head>
    <body>
    <main class="container-fluid">
    <?php require 'nav.php' ?>
        <form action="#" method="POST">
            <input type="text" name="recherche" placeholder="champ de recherche">
            <input type="submit" value="rechercher">
        </form>
<?php
if(isset($_POST['recherche'])){
//recupération des données formulaire et connexion a la base de donnée

$recherche = htmlspecialchars($POST['recherche']);
$connexionalabase = mysqli_connect("localhost", "ertel", "mouts88", "ecfbase");



    //recherche dans la base de donnée de la recherche
    $affichagebdd=mysqli_query($connexionalabase,"SELECT jeu, description_jeu, editeur, sortie FROM jeux WHERE jeu='".$recherche."'" );
    $affichages = $affichagebdd->fetch_all();



foreach($affichages as $affichage){
    echo "<h3>$affichage[1]</h3>
    <span><img src='img/image$id.png' alt='image jeu'></span>
    <span>type: $affichage[2]<br>éditeur: $affichage[3]<br>année d'édition: $affichage[4]</span>";
}
}else{
    echo 'erreur';
}
?>

        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>
</html>