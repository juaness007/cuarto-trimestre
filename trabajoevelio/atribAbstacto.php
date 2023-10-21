<?php
abstract class Figura {
    abstract protected $nombre;
}

class Circulo extends Figura {
    protected $nombre = "Círculo";
}

$circulo = new Circulo();
echo $circulo->nombre;
?>
