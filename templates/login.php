<?php ob_start(); ?>
<h1>Se connecter</h1>
<div class="row">
    <form action="Login" method="POST">
        <div class="col-lg-offset-4 col-lg-4 ">
            <div class="form-group">
                <label for="">Pseudo</label>
                <input type="text" name="username" class="form-control" required/>
            </div>
        </div>
        <div class="col-lg-offset-4 col-lg-4 ">
            <div class="form-group">
                <label for=""> Mot de passe <a href="Forget">(J'ai oublié mon mot de passe)</a></label>
                <input type="password" name="password" class="form-control" required/>
            </div>
        </div>
        <div class="col-lg-offset-4 col-lg-4 ">
            <div class="submit">
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </div>
        </div>
    </form>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php'; ?>



 
 