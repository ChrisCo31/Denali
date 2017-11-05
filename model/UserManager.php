<?php

class UserManager extends BddManager
{
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
    public function retrieveToken($id, $token)
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare(" SELECT * FROM users WHERE id = ? AND token = ? AND dateToken > DATE_SUB(NOW(), INTERVAL 15 MINUTE)");
        $query->execute(array($id, $token));
        $result = $query->fetch();
        return $result;
    }
    public function insertToken($token, $id)
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare( "UPDATE users set token =?, dateToken= NOW() WHERE id =? ");
        $query -> execute(array($token, $id));
        return $query->execute();
    }
    public function random ($length)
    {
        $alphabet = "azertyuiopqsdfghjklmwxcvbnAZERTYUIOPMLKJHGFDSQWXCVBN0123456789";
        return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }
    public function verifyEmail($email)
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare("SELECT * FROM users WHERE email = ? ");
        $query-> execute(array($email));
        $result = $query->fetch();
        $user = new User($result);
        return $user;
    }
    public function MatchUser($username)
    {
        $bdd = $this->bdd;
        $query = $bdd-> prepare('SELECT * FROM users WHERE (username = ?)');
        $query->execute (array($username));
        return $verify = $query->fetch();
    }
    public function check($user)
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare("SELECT id FROM users WHERE (username = ?) OR (email = ?) ");
        $query-> execute(array($user->getUsername(), $user->getEmail()));
        return $verify = $query->fetch();
    }
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

