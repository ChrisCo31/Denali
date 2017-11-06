<?php
/*
Declaration de la classe CommentaireManager 
*/
class CommentaireManager extends BddManager
{
     /**
     * Insert un objet Commentaire dans la BDD
     * @param      Commentaire $commentaire
     * @return   $this
     */
    public function create(Commentaire $commentaire)
    {
    $bdd = $this->bdd;
    $query = $bdd->prepare('INSERT INTO commentaires(id_article, username, commentaire, date_commentaire, state) 
     VALUES(:id_article, :username, :commentaire, :date_commentaire, :state)');
    $query->execute(
        array(
            'id_article' => $commentaire->getIdArticle(),
            'username' => $commentaire->getUsername(),
            'commentaire' => $commentaire->getCommentaire(),
            'date_commentaire' => $commentaire->getDateCommentaire(),
            'state' =>$commentaire->getState()
        )
    );
    return $this;
    }
    /**
    * Recupere tout les objets Commentaire de la bdd
    * @return     array  Retourne un tableau d'objets Commentaire ou un tableau vide s'in n'y a aucun objet
    */
    public function readAllCommentsByPost($idArticle)
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare('SELECT * FROM commentaires WHERE id_article =? ORDER BY date_commentaire DESC');
        $query->execute(array($idArticle));
        while ($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            $commentaire = new Commentaire();
            $commentaire->hydrate($row);
            $commentaires[] = $commentaire;
        }
        if(!isset($commentaires)) return null;
        return $commentaires;
    }
    /**
    * Supprime un objet Commentaire stocke en bdd
    * @param      Commentaire  $commentaire  objet de type Commentaire
    * return     bool true en cas de succes ou false en cas d'erreur
    */
     public function delete($idcommentaire)
    {
      $bdd = $this->bdd;
      $query = $bdd->prepare ('DELETE FROM commentaires WHERE id_commentaire = ?');
      $query ->execute(array($idcommentaire));
      $result=$query;
      return $result;
    }
    /**
     * Permet le signalement d'un commentaire
     * @param $idcommentaire
     * @return bool
     */
    public function report($idcommentaire)
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare ("UPDATE commentaires SET state = 1 WHERE id_commentaire = ? ");
        $query -> execute(array($idcommentaire));
        return $query ->execute();
    }
    /**
     * Affiche les 10 derniers commentaires, avec en premier lieu les commentaires signalés
     * @return array
     */
    public function commentReported()
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare('SELECT * FROM commentaires ORDER BY state DESC, date_commentaire DESC LIMIT 0,10');
        $query ->execute();
        $results=$query->fetchAll();
        $comments =[];
        foreach($results as $data)
        {
            $objCommentaire = new Commentaire($data);
            $comments[] = $objCommentaire ;
        }
        return $comments;
    }
    /**
     * Valide les commentaires signalés
     * @param $idcommentaire
     * @return bool
     */
    public function validateComment($idcommentaire)
     {
         $bdd = $this->bdd;
         $query = $bdd->prepare ("UPDATE commentaires SET state = 0 WHERE id_commentaire = ? ");
         $query -> execute(array($idcommentaire));
         return $query ->execute();
     }
}
