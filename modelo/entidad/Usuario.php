<?php

//Esta clase POJO sirve para guardar los datos de un Usuario
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un usuario de la tabla Usuarios de la
//base de datos

class Usuario
{
    public $historia;
    public $nombre;
    public $cedula;
    public $fenacimiento;
    public $sexo;
    public $edocivil;
    public $lugarnaci;
    public $ocupacion;
    public $direccion;
    public $telefono;
    public $correo;
    public $fechaprivisita;
    public $fechaultivisita;
    public $estado;

    
    public function __construct($historia, $nombre, $cedula, $fenacimiento, $sexo, $edocivil, $lugarnaci, $ocupacion, $direccion, telefono, correo, fechaprivisita, fechaultivisita, estado){

        $this->historia = $historia;
        $this->nombre = $nombre;
		$this->cedula = $cedula;
		$this->fenacimiento = $fenacimiento;
        $this->sexo = $sexo;
        $this->edocivil = $edocivil;
        $this->lugarnaci = $lugarnaci;
        $this->ocupacion = $ocupacion;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->fechaprivisita = $fechaprivisita;
        $this->fechaultivisita = $fechaultivisita;
        $this->estado= $estado;
    }
    
    public function getHistoria(){return $this->historia;}

    public function getNombre(){return $this->nombre;}

    public function getCedula(){return $this->cedula;}
    
    public function getFenacimiento(){return $this->fenacimiento;}

    public function getSexo(){return $this->sexo;}

	public function getEdocivil(){return $this->edocivil;}

    public function getLugarnaci(){return $this->lugarnaci;}

    public function getOcupacion(){return $this->ocupacion;}

    public function getDireccion(){return $this->direccion;}

    public function getTelefono(){return $this->telefono;}

    public function getCorreo(){return $this->correo;}

    public function getFechaprivisita(){return $this->fechaprivisita;}
    
    public function getFechaultivisita(){return $this->fechaultivisita;}

    public function getEstado(){
        return $this->estado;
    }

}