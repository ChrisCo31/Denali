<?php
$session = new Session();
if($session->accessBackend())
{
// Creation d'un objet
if(!empty($_POST['titre']) OR (!empty($_POST['text'])))
{
    $article = new Article();
    $date_ajout = new DateTime();
    var_dump($date_ajout);
    $article->setTitre($_POST['titre']);
    $article->setText($_POST['text']);
    $article->setDate_ajout($date_ajout->date);
    $ArticleManager = new ArticleManager();
    $saveIsOk = $ArticleManager->create($article);
}
//Inclusion du template
include_once 'templates/createArticle.php';

} else
{
    header("Location: Home");
}


