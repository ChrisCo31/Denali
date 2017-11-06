<?php
class Article
{
    private $id_article;
    private $titre;
    private $text;
    private $date_ajout;
    /*
     * Construction de l'objet article
     * Parametre : tableau de donnees qui correspond aux proprietes de l'article
     */
    public function __construct(array $data=[])
    {
         if(!empty($data))
         {
            $this->hydrate($data);
         }
    }
    /*
     * Assignation de valeurs aux attributs via l'hydratation
     */
    public function hydrate(array $data)
    {
        $this->id_article=$data['id_article'];
        $this->titre = $data['titre'];
        $this->text = $data['text'];
        $this->date_ajout = $data['date_ajout'];
    }
    /**
     * @return mixed
     */
    function getId_article()
        {
            return $this->id_article;
        }
    /**
     * @return mixed
     */
    function getTitre()
        {
            return $this->titre;
        }
    /**
     * @return mixed
     */
    function getText()
        {
            return $this->text;
        }
    /**
     * @return mixed
     */
    function getDate_ajout()
        {
            return $this->date_ajout;
        }
    /**
     * @param mixed $titre
     */
    function setTitre($titre)
        {
            if(is_string($titre))
            {
                 $this->titre = $titre;
            }
        }
    /**
     * @param mixed $text
     */
    function setText($text)
        {
            if(is_string($text))
            {
                $this->text = $text;
            }
        }
    /**
     * @param mixed $date_ajout
     */
    function setDate_ajout($date_ajout)
        {
            $this->date_ajout = $date_ajout;
        }
}
