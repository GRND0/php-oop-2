<?php
require_once __DIR__ . "/Prodotto.php";

class Cibo extends Prodotto {
    public $scadenza = 12/12/22;
    public $proteina;
    public $grammatura;


    function __construct($_marca, $_tipologia, $_prezzo, $proteina, $grammatura){
        parent::__construct($_marca, $_tipologia, $_prezzo);
        $this->proteina = $proteina;
        $this->grammatura = $grammatura;
    }

    public function stampaInfo () {
        return "$this->marca $this->tipologia € $this->prezzo Tipo di carne : $this->proteina Grammi : $this->grammatura";
    }

} 