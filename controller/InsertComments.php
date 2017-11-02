<?php
// Création d'un objet
    if(!empty($_POST['username']) OR (!empty($_POST['Commentaire'])))
    {
        $CommentaireManager = new CommentaireManager();
        $commentaire = new Commentaire();
        $date_commentaire = date('Y-m-d H:i:s');
        $commentaire->setIdArticle($_POST['id']);
        $commentaire->setUsername($_POST['username']);
        $commentaire->setCommentaire($_POST['commentaire']);
        $commentaire->setDateCommentaire($date_commentaire);
        $saveIsOk = $CommentaireManager->create($commentaire);
        header('location: Home');
        exit;
    }else
    {
        $_SESSION['flash']['warning'] = 'veuillez remplir tous les champs, svp';
        include 'templates/insertComments.php';
        exit;
    }
