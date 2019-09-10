<?php
//message de validation d'enregistrement du pseudo/date
if(isset($_GET['message'])){
    echo $_GET['message'];
}

//variable
$annee = $_POST['annee'];
$option = $_POST['option'];

var_dump($jeune);
//connexion a la BDD
try{
    $connexionalabase = mysqli_connect("localhost", "ertel", "mouts88", "mabase");  
}catch (Exception $e) {
    echo"La connexion à la base a échoué";
}

// recherche des plus jeunes
if($option=="option_1"){

    $kiri= mysqli_query($connexionalabase,"SELECT pseudo,datenaissance FROM tabledate WHERE datenaissance >= '".$annee."'ORDER BY datenaissance DESC");


        $users = $kiri->fetch_all();

//affichage des plus jeunes
    if(isset($annee)){

?>
    <h3>liste des naissances plus jeune</h3>
    <h5>classée du plus jeune au plus ancien</h5>
    <br>
<?php

        foreach($users as $user){        
            echo $user[0].' est né le '.$user[1].'<br>';
        }
    }
}else{
    //recherche des plus anciens
    $kiri= mysqli_query($connexionalabase,"SELECT pseudo,datenaissance FROM tabledate WHERE datenaissance <= '".$annee."'ORDER BY datenaissance DESC");

    $users = $kiri->fetch_all();

//affichage des plus anciens
    if(isset($annee)){
        
?>
    <h3>liste des naissances plus ancien</h3>
    <h5>classée du plus jeune au plus ancien</h5>
    <br>
<?php

        foreach($users as $user){        
            echo $user[0].' est né le '.$user[1].'<br>';
        }
    }


    }
?>
<br>
<br>
<a href="index.php">revenir au menu</a>
