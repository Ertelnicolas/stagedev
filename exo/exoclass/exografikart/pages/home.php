





<?php foreach($db->query('SELECT * FROM articles')as $post): ?>



        <a href="index.php?p=post&id=<?=$post->id; ?>"><?= $post->titre; ?></a>






<?php endforeach; ?>

