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
                    $_SESSION['flash']['error'] = 'Ces donnees existent deja"';
                }else
                {
                    $userManager->create($user);
                    header('Location: Login');
                    exit();
                }
        }else
        {
            $user->getErrors($errors);
        }
}
require_once 'templates/register.php';

