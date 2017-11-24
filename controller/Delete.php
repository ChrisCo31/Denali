<?php
// instanciation = creation d'un objet : $article
if(!empty($_GET['id']) && (ctype_digit($_GET['id'])))
{
    $id_article = $_GET['id'];
    $articleManager = new ArticleManager();
    $result = $articleManager->delete($id_article);
    $session = new Session();
    $session ->setFlash('success', "L'article a bien été supprimé");
    header('location: Dashboard');
} else
{
    header('location: Error');
    exit;
}
