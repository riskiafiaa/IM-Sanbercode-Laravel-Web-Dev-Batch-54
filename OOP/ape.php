<?php
require_once("animal.php");
class Ape extends Animal
{
    public $animal = "sungokong";

    public function yell($suara)
    {
        return "Yell: $suara";
    }
}
