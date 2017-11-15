<?php
$session = new Session(); ?>
<?php ($session->accessBackend() ) ? $class = "navbar-default" : $class = "navbar-inverse";?>
<body>
    <header class="row">
        <div class="col-lg-12">
            <nav class="navbar <?php echo $class;?> ">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        <a class="navbar-brand" href="Home"><img alt="Logo" class="img-rounded" src="web/img/plume48.png"></a>
                        </div>
                        <div id="navbar" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="Home">Accueil</a></li>
    <?php if($session->accessBackend()):?>
                                <li><a href="Register">S'inscrire</a></li>
                                <li><a href="Dashboard">Tableau de bord</a></li>
                                <li><a href="Logout">Quitter</a></li>
    <?php else :?>
                                <li><a href="Login">Se connecter</a></li>
    <?php endif; ?>
                            </ul>
                        </div>
                    </div>
            </nav>
        </div>
    </header>
<div id="headerwrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <h1> Billet simple pour l'Alaska</h1>
                <h3> Jean Forteroche</h3>
            </div>
        </div>
    </div>
</div>
<div class="container">
<?php
if(isset($_SESSION['flash'])): ?>
    <?php foreach($_SESSION['flash'] as $type => $message): ?>
        <div class="alert alert-<?= $type; ?>">
            <?= $message; ?>
        </div>
    <?php endforeach; ?>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>

