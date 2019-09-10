<?php
$nom=null;
if(!empty($_GET['action'])&& $_GET['action']==='déconnecter')
{
    //unset ( $_COOKIE['utilisateur']);
    setcookie('utilisateur','',time()-10);
}
if (!empty($_COOKIE['utilisateur']))
{
    $nom = $_COOKIE['utilisateur'];
}

if(!empty($_POST['pseudo']))
{
    setcookie('utilisateur',$_POST['pseudo'],time()+3600);
    $pseudo=htmlspecialchars($_POST['pseudo']);
}
if($nom)
{
    echo 'salut '.htmlentities($nom).$pseudo; 
}
else
{
    header('Location:index.php');
}
?>
<a href="index.php?action=deconnecter">Se déconnecter</a>


