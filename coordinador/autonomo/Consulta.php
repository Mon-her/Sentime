<?php
@session_start();
// variables de acceso 
$dataBD = null;


@include '../../ScriptDB/Querys.php';
@include './Arreglos.php';

//envío los querys y el nombre del arreglo para rellenar los arreglos con la informaciónde la BD
x($fichasQuery,"fichas");
x($instructoresQuery,"instructores");
x($sedeAulaQuery,"sedeAula");
x(bloquePorInstructor($_SESSION['documento']),"bloquePorInstructor");
x($competenciasQuery, "competencias");
x($minResultadoQuery, "minResultado");
x($maxResultadoQuery, "maxResultado");

// trae los datos de la base de datos y lo envía a data y luego a creaArreglo
function x($sql,$arreglo){
    @include '../../utili/Conexion.php';
 
    creaArreglo(data($mysqli->query($sql)),$arreglo);
    $mysqli->close();
}
/*
 * data toma los datos de la base de datos y verifica que la consulta tenga po lo menos un registro
 * e inicializa la bariable global dataBD con los datos de la BD para tenerlos disponibles en creaArreglo
 */
function data($result) {
    if ($result->num_rows > 0) {
        $GLOBALS["dataBD"] = $result;
        return true;
    } else {
        return false;
    }
}
// se toma el parámetro true o flase de data para así rellenar los arreglos con los datos 
function creaArreglo($param,$arreglo) {
    
    if ($param) {
        while ($row = $GLOBALS["dataBD"]->fetch_assoc()) {
            array_push($GLOBALS[$arreglo], $row);
        }
    }
}


?>
