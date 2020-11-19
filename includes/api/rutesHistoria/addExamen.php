<?php

    $index = $_POST['index'];

    $ruta = "../../../uploads/";

    if($index){

        $archivos = array();

        //Ordenamiento de los datos
        for($i=0;$i<$index;$i++){

            $cantidadArchivos = count($_FILES['file'.$i]['name']);
          
            for($j=0; $j<$cantidadArchivos; $j++){
                
                $keys = array_keys($_FILES['file'.$i]);

                foreach($keys as $key){
                    $archivos[$i][$j][$key] = $_FILES['file'.$i][$key][$j];
                }

            }
            
        }


        $cantidadArchivos = count($archivos)."\n";

        $validador = 0;
        
        for($i=0; $i<$cantidadArchivos; $i++){
            
            $elementos = count($archivos[$i]);

            for($j=0;$j<$elementos;$j++){
                
                $contenidoArchivo = $archivos[$i][$j]['tmp_name'];

                $nombreArchivo = $ruta. basename($archivos[$i][$j]['name']);
                
                if(move_uploaded_file($contenidoArchivo, $nombreArchivo)){
                    $validador = 1;
                }else{
                    $validador = 0;
                }

            }
        
        }
        
        
        echo $validador;
    }


;
?>