<?php

include "usuario.php";

class MedicoVeterinario extends Usuario{
    private $contrasena;
    private $RegistroMedico;

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setCc($cc){
        $this->cc = $cc;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setcontrasena($contrasena){
        $this->contrasena = $contrasena;
    }

    public function setRegistroMedico($registro){
        $this->RegistroMedico = $registro;
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

    public function getContrasena(){
        return $this->contrasena;
    }

    public function getRegistroMedico(){
        return $this->RegistroMedico;
    }

    public function loginUsuario($cc, $password){
        $query = $this->conexion()->prepare('select ccVeterinario,password,tipoUsuario from veterinario where ccVeterinario =:cc');
        $query->execute([':cc' => $cc]);

        $datos = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($datos as $dato){
            $hashPassword = $dato['password'];
        }

        $validarContrasena = $this->verificarPassword($password,$hashPassword);

        if($validarContrasena){
            return $datos;
        }

        return false;

    }

    public function verificarPassword($password, $hash){
        if(password_verify($password,$hash)){
            return true;
        }

        return false;
    }

    public function nuevoVeterinario(){
        
        $hashPassword = password_hash($this->contrasena, PASSWORD_DEFAULT,['cost' => 10]);
        $rolUsuario = 2;

        $query = $this->conexion()->prepare('insert into veterinario(ccVeterinario,tipoUsuario,telefono,nombre,password,registroMedico)
                                             values(:cc,:tipo,:telefono,:nombre,:password,:registroMedico)');
        
        
        $query->execute([':cc' => $this->cc, 'tipo' => $rolUsuario,':telefono' => $this->telefono ,':nombre' => $this->nombre,
                         ':password' => $hashPassword, ':registroMedico' => $this->RegistroMedico]);
                
        if($query->rowCount()){
            return true;
        }

        return false;
                         
    }

    public function mostrarVeterinarios(){
        $query = $this->conexion()->query('Select * from veterinario');

        if($query->rowCount()){
            return $query;
        }else{
            return false;
        }
    }

    public function mostrarVeterinario(){
        $query = $this->conexion()->prepare('Select * from veterinario where ccVeterinario=:cc');
        $query->execute([':cc' => $this->cc]);

        if($query->rowCount()){
            return $query;
        }else{
            return false;
        }
    }

}

?>