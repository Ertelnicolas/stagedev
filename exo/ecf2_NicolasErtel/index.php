<!DOCTYPE html>
<html lang="fr">
    <head>
    <?php require 'head.php' ?>
    </head>
    
        <main class="container-fluid">
            <?php require 'nav.php' ?>
        <div class="row justify-content-around">
            <div class="col-xl-4 col-md-4 col-12">
                <iframe class="mt-5"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5224.384629146477!2d6.2294552016853295!3d49.10198687326039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794ddc465c807f3%3A0x866ed80590fdd7e3!2s12+Rue+Thomas+Edison%2C+57070+Metz!5e0!3m2!1sfr!2sfr!4v1566545084296!5m2!1sfr!2sfr"
                    width="600"
                    height="450"
                    frameborder="0"
                    style="border:0"
                    allowfullscreen="allowfullscreen"></iframe>
            </div>
            <div class="col-xl-3 col-md-3 col-12">
                <form class="mt-5" action="recherche.php" method="POST">
                    <input  type="submit" class="btn btn-primary btn-block" value="chercher un jeu">
                </form>
                <form class="mt-5" action="enregistrement_jeu.php" method="POST">
                    <input type="submit" class="btn btn-primary btn-block" value="enregistrer un jeu">
                </form>
            </div>
        </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>