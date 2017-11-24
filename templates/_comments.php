<?php
if(isset($commentaires) && (!empty($commentaires)))
{
    foreach  ($commentaires as $commentaire):?>
        <div class="article">
            <p><strong>Le <?php echo date('d/m/Y à H:i:s', strtotime($commentaire->getDateCommentaire())); ?> </strong></p>
            <p> <strong><?php echo $commentaire->getUsername() ?> :</strong> "<?php echo $commentaire->getCommentaire() ?>"</p>
            <a  class ="btn btn-warning " href ="Report?id=<?php echo $commentaire->getIdCommentaire()?>">Signaler</a>
        </div>
    <?php endforeach;
}
