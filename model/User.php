<?php
/*
Creation de la classe User qui represente un utilisateur
*/
class User
{
    private $id;
    private $username;
    private $email;
    private $password;
    private $token;
    private $datetoken;
    private $role;
    private $errors= [];

    public function __construct(array $data=[])
    {
        if(!empty($data)){
        $this->hydrate($data); }
    }
    public function hydrate(array $data)
    {
        $this->id=$data['id'];
        $this->username=$data['username'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->role = $data['role'];
        $this->token = $data['token'];
        $this->datetoken = $data['dateToken'];
    }
    public function getToken()
    {
        return $this->token;
    }
    public function setToken($token)
    {
        $this->token = $token;
    }
    public function getDateToken()
    {
        return $this->datetoken;
    }
    public function setDateToken($datetoken)
    {
        $this->datetoken = $datetoken;
    }
    public function getId()
    {
        return $this->id;
    }
     public function getUsername()
    {
        return $this->username;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getErrors()
    {
        return $this->errors;
    }
    public function setErrors($errors)
    {
     $this->errors= $errors;
     return $this;
    }
    public function setUsername($username)
    {
        if((empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_-]+$/', $_POST['username'])))
        {
            $this->errors[]= "votre pseudo n'est pas valide";
            return $this ;
        }else
        {
            $this->username = $username;
            return $this;
        }
    }
    public function setEmail($email)
    {
        if((empty($_POST['email']) ||(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))))
        {
            $this->errors[] = "Veuillez rentrer un email valide";
            return $this;
        }else
        {
        $this->email = $email;
        return $this;
        }
    }
    public function setPassword($password)
    {
         if((empty($_POST['password']) || (empty($_POST['password_confirm']) ||($_POST['password'] != $_POST['password_confirm']))))
         {
             $this->errors[] =" Rentrez deux mots de passe identiques";
             return $this;
         }else
         {
             $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
             $this->password = $password;
             return $this;
         }
    }
    public function getRole()
    {
        return $this->role;
    }
}
 
