<?php
/**
 * Created by PhpStorm.
 * User: mishi
 * Date: 26/10/2017
 * Time: 11:08
 */
class Session extends BddManager
{
    private $username;
    private $email;
    private $password;
    private $role;

    public function initSession($username, $email, $password, $role)
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

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }



}
