<?php

abstract class BangunDatar
{
    public $nama;

    abstract public function hitungLuas();

    public function getNama()
    {
        return $this->nama;
    }

    public function pangkat($angka)
    {
        return $angka * $angka;
    }
}
