<?php
require_once("animal.php");
class Frog extends Animal
{
    public $animal = "katak";

    public function jump($suara)
    {
        return "Jump: $suara";
    }
}
