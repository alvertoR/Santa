<?php

include "database.php";

class Mascota extends Database{

    private $ccPropietario;
    private $sexo;
    private $nombre;
    private $raza;
    private $especie;
    private $color;
    private $nacimiento;

    public function setCc($cc){
        $this->ccPropietario = $cc;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setRaza($raza){
        $this->raza = $raza;
    }

    public function setEspecie($especie){
        $this->especie = $especie;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setNacimiento($nacimiento){
        $this->nacimiento = $nacimiento;
    }

    public function getCc(){
        return $this->ccPropietario;
    }

    public function getSexo(){
        return $this->sexo;
    }
    
    public function getNombre(){
        return $this->nombre;
    }

    public function getRaza(){
        return $this->raza;
    }

    public function getEspecie(){
        return $this->especie;
    }

    public function getColor(){
        return $this->color;
    }

    public function getNacimiento(){
        return $this->nacimiento;
    }

    public function agregarMascota(){
        $query = $this->conexion()->prepare('insert into mascota(ccPropietario,sexo,nombre,raza,especie,color,nacimiento)
                                             values(:cc,:sexo,:nombre,:raza,:especie,:color,:nacimiento)');
        $query->execute([':cc' => $this->ccPropietario, ':sexo' => $this->sexo, ':nombre' => $this->nombre, ':raza' => $this->raza,
                         ':especie' => $this->especie, ':color' => $this->color, ':nacimiento' => $this->nacimiento]);

        if($query->rowCount()){
            return true;
        }

        return false;
    }

    public function mostrarMascotas($cc){
        $query = $this->conexion()->prepare('Select*from mascota where ccPropietario =:cc');
        $query->execute([':cc' => $cc]);

        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function mostrarMascota($idMascota){
        $query = $this->conexion()->prepare('Select*from mascota where idMascota =:id');
        $query->execute([':id' => $idMascota]);

        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function mostrarMascotaPropietario(){
        $query = $this->conexion()->prepare('Select*from mascota where ccPropietario =:cc and nombre =:nombre');
        $query->execute([':cc' => $this->ccPropietario, ':nombre' => $this->nombre]);

        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function mostrarMascotaId($idMascota){
        $query = $this->conexion()->prepare('select sexo from mascota  where idMascota =:id');
        $query->execute([':id' => $idMascota]);

        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }
  
    


}

?>