<?php

include '../../historia.php';

$historia = new Historia();

if(isset($_GET['idHistoria'])){
    $idHistoria = $_GET['idHistoria'];

    $problemas = $historia->getAllProblems($idHistoria);

    $allExamanes = array();
    $allExamanes['examen'] = array();

    if($problemas){

        foreach($problemas as $value){
            $idProblema = $value['idProblema'];

            $examenesProblema = $historia->getAllExamen($idProblema);
            
            if($examenesProblema){
                
                foreach($examenesProblema as $value){
                    $infoExamen = array(
                        'idExamen'   => $value['idExamen'],
                        'idProblema' => $value['idProblema'],
                        'tipoExamen' => $value['tipoExamen'],
                    );
        
                    array_push($allExamanes['examen'], $infoExamen);
                }

            }
            

        }

        if(!empty($allExamanes)){
            echo json_encode($allExamanes);
        }


    }else{
        $mensaje = array(
            'mensaje' => 'no'
        );

        echo json_encode($mensaje);
    }
    
    

    

}
?>