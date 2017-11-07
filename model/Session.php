<?php
/**
 * classe qui gere les sessions tant d'authentification ('auth') que les sessions de messages ('flash')
 */
class Session
{
     private $role_accepted = 'admin';

       /**
     * @return string
     */
    public function getRoleAccepted()
    {
        return $this->role_accepted;
    }

    /**
     * Methode qui detruit la session
     */
    public function destroy()
    {
        session_destroy();

    }
    /**
     * Methode qui verifie l'acces au backend
     * @return bool True si il y a une correspondance / False s'il n'y en a pas
     */
    public function accessBackend()
    {
        if ($this->getRole() == $this->getRoleAccepted())
        {
            return true;
        }else
        {
            return false;
        }
    }
    /**
     * @param $username
     */
    public function setUsername($username)
    {
       $_SESSION['username'] = $username;
    }
    /**
     * @return mixed
     */
    public function getUsername()
    {
        if(isset($_SESSION['username']))
        {
            return $_SESSION['username'];
        }
    }
    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $_SESSION['email'] = $email;
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
        if(isset($_SESSION['email']))
        {
            return $_SESSION['email'];
        }

    }
    /**
     * @param $password
     */
    public function setPassword($password)
    {
        $_SESSION['password'] = $password;
    }
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $_SESSION['password'];
    }
    /**
     * @param $role
     */
    public function setRole($role)
    {
        $_SESSION['role'] = $role;
    }
    /**
     * @return mixed
     */
    public function getRole()
    {
        if(isset($_SESSION['role']))
        {
            return $_SESSION['role'];
        }

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