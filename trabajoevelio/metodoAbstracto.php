<?php
abstract class Figura {
    abstract public function calcularArea();
}

class Triangulo extends Figura {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }
}

$triangulo = new Triangulo(10, 5);
$area = $triangulo->calcularArea();

echo "El área del triángulo es: $area";
?>