<?php
class primera_clase{
    public string $nombre;
    public int $edad;
    public float $precio;
    public function __construct($nombre,$edad,$precio) {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->precio=$precio;
    }
}
$usuario01=new primera_clase('Juanes', 19, 9823.43);
echo $usuario01->edad . '<br>' .$usuario01-> precio .'<br>'.$usuario01->nombre;
?>