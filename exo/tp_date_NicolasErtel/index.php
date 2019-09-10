<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>exo/date</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <!--formulaire-->
        <h3>Entrée un pseudo est votre date de naissance</h3>
        <br>
        <form method="POST" action="ctrl_date.php">
            <label for="pseudo"> Entrez votre pseudo </label> <input type="text" name="pseudo" required>
            <label for="ann"> et votre date de naissance </label> <input type="date" name="ann" required>
            <input type="submit" value="enregistrer">
        </form>
<br>
<h3>Filtre jeune/ancien</h3>
        <form action = "vw.php" method = "POST">
            <input type = "date" name="annee">
            <div>
        <label for="x">plus jeune(s)</label><input type="radio" name="option" value="option_1" id="x" checked>
        </div>
        <div>
        <label for="y">plus agé(es)</label><input type="radio" name="option" value="option_2" id="y">
        </div>
            <input type="submit" value="filtre">
        </form>
        <h1>test git</h1>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>