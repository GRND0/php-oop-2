<?php
require_once __DIR__ . "/Prodotto.php";

class Guinzaglio extends Prodotto
{
    public $lungheza;
    public $materiale;

    function __construct($_marca, $_tipologia, $_prezzo, $lunghezza, $materiale)
    {
        parent::__construct($_marca, $_tipologia, $_prezzo);
        $this->dimensioni = $lunghezza;
        $this->materiale = $materiale;
    }


    public function stampaInfo () {
        return "$this->marca $this->tipologia € $this->prezzo Lunghezza : $this->lunghezza Materiale : $this->materiale";
    }
}