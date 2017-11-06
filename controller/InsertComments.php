<?php
// Création d'un objet
    if(!empty($_POST['username']) || (!empty($_POST['Commentaire'])))
    {
        $CommentaireManager = new CommentaireManager();
        $commentaire = new Commentaire();
        $date_commentaire = date('Y-m-d H:i:s');
        $commentaire->setIdArticle($_POST['id']);
        $commentaire->setUsername($_POST['username']);
        $commentaire->setCommentaire($_POST['commentaire']);
        $commentaire->setDateCommentaire($date_commentaire);
        $saveIsOk = $CommentaireManager->create($commentaire);
        $session = new Session();
        $session ->setFlash('success', "Merci de votre commentaire");
        header('location: Home');
        exit;
    }else
    {
        $session = new Session();
        $session ->setFlash('danger', "Vous devez remplir tout les champs");
        include 'templates/insertComments.php';
        exit;
    }
