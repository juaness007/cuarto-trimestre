<?php
class Juanes{
    private string $nombre;
    private int $edad;
    private float $precio;
    public function __construct($nombre,$edad,$precio) {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->precio=$precio;
    }

    public function get_datos(){
        return $this->nombre .'<br>' .$this->edad .'<br>' .$this->precio;
    }

    public function set_nombre($nombre){
        $this->nombre=$nombre;
    }
    public function get_nombre(){
        return $this->nombre;
    }
    public function set_edad($edad){
        $this->edad=$edad;
    }
    public function get_edad(){
        return $this->edad;
    }
    public function set_precio($precio){
        $this->precio=$precio;
    }
    public function get_precio(){
        return $this->precio;
    }

}
$usuario01=new Juanes('Juanes', 19, 9823.43);
echo $usuario01->get_datos();
$usuario01->set_nombre('Carlos');
echo $usuario01->get_nombre() . '<br>';
$usuario01->set_edad('18');
echo $usuario01->get_edad() . '<br>';
$usuario01->set_precio('1200002');
echo $usuario01->get_precio() .'<br>';


?>