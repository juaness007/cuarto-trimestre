<?php
date_default_timezone_set('America/bogota');
class Usuario{
    private string $nombre;
    private int $documento;
    private int $telefono;
    public function __construct($nombre,$documento,$telefono) {
        $this->nombre=$nombre;
        $this->documento=$documento;
        $this->telefono=$telefono;
    }

    public function get_datos(){
        return $this->nombre .'<br>' .$this->documento .'<br>' .$this->telefono;
    }

    public function set_datos($nombre,$documento,$telefono){
        $this->nombre=$nombre;
        $this->documento=$documento;
        $this->telefono=$telefono;
    }
    public function fecha()
    {
        return date('y-m-d H:i:s');
    }

}
$usuario01=new Usuario('Juanes', 19, 3133468951);
echo 'usuario01 <br>'.$usuario01->get_datos() .'<br>';
$usuario02=new Usuario('Laura', 25, 30068989) ;
echo 'usuario02 <br>'. $usuario02->get_datos().'<br>' ;
$usuario03=new Usuario('David', 20, 3012695478);
echo 'usuario03 <br>'. $usuario03->get_datos() .'<br>';
$usuario04=new Usuario('Camilo', 18, 3208054712);
echo'usuario04 <br>'.$usuario04->get_datos() .'<br>';
$usuario05=new Usuario('Daniela', 17, 32015698741);
echo'usuario05 <br>'. $usuario05->get_datos() .'<br>';
echo 'cambio de datos-cambio de datos  <br> <br>';
$usuario01->set_datos('Jorge', 29, 3133658741) . '<br>';
echo 'usuario01 cambiado <br>' . $usuario01->get_datos() . '<br>';
$usuario02->set_datos('jessica', 25, 3005448531) ;
echo 'usuario02 cambiado <br>' . $usuario02->get_datos() . '<br>';
$usuario03->set_datos('Julian', 15, 3265988741) ;
echo 'usuario03 cambiado <br>' . $usuario03->get_datos() . '<br>';
$usuario04->set_datos('Steven', 23, 3334445933) ;
echo 'usuario04 cambiado <br>' . $usuario04->get_datos() . '<br>';
$usuario05->set_datos('Alejandra', 18, 3506928751) ;
echo 'usuario05 cambiado <br>' . $usuario05->get_datos() . '<br>';
$FECHA = new Usuario('fecha', 00, 00);
echo $FECHA->fecha();


?>