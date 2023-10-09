<?php

class Computador {
    private string $fabricante;
    private float  $cap_memoria;
    private string $tipo_memoria;
    private string $tipo_almacenamiento;
    private float $cap_almacenamiento;
    private string $sistema_operativo;
    private string $suite_oficina;
    private string $procesador;
    private int $puertos_usb;
 public function __construct($fabricante,$cap_memoria,$tipo_memoria,$tipo_almacenamiento,$cap_almacenamiento,$sistema_operativo,$suite_oficina,$procesador,$puertos_usb) {
        $this->fabricante = $fabricante;
        $this->cap_memoria = $cap_memoria;
        $this->tipo_memoria = $tipo_memoria;
        $this->tipo_almacenamiento = $tipo_almacenamiento;
        $this->cap_almacenamiento = $cap_almacenamiento;
        $this->sistema_operativo = $sistema_operativo;
        $this->suite_oficina = $suite_oficina;
        $this->procesador = $procesador;
        $this->puertos_usb = $puertos_usb; 
    }
    public function get_fabricante(){
        return $this->fabricante;
    }
    public function set_fabricante($fabricante){
        $this->fabricante=$fabricante;
    }
    public function get_cap_memoria(){
        return $this->cap_memoria;
    }
    public function set_cap_memoria($cap_memoria){
        $this->cap_memoria=$cap_memoria;
    }
    public function get_tipo_memoria(){
        return $this->tipo_memoria;
    }
    public function set_tipo_memoria($tipo_memoria){
        $this->tipo_memoria=$tipo_memoria;
    }
    public function get_tipo_almac(){
        return $this->tipo_almacenamiento;
    }
    public function set_tipo_almac($tipo_almacenamiento){
        $this->tipo_almacenamiento=$tipo_almacenamiento;
    }
    public function get_cap_almac(){
        return $this->cap_almacenamiento;
    }
    public function set_cap_almac($cap_almacenamiento){
        $this->cap_almacenamiento=$cap_almacenamiento;
    }
    public function get_s_operativo(){
        return $this->sistema_operativo;
    }
    public function set_s_operativo($sistema_operativo){
        $this->sistema_operativo=$sistema_operativo;
    }
    public function get_s_oficina(){
        return $this->suite_oficina;
    }
    public function set_s_oficina($suite_oficina){
        $this->suite_oficina=$suite_oficina;
    }
    public function get_procesador(){
        return $this->procesador;
    }
    public function set_procesador($procesador){
        $this->procesador=$procesador;
    }
    public function get_p_usb(){
        return $this->puertos_usb;
    }
    public function set_p_usb($puertos_usb){
        $this->puertos_usb=$puertos_usb;
    }
}

