<?php
/**
 * Created by PhpStorm.
 * User: mishi
 * Date: 26/10/2017
 * Time: 11:08
 */
class Session
{
    public function destroy()
    {
        session_destroy();
    }
    public function initAuth($username, $email, $password, $role)
    {
        $_SESSION['auth'] = array(
            'username'=> $username,
            'email' => $email,
            'password' => $password,
            'role' => $role);
    }
    public function accessBackend()
    {
        if(isset($_SESSION['auth']) && ($_SESSION['auth']['role'] == 'admin'))
        {
            return true;
        }else
        {
            return false;
        }
    }
    public function setUsername($username)
{
    $_SESSION['username'] = $username;
}
    public function getUsername()
    {
        return $this->username;
    }
    public function setEmail($email)
    {
        $_SESSION['email'] = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setPassword($password)
    {
        $_SESSION['password'] = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setRole($role)
    {
        $_SESSION['role'] = $role;
    }
    public function getRole()
    {
        return $this->role;
    }
    /*
     * Methode qui permet de definir un message flash
     * En premier parametre la cle et en second parametre le message
     */
    public function setFlash($key, $message)
    {
        $_SESSION['flash'][$key] = $message;
    }

}
