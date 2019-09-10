<?php
session_start();

if((isset($_COOKIE['cookpseudo']))&&(isset($_COOKIE['cookmdp']))){
    header('Location:ctrl/connexion_ctrl.php?status="coookkkiiie pour tous"');
}else{
    header('Location:vw/formulaire_vw.php');
}

?>

