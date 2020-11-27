<?php

class Article
{

    private $code;
    private $prix;

    public function __construct($code, $unPrix)
    {
        $this->code  = $code;
        $this->prix  = $unPrix;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($unPrix)
    {
        $this->prix = $unPrix;
    }
}
