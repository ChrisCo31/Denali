<?php
$session = new Session();
if($session->accessBackend())
{
// Creation d'un objet
if(!empty($_POST['titre']) OR (!empty($_POST['text'])))
{
    $ArticleManager = new ArticleManager();
    $article = new Article();
    $date_ajout = date('Y-m-d H:i:s');
    $article->setTitre($_POST['titre']);
    $article->setText($_POST['text']);
    $article->setDate_ajout($date_ajout);

    $saveIsOk = $ArticleManager->create($article);
}
//Inclusion du template
include_once 'templates/createArticle.php';

} else
{
    header("Location: Home");
}

