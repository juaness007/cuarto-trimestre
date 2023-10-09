<?php
date_default_timezone_set('America/bogota');
class Autor
{
    private string $nombre;
    private int $numero_obras;
    private int $años_profesion;
    public function __construct($nombre, $numero_obras, $años_profesion)
    {
        $this->nombre = $nombre;
        $this->numero_obras = $numero_obras;
        $this->años_profesion = $años_profesion;
    }
    public function get_datos()
    {
        return 'Datos del autor' . '<br>' . $this->nombre . '<br>' . $this->numero_obras . '<br>' . $this->años_profesion . '<br> <br>';
    }
    public function set_info($nombre, $numero_obras, $años_profesion)
    {
        $this->nombre = $nombre;
        $this->numero_obras = $numero_obras;
        $this->años_profesion = $años_profesion;
    }
    public function fecha()
    {
        return date('y-m-d H:i:s');
    }
}
$Au01 = new Autor('Diego', 19, 24);
echo 'Autor01 <br>' . $Au01->get_datos();
$Au02 = new Autor('Juanes', 18, 31);
echo 'Autor02 <br>' . $Au02->get_datos();
$Au03 = new Autor('Karla', 16, 2);
echo 'Autor03 <br>' . $Au03->get_datos();
$Au04 = new Autor('Alejandra', 17, 32);
echo 'Autor04 <br>' . $Au04->get_datos();
$Au05 = new Autor('Anderson', 20, 21);
echo 'Autor05 <br>' . $Au05->get_datos();
echo '========================================================================================================= <br> <br>';
$Au01->set_info('Luis', 17, 8);
echo 'Autor01 Set ' . $Au01->get_datos();
$Au02->set_info('Carlos', 24, 6);
echo 'Autor02 Set ' . $Au02->get_datos();
$Au03->set_info('Luis', 17, 55);
echo 'Autor03 Set ' . $Au03->get_datos();
$Au04->set_info('Daniela', 40, 8);
echo 'Autor04 Set ' . $Au04->get_datos();
$Au05->set_info('Camilo', 2, 1);
echo 'Autor05 Set ' . $Au05->get_datos();
$FECHA = new Autor('fecha', 00, 00);
echo $FECHA->fecha();