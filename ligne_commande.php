<?php

require 'commande.php';
require 'article.php';

class LigneCommande
{

    private $quantite;
    private $article;

    public function __construct($uneQuantite)
    {
        $this->quantite  = $uneQuantite;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }

    public function setQuantite($uneQuantite)
    {
        $this->quantite = $uneQuantite;
    }

    public function getArticle()
    {
        return $this->article;
    }
}
