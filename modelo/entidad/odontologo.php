<?php

class Odontologo{
    public $idodontologo;
    public $nombre;
    public $direccion;
    public $telefono;
    public $cedula;
    public $rif;
    public $especialidad;
    public $matricula;
    public $estudios;

    public function __construct($idodontologo,$nombre,$direccion,$telefono,$cedula,$rif,$especialidad,$matricula,$estudios){
        $this->idodontologo = $idodontologo;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->cedula = $cedula;
        $this->rif = $rif;
        $this->especialidad = $especialidad;
        $this->matricula = $matricula;
        $this->estudios = $estudios;
    }

    public function getIdodontologo(){ return $this->idodontologo;}
    public function getNombre(){ return $this->nombre;}
    public function getDireccion(){ return $this->direccion;}
    public function getTelefono(){ return $this->telefono;}
    public function getCedula(){ return $this->cedula;}
    public function getRif(){ return $this->rif;}
    public function getEspecialidad(){ return $this->especialidad;}
    public function getMatricula(){ return $this->matricula;}
    public function getEstudios(){ return $this->estudios;}
}