<?php
// instanciation = creation d'un objet : $article
	if(!empty($_POST['titre']) OR (!empty($_POST['text'])))
	{
		$articleManager = new ArticleManager();
		$id_article = $_POST['id_article'];
		$titre = $_POST['titre'];
		$text = $_POST['text'];
        $article= $articleManager->readOne($id_article);
		$articleManager->update($article);
		$article->setTitre($titre);
		$article->setText($text);
		$saveIsOk = $articleManager->update($article);
        $session = new Session();
        $session ->setFlash('success', "La modification a été enregistré");
		header('location: Dashboard');
	}else
	{
        $session = new Session();
        $session ->setFlash('danger', "Un probleme est survenu");
		header('location: Error');
        exit;
	}
//include '../templates/update.php';