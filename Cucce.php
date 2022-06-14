<?php
require_once __DIR__ . "/Prodotto.php";

class Cucce extends Prodotto
{
    public $dimensioni;
    public $materiale;

    function __construct($_marca, $_tipologia, $_prezzo, $dimensioni, $materiale)
    {
        parent::__construct($_marca, $_tipologia, $_prezzo);
        $this->dimensioni = $dimensioni;
        $this->materiale = $materiale;
    }


    public function stampaInfo () {
        return "$this->marca $this->tipologia € $this->prezzo Dimensioni : $this->dimensioni Materiale : $this->materiale";
    }
}
