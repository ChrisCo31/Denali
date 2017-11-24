<?php

class UserManager extends BddManager
{
    /**
     * Methode qui met a jour le mot de passe (remet le token et la date du token à null)
     * @param User $user
     * @return PDOStatement
     */
    public function updatePass(User $user)
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare('UPDATE users SET password =?, token = NULL, datetoken = NULL WHERE id = ? ');
        $query->execute(array(
            $user->getPassword('password'),
            $user->getId('id')
             ));
        $result=$query;
        return $result;
    }
    /**
     * Methode qui recupere l'utilsateur
     * @param $id
     * @param $token
     * @return mixed
     */
    public function retrieveToken($id, $token)
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare(" SELECT * FROM users WHERE id = ? AND token = ? ");
        $query->execute(array($id, $token));
        $result = $query->fetch();
        return $result;
    }
    /**
     * Methode qui insere un token en bdd afin de reinitialiser le mot de passe
     * @param $token
     * @param $id
     * @return bool
     */
    public function insertToken($token, $id)
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare( "UPDATE users set token =?, dateToken= NOW() WHERE id =? ");
        $query -> execute(array($token, $id));
        return $query->execute();
    }
    /**
     * Methode qui genere un token aléatoirement
     * @param $length     longueur de la cle
     * @return bool|string
     */
    public function random ($length)
    {
        $alphabet = "azertyuiopqsdfghjklmwxcvbnAZERTYUIOPMLKJHGFDSQWXCVBN0123456789";
        return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }
    /**
     * Methode qui verifie que'un email correspondant à celui poster existe.
     * @param $email
     * @return User
     */
    public function verifyEmail($email)
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare("SELECT * FROM users WHERE email = ? ");
        $query-> execute(array($email));
        $result = $query->fetch();
        $user = new User($result);
        return $user;
    }
    /**
     * Methode qui identifie dans la bdd un user correspondant au pseudo poster
     * @param $username
     * @return mixed
     */
    public function MatchUser($username)
    {
        $bdd = $this->bdd;
        $query = $bdd-> prepare('SELECT * FROM users WHERE (username = ?)');
        $query->execute (array($username));
        return $query->fetch();
    }
    /**
     * Methode qui verifie l'existence d'un utilsateur
     * @param $user
     * @return mixed
     */
    public function check($user)
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare("SELECT id FROM users WHERE (username = ?) OR (email = ?) ");
        $query-> execute(array($user->getUsername(), $user->getEmail()));
        return $query->fetch();
    }
    /**
     * Methode qui crée un utilsateur en bdd
     * @param User $user
     * @return PDOStatement
     */
    public function create(User $user)
     {
         $bdd = $this->bdd;
         $query = $bdd->prepare('INSERT INTO users(username, email, password) VALUES(?,?,?)');
         $query->execute(array(
             $user->getUsername('username'),
             $user->getEmail('email'),
             $user->getPassword('password')));
         $result=$query;
         return $result;
    }
}

