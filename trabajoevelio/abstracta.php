<?php
abstract class Nave {
    abstract public function volar();
}

class helicoptero extends Nave {
    public function volar()  {
        echo "Volando el helicoptero.";
    }
}

$helicoptero = new helicoptero();
$helicoptero->volar();
?>