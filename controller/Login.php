<?php
if(!empty($_POST) AND !empty($_POST['username']) AND (!empty($_POST['password'])))
{
    $userManager = new UserManager();
    $result = $userManager->MatchUser($_POST['username']);
    if(password_verify($_POST['password'], $result['password']))
    {
        $username = $result['username'];
        $email = $result['email'];
        $password = $result['password'];
        $role = $result['role'];
        $session = new Session();
        $session->initSession($username, $email, $password, $role);
        header("Location: Dashboard");
    }else
    {
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
    }
}else
{
    $_SESSION['flash']['danger'] = "rien dans les _POST s'affiche des l'arrive sur la page";
}
// Inclusion du template
include 'templates/login.php';

