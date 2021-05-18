<?php

class Clinica{
    public $idclinica;
    public $descripcion;
    public $NIT;
    public $direccion;
    public $telefono;	
    public $email;

    public function __construct($idclinica, $descripcion, $NIT, $direccion, $telefono, $email;){
        $this->idclinica = $idclinica;
        $this->descripcion = $descripcion;
        $this->NIT = $NIT;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;

    }
}