<?php
class Utente
{
    public $name;
    public $register;
    public $carrello = [];


    function __construct($_name, $_register)
    {
        $this->name = $_name;
        $this->register = $_register;
    }

    function aggiuntaCarrello($_prodotto)
    {
        $this->carrello[] = $_prodotto;
    }

    function prezzo() {
        $sconto = 20;
        $prezzo_totale = 0;
      
        foreach ($this->carrello as $articolo) {
            $prezzo_totale += $articolo->prezzo;
        }

        if ($this->register) {
            $prezzo_totale = $prezzo_totale - ($sconto / 100 * $prezzo_totale);
        }
           
        return $prezzo_totale;
    }
}
