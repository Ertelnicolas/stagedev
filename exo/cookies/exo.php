<!DOCTYPE html>
<html>
    <head>
        <title>test cookies</title>
    </head>
    <body>
    <?php  if(isset($_GET['alerte'])):?><?='va faire mumuse ailleur!'?><?php endif ?>
    
        <form class="form-group" action='oleole.php' method='post'>
            <label for="birthday">Entrée votre date de naissance</label>
            <select class="form-control" name="birthday" id="birthday">
            <?php for($i=2020;$i>1900;$i--):?>
            <option value="<?=$i?>"><?=$i?></option>
            <?php endfor ?></select>
            <input class="form-control" type="submit" value="valider">
    </body>
</html>
