<?php

class Segitiga extends BangunDatar
{
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitungLuas()
    {
        return $this->alas * $this->tinggi / 2;
    }
}