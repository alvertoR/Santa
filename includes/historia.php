<?php

include "usuario.php";

class Historia extends Usuario{
  
    public function agregarHistoria($idMascota, $ccVeterinario, $anamnesis, $sigClinicos, $tratamientoPrevio, $alimentacion, $habitat, $estadoRepodructivo, $estadoSanitario, $viajes, $observaviones, $actitud, $tratamientoExam, $frRespiratoria,
    $frCardiaca, $pulso, $temperatura, $condCorporal, $caracPulmonar, $mMucusa, $tllc, $peso, $observacionExamen, $planTerapeutico, $diagnostico, $tratamiento, $pronostico, $descripcionPronostico, $proximoControl){
        
        $query = $this->conexion()->prepare('insert into historiaclinica(IdMascota, ccVeterinario, anamnesis, signosclinicos, tratamientoprevio, alimentacion, habitat, estadoReproductivo, estadoSanitario, viajes, observaciones, actitud, tratamientoExam, frRespiratoria,
        frCardiaca, pulso, temperatura, condCorporal, caracPulmonar, mMucusa, tllc, peso, observacionesExamen,planTerapeutico, diagnostico, tratamiento, pronostico, descripcionPronostico, proximoControl) values(:IdMascota, :ccVeterinario, :anamnesis, :signosclinicos, :tratamientoprevio, :alimentacion, :habitat, :estadoReproductivo, :estadoSanitario, :viajes, :observaciones, :actitud, :tratamientoExam, :frRespiratoria,
        :frCardiaca, :pulso, :temperatura, :condCorporal, :caracPulmonar, :mMucusa, :tllc, :peso, :observacionExamen,:planTerapeutico, :diagnostico, :tratamiento, :pronostico, :descripcionPronostico, :proximoControl)');


        $query->execute([':IdMascota' => $idMascota, ':ccVeterinario' => $ccVeterinario, ':anamnesis' => $anamnesis, ':signosclinicos' => $sigClinicos, ':tratamientoprevio' => $tratamientoPrevio, ':alimentacion' => $alimentacion, ':habitat' => $habitat, ':estadoReproductivo' => $estadoRepodructivo, ':estadoSanitario' => $estadoSanitario, ':viajes' => $viajes, ':observaciones' => $observaviones, ':actitud' => $actitud, ':tratamientoExam' => $tratamientoExam, ':frRespiratoria' => $frRespiratoria,
        ':frCardiaca' => $frCardiaca, ':pulso' => $pulso, ':temperatura' => $temperatura, ':condCorporal' => $condCorporal, ':caracPulmonar' => $caracPulmonar, ':mMucusa' => $mMucusa, ':tllc' => $tllc, ':peso' => $peso, ':observacionExamen' => $observacionExamen,':planTerapeutico' => $planTerapeutico, ':diagnostico' => $diagnostico, ':tratamiento' => $tratamiento, ':pronostico' => $pronostico, ':descripcionPronostico' => $descripcionPronostico, ':proximoControl' => $proximoControl]);

        if($query->rowCount()){
            $id = $this->getLastId($idMascota);
            return $id;
        }else{
            return false;
        }
    }

    public function getLastId($idMascota){
        $query = $this->conexion()->prepare('select idHistoria from historiaclinica where IdMascota =:id order by fechaInsert asc');
        $query->execute([':id' => $idMascota]);
        $ids = $query->fetchAll(PDO::FETCH_ASSOC);
        $lastId = 0;
        foreach($ids as $id){
            $lastId = $id['idHistoria'];
        }

        return $lastId;
    }

    public function agregarAnormalidad($idHistoria, $tipoAnormalidad, $descripcion){
        $query = $this->conexion()->prepare('insert into anormalidad(idHistoria, descripcion, tipoAnormalidad) values(:id,:descripcion,:tipo)');
        $query->execute([':id' => $idHistoria, ':descripcion' => $descripcion, ':tipo' => $tipoAnormalidad]);
    }

    public function agregarProblema($idHistoria, $problema, $diagnostico, $autorizo){
        $query = $this->conexion()->prepare('insert into problema(idHistoria, problema, diagnostico, autorizo) values(:id,:problema,:diagnostico,:autorizo)');
        $query->execute([':id' => $idHistoria,':problema' => $problema, ':diagnostico' => $diagnostico, ':autorizo' => $autorizo]);
        
        if($query->rowCount()){
            $id = $this->getLastIdProblema($idHistoria);
            return $id;
        }
    }

    public function agregarExamen($idProblema, $tipoExamen, $autorizo){
        $query = $this->conexion()->prepare('insert into examen(idProblema, tipoExamen, autorizo) values(:id,:tipo,:autorizo)');
        $query->execute([':id' => $idProblema, ':tipo' => $tipoExamen, ':autorizo' => $autorizo]);

        if($query->rowCount()){
            return true;
        }
    }

    public function getLastIdProblema($idHistoria){
        $query = $this->conexion()->prepare('select idProblema from problema where idHistoria =:id order by fechaInsert asc');
        $query->execute([':id' => $idHistoria]);
        $ids = $query->fetchAll(PDO::FETCH_ASSOC);
        $lastId = 0;
        foreach($ids as $id){
            $lastId = $id['idProblema'];
        }

        return $lastId;
    }

    public function mostrarHistorias($idMascota){
        $query = $this->conexion()->prepare('Select*from historiaclinica where IdMascota =:id');
        $query->execute(['id' => $idMascota]);

        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function mostrarHistoria($idHistoria){
        $query = $this->conexion()->prepare('select * from historiaclinica where idHistoria =:id');
        $query->execute([':id' => $idHistoria]);
        
        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function mostrarAnormalidades($idHistoria){
        $query = $this->conexion()->prepare('select * from anormalidad where idHistoria =:id');
        $query->execute([':id' => $idHistoria]);
        
        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function mostrarMascota($idMascota){
        $query = $this->conexion()->prepare('select * from  mascota where idMascota =:id');
        $query->execute([':id' => $idMascota]);

        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function mostrarMedico($idMedico){
        $query = $this->conexion()->prepare('select * from veterinario where ccVeterinario =:cc');
        $query->execute([':cc' => $idMedico]);

        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function mostrarProblemas($idHistoria){
        $query = $this->conexion()->prepare('select * from problema where idHistoria =:id');
        $query->execute([':id' => $idHistoria]);

        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function mostrarExamenes($idProblema){
        $query = $this->conexion()->prepare('select tipoExamen from examen where idProblema =:id');
        $query->execute([':id' => $idProblema]);

        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function mostrarPropietario($ccPropietario){
        $query = $this->conexion()->prepare('select nombre,ccPropietario,email,telefono from propietario where ccPropietario =:cc');
        $query->execute([':cc' => $ccPropietario]);

        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function getAllProblems($idHistoria){
        $query = $this->conexion()->prepare('select idProblema from problema where idHistoria =:id  and autorizo =:autorizo');
        $query->execute([':id' => $idHistoria, ':autorizo' => 'Sí']);
        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function getAllExamen($idProblema){
        $query = $this->conexion()->prepare('select idExamen,idProblema,tipoExamen from examen where idProblema =:id');
        $query->execute([':id' => $idProblema]);
        if($query->rowCount()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }

}

?>