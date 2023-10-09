<?php
require_once('Automovil.php');
$mi_automovil= new Automovil('Chevrolet','2014',30000000,'SEDAN','Azul');

// Subclase que onvoca metodos de la superclase 
echo 'Marca automovil: ' . $mi_automovil->get_marca().'<br>';
echo 'Modelo automovil: ' . $mi_automovil->get_modelo().'<br>';
echo 'Precio automovil: ' . $mi_automovil->get_precio().'<br>';
//Subclase invocando metodos de la subclase
echo 'Tipo' .$mi_automovil->get_tipo() .'<br>';
echo 'Color' .$mi_automovil->get_color() .'<br>';
$mi_automovil->saludar();
require_once('Camion.php');
$mi_camion= new Camion ('Ford trucks','1990',100000000,6,35);
//Subclase invocando metodos de la Superclase
echo 'Marca camion: ' .$mi_camion->get_marca().'<br>';
echo 'Modelo camion: ' .$mi_camion->get_modelo().'<br>';
echo 'Precio camion: ' .$mi_camion->get_precio().'<br>';
echo 'Tipo' .$mi_camion->get_numero_ejes() .'<br>';
echo 'Color' .$mi_camion->get_capacidad_carga() .'<br>';
$mi_camion->saludar();
