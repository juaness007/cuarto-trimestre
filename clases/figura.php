<?php
abstract class Figura
{
    private $nLlados = 1;

    public function imprimir()
    {
        echo 'Soy un metodo de clase abstracta';
    }
}
class triangulo extends Figura
{
    private float $base;
    private float $altura;
    public  function __construct($base,$altura){
        $this->base=$base;   
        $this->altura=$altura;   
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getBase(){
        return $this->base;
    }
    public function area($base,$altura){
        return $base*$altura/2;
    }
}
$triangulo1= new triangulo (12,2);
echo $triangulo1->area($triangulo1->getBase(),$triangulo1->getAltura());

