<?php
include './Arreglos.php';
function filtradoDeIntructorPorPrograma() {
    foreach ($GLOBALS["fichas"] as $ficha){
        
        foreach ($GLOBALS["instructores"] as $instructor){
            if("Especialidad"=="Titulo"){
                seleccionarAlua("Especialidad");
            }
        
    }
    }
    
    
    
}

function seleccionarAlua($Especialidad) {
    
     foreach ($GLOBALS["aula"] as $ficha){
         if($Especialidad=="descripcion"){
             compararBloque();
         }
     }
    
}

function compararBloque($param) {
    
}