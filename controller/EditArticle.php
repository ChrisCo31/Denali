<?php
if(!empty($_GET['id']) && (ctype_digit($_GET['id'])))
{
    $idArticle = $_GET['id'];
    $articleManager = new ArticleManager();
    $article= $articleManager->readOne($idArticle);
    include_once 'templates/editArticle.php';
    exit;
} else
{
    header('location: Error');
    exit;
}
	
	
