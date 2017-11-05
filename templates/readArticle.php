<?php ob_start(); ?>
<header>
	<article>
	    <h2><?php echo $article->getTitre(); ?></h2>
	    <p><?php echo $article->getText(); ?></p>
    </article>
    <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour à la page précédente</a>
    	<hr>
</header>
<section id = "Commentaires">
	<div class="well well-lg">
		<h3> Commentaires</h3>
				<?php include_once'_comments.php'; ?>
	</div>
		    <hr>
	<div class="well well-lg">
				<?php if(empty($commentaires)): ?>
				 	 <p><strong> Il n'y a pas encore de commentaire pour cette partie. <br/> Soyez le premier à commenter :</strong></p>
				<?php endif; ?>
	</div>
</section>  
<div class="panel panel-primary">
	<div class="panel-heading">
		<p id="Commenter"> Commenter
	</div>
	<div class="panel-body">
		     <form action ="InsertComments" method="POST" ><br/>
		     <input type="hidden" name="id" value="<?php echo $idArticle?>"/>
		     <label for="titre"> Pseudo </label> : <br/>
             <input type = "text" name ="username" id="username" /> <br/>
		     <label for="texte"> Commentaires </label> : <br/>
             <textarea name="commentaire" id="commentaire" rows="2" cols="135"/></textarea><br/>
			 <button type="submit" class="btn btn-primary btn-xs">commenter</button><br/>
             </form>
	    </p>
	 </div>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>
 