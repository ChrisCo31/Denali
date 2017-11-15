<?php
if(isset($_GET['id']) && isset($_GET['token']))
{
    $id = $_GET['id'];
    $token = $_GET['token'];
    $usermanager = new UserManager();
    $result = $usermanager->retrieveToken($id, $token);
    if ($result)
    {
        if(!empty($_POST))
        {
            if(!empty($_POST['password']) && $_POST['password'] == $_POST['password_confirm'])
            {
                $user = new User($result );
                $password = $user->setPassword($_POST['password']);
                $usermanager->updatePass($user);
            }
        }
    }else
    {
        $_SESSION['flash']['error'] = "ce token n'est pas valide";
        header('Location : Login');
        exit();
    }
}else
{
    header('Location : Login');
    exit();
}
include_once 'templates/reset.php';