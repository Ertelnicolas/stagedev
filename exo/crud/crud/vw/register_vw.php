<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud s'inscrire</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <form action="../ctrl/register_ctrl.php" method="POST">
            <input type="text" name="pseudo" placeholder="saisir votre pseudo" Required>
            <input type="password" name="motdepasse" placeholder="saisir votre mot de passe" Required>
            
            <input type="submit" value="envoyer">
            </form>
        </div>
    </main>
    
</body>
</html>