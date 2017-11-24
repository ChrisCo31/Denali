<?php
$session = new Session();
if($session->accessBackend())
{
    if(!empty($_POST['titre']) || (!empty($_POST['text'])))
    {
        $ArticleManager = new ArticleManager();
        $article = new Article();
        $date_ajout = date('Y-m-d H:i:s');
        $article->setTitre($_POST['titre']);
        $article->setText($_POST['text']);
        $article->setDate_ajout($date_ajout);
        $saveIsOk = $ArticleManager->create($article);
        $session = new Session();
        $session ->setFlash('success', "Nouvel article ajouté");
    }
include_once 'templates/createArticle.php';
} else
{
    header("Location: Home");
}

