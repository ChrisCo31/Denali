<?php
$session = new Session();
if($session->accessBackend())
{
    $articleManager = new ArticleManager();
    $articles = $articleManager->readAll();
    $commentaireManager = new CommentaireManager();
    $comments = $commentaireManager->commentReported();
    include 'templates/dashboard.php';
} else
{
    header("Location: Home");
}

