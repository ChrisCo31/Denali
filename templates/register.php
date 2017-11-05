<?php ob_start(); ?>
<h1>S'inscrire</h1>
<?php if(!empty($errors)):?>
<div class="alert alert-danger">
    <p> Vous n'avez pas rempli le formulaire correctement</p>
    <?php foreach ($errors as $error): ?>
        <ul>
            <li><?= $error; ?></li>
        </ul>
    <?php endforeach;?>

</div>
<?php endif; ?>
        <form action="" method="POST">
            <div class="form-group">

                <label for="">Pseudo</label>
                <input type="text" name="username" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" name="password" class="form-control" required/>
            </div>
            <div class="form-group">
                <label for="">Confirmez votre mot de passe</label>
                <input type="password" name="password_confirm" class="form-control" required/>
            </div>
                <button type="submit" name = "test" class="btn btn-primary">M'inscrire</button>
    </form>
<?php $contenu = ob_get_clean(); ?>
<?php require '_gabarit.php';
