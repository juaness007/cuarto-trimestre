<?php

require ('clase2.php');

use Sena as S;

$persona1=new S\Persona('Rodrigo','jairo@gmial.com','Buenos dias....');
echo 'Imprimiendo datos de la clase Persona en el espacio de nombres Sena','<br>';
echo 'Nombres: ' . $persona1->nombre.'<br>';
echo 'Saludo:'.S\Persona::$saludo.'<br>';
