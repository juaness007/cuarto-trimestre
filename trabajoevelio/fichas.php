<?php
declare(strict_types=1);

class Aprendiz {
    private $nombre;
    private $documento;
    private $edad;

    public function __construct($nombre, $documento, $edad) {
        $this->nombre = $nombre;
        $this->documento = $documento;
        $this->edad = $edad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function getEdad() {
        return $this->edad;
    }
}

class Ficha {
    private $numeroFicha;
    private $aprendices = [];

    public function __construct($numeroFicha) {
        $this->numeroFicha = $numeroFicha;
    }

    public function agregarAprendiz(Aprendiz $aprendiz) {
        $this->aprendices[] = $aprendiz;
    }

    public function listarAprendices() {
        echo "Aprendices en la Ficha {$this->numeroFicha}:\n";
        foreach ($this->aprendices as $aprendiz) {
            echo "Nombre: {$aprendiz->getNombre()}, Documento: {$aprendiz->getDocumento()}, Edad: {$aprendiz->getEdad()}\n";
        }
    }
}


$ficha = new Ficha("2693630");
$aprendiz1 = new Aprendiz("Juan Pérez", "12345", 25);
$aprendiz2 = new Aprendiz("María López", "67890", 22);

$ficha->agregarAprendiz($aprendiz1);
$ficha->agregarAprendiz($aprendiz2);

$ficha->listarAprendices();
?>
