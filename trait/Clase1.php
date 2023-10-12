<?php

namespace Abc;

class Persona{
    public string $nombre;
    public string $correo;
    public static string $saludo;

    public function __construct(
        string $nombre,
        string $correo,
        string $saludo)
        {
            $this->nombre= $nombre;
            $this->correo= $correo;
            $this->saludo= $saludo;
        }
        public function obternerDatos(){
            print_r($this->nombre, $this->correo, self::$saludo);
        }


}
