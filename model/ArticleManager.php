<?php
require_once('Article.php');
class ArticleManager extends BddManager
{
    /**
     * Methode qui insère un objet article en bdd
     * @param Article $article
     * @return $this
     */
    public function create(Article $article)
    {
    $bdd = $this->bdd;
    $req = $bdd->prepare('INSERT INTO articles (titre, text, date_ajout) VALUES(:title, :text, :date_ajout)');
    $req->execute(
        array(
            'title' => $article->getTitre(),
            'text' => $article->getText(),
            'date_ajout' => $article->getDate_ajout()
        ));
    return $this;
    }
    /**
     * Methode qui permet d'afficher tout les articles en bdd
     * @return array retourne un tableau d'objet article
     */
    public function readAll()
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare('SELECT * FROM articles ORDER BY date_ajout DESC ');
        $query->execute();
        $results = $query->fetchAll();
        $articles = [];
        foreach($results as $data)
        {
            $objArticle = new Article($data);
            $articles[] = $objArticle;
        }
        return $articles;
    }
    /**
     * Methode qui affiche l'article correspondant à l'id d'un article
     * @param $id_article
     * @return Article
     */
    public function readOne($id_article)
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare('SELECT * FROM articles WHERE id_article = ?');
        $query->execute(array($id_article));
        $result = $query->fetch();
        $article = new Article ($result);
        return $article;
    }
    /**
     * Methode qui supprime un article identifier par son id
     * @param $id_article
     * @return PDOStatement
     */
    public function delete($id_article)
    {
         $bdd = $this->bdd;
         $query = $bdd->prepare ('DELETE FROM articles WHERE id_article=  ?');
         $query ->execute(array($id_article));
         $result=$query;
         return $result;
    }
      /**
      * MAJ un objet Article stocké en bdd
      * @param      Article  $article  objet de type Article
      * return     bool true en cas de succes ou false en cas d'erreur        
      */
    public function update(article $article)
    {
         $bdd = $this->bdd;
         $query = $bdd->prepare ("UPDATE articles SET titre =:titre, text =:text WHERE id_article=:id LIMIT 1");
         $query ->bindValue(':titre', $article->getTitre(), PDO::PARAM_STR);
         $query ->bindValue(':text', $article->getText(), PDO::PARAM_STR);
         $query ->bindValue(':id', $article->getId_article(), PDO::PARAM_INT);
         return $query ->execute();
    }
}

 