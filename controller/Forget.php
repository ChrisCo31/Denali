<?php
if(isset($_POST) && !empty($_POST['email']))
{
    $email = ($_POST['email']);
    $userManager = new UserManager();
    $user = $userManager->verifyEmail($email);
    if($user)
    {
        $token = $userManager->random(60);
        $email = $user->getEmail();
        $id = $user->getId();
        $userManager->insertToken($token, $id);
        $message = 'Réinitiatilisation de votre mot de passe';
        $headers  = "Afin de réinitialiser votre mot de passe merci de cliquer sur ce lien\n\nhttp://localhost/Denali/Reset?id=$id&token=$token";
        mail($user->getEmail(), $message, $headers);
    }else
    {
        $_SESSION['flash']['danger'] = 'Aucun compte ne correspond a cette adresse';
    }
}
include_once 'templates/forget.php';