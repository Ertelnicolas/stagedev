<?php
$prenom = 'pierre';
$nom = 'rasberry';
$s = '"$prenom"'.'"$nom"';


$pattern="è([a-z]{2,15})_(^($prenom){1})è";
if(preg_match($pattern,$s))
{
    echo 'ok';
}
else{ echo 'non';}

