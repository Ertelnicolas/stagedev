<?php
try{
$connectionalabase = mysqli_connect("localhost", "ertel", "mouts88", "ville de france");
}catch(Exception $e){
    echo 'impossible de se connecter';
}
$search = mysqli_query($connectionalabase,"SELECT ville_nom,ville_population_2010 FROM villes_france_free WHERE (ville_nom LIKE '%S' OR ville_nom LIKE '%E') AND ville_population_2010=580");

$recherche = $search->fetch_all();

foreach($recherche as $recherch ){
    echo 
    $recherch[0]." ".$recherch[1]."<br>";
}



try{
$db=new PDO('mysql:host=localhost;dbname=mabase','ertel','vbmouts88');
}catch(PDOException $e){
    echo 'la base de donnees est pas possible';
}
//$d = array('jean-paul','1975-11-11');
$req = $db->prepare('INSERT INTO tabledate(pseudo,datenaissance) VALUES (:pseudo, :datenaissance)');

$d = array(array(
            'pseudo'=>'cristophe',
            'datenaissance'=> '1983-08-19'
        ),array(
            'pseudo'=>'madeleine',
            'datenaissance'=> '1920-10-26'
        ),array(
            'pseudo'=>'paulette',
            'datenaissance'=> '1976-09-01' 
        )
);
foreach ($d as $v){

$req ->execute($v);
}