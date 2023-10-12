<?php

class Prijava
{
    public $predmet;
    public $katedra;
    public $sala;
    public $datum;

    //pokazati php manual
    public function __construct($predmet = null, $katedra = null, $sala = null, $datum = null)
    {
        $this->predmet = $predmet;
        $this->katedra = $katedra;
        $this->sala = $sala;
        $this->datum = $datum;
    }

    public static function getAll(mysqli $conn)
    {
        //iskljucivo dvostruki navodnici
        $query_string = "SELECT * FROM prijave";

        //konekcija sa bazom
        return $conn->query($query_string);
    }
}
