<?php
if(!empty($_GET['id']) AND (ctype_digit($_GET['id'])))
{
    $id_commentaire = $_GET['id'];
    $commentaireManager = new CommentaireManager();
    $result= $commentaireManager->delete($id_commentaire);
    $session = new Session();
    $session ->setFlash('success', "Commentaire supprimé");
    header('location: Dashboard');
} else
{
    header('location: Error');
    exit;
}
