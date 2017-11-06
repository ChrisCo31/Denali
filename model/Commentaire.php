<?php
/*
* Classe commentaire, crée des objets commentaire
*/
class Commentaire
{
    private $id_commentaire;
    private $id_article;
    private $username;
    private $commentaire;
    private $date_commentaire;
    private $state = "0";
    /*
     * Construction de l'objet commentaire
     * Parametre : tableau de donnees qui correspond aux proprietes de l'objet commentaire
     */
    public function __construct(array $data=[])
    {
       if(!empty($data)){
        $this->hydrate($data);}
    }
    /*
     * Assignation de valeurs aux attributs via l'hydratation
     */
    public function hydrate(array $data)
    {
        $this->id_commentaire=$data['id_commentaire'];
        $this->id_article=$data['id_article'];
        $this->username=$data['username'];
        $this->commentaire = $data['commentaire'];
        $this->date_commentaire = $data['date_commentaire'];
        $this->state = $data['state'];
    }
    /**
     * @return mixed
     */
    public function getIdCommentaire()
    {
        return $this->id_commentaire;
    }
    /**
     * @return mixed
     */
    public function getIdArticle()
    {
        return $this->id_article;
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
    public function getCommentaire()
    {
        return $this->commentaire;
    }
    /**
     * @return mixed
     */
    public function getDateCommentaire()
    {
        return $this->date_commentaire;
    }
    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * @param $id_article
     * @return $this
     */
    public function setIdArticle($id_article)
    {
        $this->id_article = $id_article;
        return $this;
    }
    /**
     * @param $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
    /**
     * @param $commentaire
     * @return $this
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
        return $this;
    }
    /**
     * @param $date_commentaire
     * @return $this
     */
    public function setDateCommentaire($date_commentaire)
    {
        $this->date_commentaire = $date_commentaire;
        return $this;
    }
    /**
     * @param $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
}
 
