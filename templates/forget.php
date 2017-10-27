<?php ob_start(); ?>
<h1>Mot de passe oublié</h1>
    <form action="" method="POST">
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>