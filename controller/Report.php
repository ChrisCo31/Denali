<?php
/**
 * Created by PhpStorm.
 * User: mishi
 * Date: 17/10/2017
 * Time: 12:46
 */
// Creation d'un objet
//recuperer l'id du commentaire passer en POST pour identifier le commentaire à signaler
$idcommentaire = $_GET['id'];
if((isset($idcommentaire)) && (!empty($idcommentaire)))
{
    $manager = new CommentaireManager();
    $manager->report($idcommentaire);
    $session = new Session();
    $session->setFlash('success', 'Le commentaire a bien été signalé');
    header('Location: Home');
}
