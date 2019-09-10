<?php
$age;
if(!empty($_POST['birthday']))
{
    setcookie('utilisateur',$_POST['birthday']);
}

if(!empty($_COOKIE['birthday']))
{
    $birthday=$_COOKIE['utilisateur'];
    $age = date('Y')- $birthday;
}


if ($age>=18)
{
    echo 'du cul';
}
else
{
    header('Location:exo.php?alerte=pas l\age');
}

    