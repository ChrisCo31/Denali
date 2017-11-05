<?php
/**
 * Created by PhpStorm.
 * User: mishi
 * Date: 02/11/2017
 * Time: 16:23
 */
if(isset($commentaires) AND (!empty($commentaires)))
{
    foreach  ($commentaires as $commentaire):?>
        <article>
            <p><strong>Le <?php echo date('d/m/Y à H:i:s', strtotime($commentaire->getDateCommentaire())); ?> </strong></p>
            <p> <strong><?php echo $commentaire->getUsername() ?> :</strong> "<?php echo $commentaire->getCommentaire() ?>"</p>
            <a  class ="btn btn-warning btn-sm" href ="Report?id=<?php echo $commentaire->getIdCommentaire()?>">Signaler</a>
        </article>
    <?php endforeach;
}