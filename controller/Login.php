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
        $session = new session();
        $session->setUsername($username);
        $session->setEmail($email);
        $session->setPassword($password);
        $session->setRole($role);
        header("Location: Dashboard");
    }else
    {
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrect';
    }
}
// Inclusion du template
include 'templates/login.php';

