<?php
$session = new Session();
if($session->accessBackend())
{
// instanciation = creation d'un objet : $article
$articleManager = new ArticleManager();
$articles = $articleManager->readAll();
$commentaireManager = new CommentaireManager();
$comments = $commentaireManager->commentReported();
// Inclusion du template
include 'templates/dashboard.php';
} else
{
    header("Location: Home");
}

