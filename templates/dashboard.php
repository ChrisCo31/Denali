<?php ob_start(); ?>
<section id="create">
    <div class="well well-lg">
        <div class="row">
            <div class="col-lg-6 ">
                <a class="creation" href="CreateArticle"><img alt="creation" class="img-rounded" src="web/img/brancusi2.jpg"></a>
            </div>
            <div class="col-lg-6 ">
                <h2> <a href="CreateArticle">CREER</a></h2>
            </div>
        </div>
    </div>
</section>
<section id = "chapitres">
    <div class="row">
        <div class="well well-lg">
            <h3>Acces aux chapitres</h3>
            <ul>
<?php foreach ($articles as $article): ?>
                <article>
                    <h4><?php echo $article->getTitre(); ?></h4>
                    <a  class ="btn btn-warning " href ="EditArticle?id=<?php echo $article->getId_article() ?>">Modifier </a>
                    <a  class ="btn btn-warning " href ="Delete?id=<?php echo $article->getId_article() ?>">Supprimer</a>
                </article>
<?php endforeach ?>
            </ul>
        </div>
    </div>
</section>
<section id = "commentaires">
    <div class="row">
        <div class="well well-lg">
            <h3> Commentaires publiés</h3>
            <ul>
                <?php foreach ($comments as $comment): ?>
                    <?php ($comment->getState()==1) ? $border ="border:outset white; padding:30px;background:linear-gradient(to right, #434e5b, rgba(143, 135,124,0.4));" : $border="padding:30px" ;?>
                    <article style="<?php echo $border ?>">
                        <h4><?php echo $comment->getUsername();?> : </h4>
                        <p><?php echo  $comment->getCommentaire();?></p>
                        <?php if($comment->getState()==1) : ?>
                            <a  class ="btn btn-warning btn-sm" href ="ValidateComment?id=<?php echo $comment->getIdCommentaire()?>">Valider</a>
                        <?php endif; ?>
                        <a  class ="btn btn-warning btn-sm" href ="DelComment?id=<?php echo $comment->getIdCommentaire()?>">Supprimer</a>
                        <a  class ="btn btn-warning btn-sm" href ="ReadArticle?id=<?php echo $comment->getIdArticle()?>">Voir l'article</a>
                    </article>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</section>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>


