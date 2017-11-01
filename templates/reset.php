<?php ob_start(); ?>
    <h1>Entrer un nouveau mot de passe</h1>
    <form action="" method="POST">
        <div class="form-group">
            <label for="">Mot de passe</label>
            <input type="password" name="password" class="form-control" required/>
        </div>
        <div class="form-group">
            <label for="">Confirmez votre mot de passe</label>
            <input type="password" name="password_confirm" class="form-control" required/>
        </div>
        <button type="submit" name = "test" class="btn btn-primary">Reinitialiser votre mot de passe</button>
    </form>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>