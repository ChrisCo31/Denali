<?php ob_start(); ?>
<section class="presentation">
    <div class="col-lg-12">
        <h2> Démarche créatrice</h2>
    </div>
    <div class="col-lg-12 ">
            <p>Now what are the possibilities of warp drive? Cmdr Riker's nervous system has been invaded by an unknown microorganism.
            <br/>It indicates a synchronic distortion in the areas emanating triolic waves. <br/>That's why the transporter's biofilters
            couldn't extract it. The vertex waves show a K-complex corresponding to an REM state. The engineering section's critical. Destruction is imminent. Their robes contain ultritium,
            highly explosive, virtually undetectable by your transporter.I haven't determined if our phaser energy can generate a stable field.
            We could alter the photons with phase discriminators.</p><br/>
    </div>
    <div class="col-lg-offset-3 col-lg-7 col-lg-offset-3">
        <div id="deco"></div>
    </div>
</section>
<div class="article">
   <div class="col-lg-offset-1 col-lg-10 ">
		<ul>
<?php foreach ($articles as $article): ?>
            <article>
                <h3><a href ="ReadArticle?id=<?php echo $article->getId_article() ?>">
<?php echo $article->getTitre(); ?>
                </a></h3>
                <p>
<?php echo substr($article->getText(), 0,400);?>
                </p>
	    	</article>
<?php endforeach ?>
		</ul>
    </div>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require  '_gabarit.php'; ?>