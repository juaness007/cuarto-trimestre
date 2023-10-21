<?php
class Calculadora {
    private $valor = 0;
    
    public function suma($n) {
        $this->valor += $n;
        return $this;
    }
    
    public function resta($n) {
        $this->valor -= $n;
        return $this;
    }
    
    public function obtenerResultado() {
        return $this->valor;
    }
}

$calculadora = new Calculadora();
$resultado = $calculadora->suma(5)->resta(3)->obtenerResultado();
echo $resultado;
?>
