<?php
trait Saludo {
    public function decirHola() {
        echo "¡Hola!";
    }
}

trait Despedida {
    public function decirAdios() {
        echo "¡Adiós!";
    }
}

class Persona {
    use Saludo, Despedida;
}

$persona = new Persona();
$persona->decirHola();
$persona->decirAdios();
?>