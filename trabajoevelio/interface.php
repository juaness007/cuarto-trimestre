<?php
interface Animal {
    public function hacerSonido();
}

class Vaca implements Animal {
    public function hacerSonido() {
        echo "MUuuuuuuuuuuu";
    }
}

$vaca = new Vaca();
$vaca->hacerSonido();
?>