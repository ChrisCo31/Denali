<?php
if(!empty($_GET['id']) && (ctype_digit($_GET['id'])))
{
    $id_commentaire = $_GET['id'];
    $commentaireManager = new CommentaireManager();
    $result= $commentaireManager->validateComment($id_commentaire);
    $session = new Session();
    $session ->setFlash('success', "Commentaire validé");
    header('location: Dashboard');
}
