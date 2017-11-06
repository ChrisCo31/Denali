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
    /*
    * Construction de l'objet user
    * Paramètre : tableau de donnees qui correspond aux proprietes du user
    */
    public function __construct(array $data=[])
    {
        if(!empty($data)){
        $this->hydrate($data); }
    }
    /*
    * Assignation de valeurs aux attributs via l'hydratation
    */
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
    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * @param $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
    /**
     * @return mixed
     */
    public function getDateToken()
    {
        return $this->datetoken;
    }
    /**
     * @param $datetoken
     */
    public function setDateToken($datetoken)
    {
        $this->datetoken = $datetoken;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * @param $errors
     * @return $this
     */
    public function setErrors($errors)
    {
         $this->errors= $errors;
         return $this;
    }
    /**
     * @param $username
     * @return $this
     */
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
    /**
     * @param $email
     * @return $this
     */
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
    /**
     * @param $password
     * @return $this
     */
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
    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }
}
 
