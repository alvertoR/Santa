<?php

include 'usuario.php';

class Propietario extends Usuario{

    private $email;
    private $profesion;
    private $direccion;

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setCc($cc){
        $this->cc = $cc;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setProfesion($profesion){
        $this->profesion = $profesion;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getCc(){
        return $this->cc;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getProfesion(){
        return $this->profesion;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function agregarProp(){
        $query = $this->conexion()->prepare('insert into propietario values(:cc,:profesion,:nombre,:direccion,:telefono,:email)');
        $query->execute([':cc' => $this->cc, ':profesion' => $this->profesion, ':nombre' => $this->nombre, ':direccion' => $this->direccion,
                         ':telefono' => $this->telefono, ':email' => $this->email]);
        
        if($query->rowCount()){
            return true;
        }
    }

    public function mostrarTodos(){
        $query = $this->conexion()->query('Select * from propietario');
        return $query;
    }

    public function mostrarPropietario(){
        $query = $this->conexion()->prepare('Select * from propietario where ccPropietario =:cc');
        $query->execute([':cc' => $this->cc]);

        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}

?>