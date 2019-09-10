<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require 'head.php'?>
    </head>
    <body>
    <main class="container-fluid">
        <?php require 'nav.php' ?>
        <form action="ctrl/ctrl_enregistrement_jeu.php" method="POST">
        <ul>
            <li><label for="jeu">nom du jeu :</label><input class="form-control" type="text" name="enr_jeu" id="jeu"></li>
            <li><label for="desc">description/type du jeu :</label><input class="form-control" type="text" name="enr_description_jeu" id="desc"></li>
            <li><label for="edit">éditeur :</label><input class="form-control" type="text" name="enr_editeur" id="edit"></li>
            <li><label for="datedesortie">date de sortie :</label><input class="form-control" type="date" name="enr_sortie" id="datedesortie"></li>
            </ul>
        <input type="submit" value="enregistrer le jeu">
        
        </form>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>


