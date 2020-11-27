<?php

require 'ligne_commande.php';
require 'article.php';

class Commande
{

    private $numero;
    private $date;
    private $lesLignes = array();



    /*
    
    */

    public function __construct($numero, $date, $quantite, $lesLignes)
    {
        $this->numero = $numero;
        $this->date = $date;
        $this->lesLignes = array();
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getLignes()
    {
        return $this->lesLignes;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getMontantTotal($lesLignes)
    {

        $montant = 0;
        $montantTotal = 0;

        foreach ($lesLignes as $value) {

            $quantite = $value->getQuantite();
            $prix = $value->getPrix();
            $montant = $prix * $quantite;
            $montantTotal += $montant;
        }
    }

    public function addLigne($quantite, $article, $lesLignes)
    {
        $newCommande = new LigneCommande($quantite, $article);
        $lesLignes += new $newCommande;
    }
}
