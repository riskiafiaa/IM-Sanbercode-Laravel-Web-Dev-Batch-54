<?php
class Animal
{
    public $legs = 4;
    public $telinga = 2;
    public $animal = "sheep";
    public $cold_blooded = "no";
    public $namahewan;
    public function __construct($hewan)
    {
        $this->namahewan = $hewan;
    }
}
