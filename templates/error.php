<?php ob_start(); ?>
<section>
    <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour à la page précédente</a>
</section>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>
 
 

 
 