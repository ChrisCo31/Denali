<?php
if(!empty($_POST))
{
    $user = new User();
    $user->setUsername($_POST['username']);
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    if(!empty($user->getUsername()) && (!empty($user->getEmail())) &&  (!empty($user->getPassword())))
    {
        $userManager = new UserManager();
        $verify = $userManager->check($user);

        if($verify !== false)
        {
            $session = new session();
            $session->setFlash('warning',"Ces donnees sont deja utilisées" );
        }else
        {
            $userManager->create($user);
            $session = new session();
            $session->setFlash('success',"Votre compte a bien ete créé");
            header('Location: Login');
            exit();
        }
    }else
    {
        $errors = $user->getErrors();
    }
}
require_once 'templates/register.php';

