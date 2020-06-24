<?php

include './Consulta.php';
include './functionx.php';


$bloque = array("06:00-07:40", "08:00-09:40", "10:00-11:40", "12:00-13:40", "14:20-16:00", "16:20-18:00", "18:15-19:45", "20:00-21:40");

$dia = array("Jueves","Lunes", "Martes", "Miércoles",  "Viernes", "Sábado");


//inicio el proeceso de automatización
seleccionFicha();


/* busca dentro del arreglo las fichas que estánen formación el próximo trimestre y se le envía 
 * a seleccionInstructor una a una
 */

function seleccionFicha() {
    global $fichas;
    foreach ($fichas as $f) {
        seleccionCompetencia($f);
        seleccionResultadoMinMax($f);
        seleccionInstructor($f);
    }
}

/*
 * optiene el número de la ficha y busca instructor por instructor para su asignación
 */

function seleccionInstructor($ficha) {
    global $instructores;
    foreach ($instructores as $instruc) {
        // validación de la denominación de la ficha con el título del instructor
        //obtener la información de los tres querys para  validar qué profesor es apto para la ficha y asigmar el resultado de aprendizaje correspondiente
        //se obtiene la $ficha
        /*
         * select numero_ficha, p.id_programa
          from
          ficha
          inner join
          programa_ficha pf on numero_ficha=fichanumero_ficha
          inner join
          programa p on p.id_programa=pf.id_programa
          where numero_ficha=$ficha
         */
        // gracias al query se obtiene el programa y se hace la consulta
        /*
         * SELECT * FROM horarios_sena.programa_competencia
          where id_programa=$programa
          ;
         */
        //obtengo los id de la competencias 
        /*
         * select documento, r.id_resultado, r.id_competencia
          from
          person
          inner join
          persona_resultado pr on documento_persona=documento
          inner join
          resultado r on r.id_resultado=pr.id_resultado
          inner join
          competencia c on c.id_competencia=r.id_competencia
          where r.id_competencia=$id_competencia
         */
        // optengo los id de resultados y a su vez el instructor a asignar =>$instruc


        seleccionAula($instruc, $ficha);
    }
}

//selecciono el aula para la formación 
function seleccionAula($instruc, $ficha) {
    global $sedeAula;

    foreach ($sedeAula as $aula) {


        //echo"La ficha " . $ficha["numero_ficha"]. "con el instructor" .$instruc["documento"]. "En el aula" .$aula["id_aula"]."<br>";
        // mirar la descripción del aula y de acuerdo al programa asignar
        /*
         * saco el $aula
         */
        seleccionDia($instruc, $ficha, $aula);
    }
}

//select * from ficha inner join programa on ficha.estado=programa.estado
//selecciona el día  para asignar en el bloque
function seleccionDia($instruc, $ficha, $aula) {
    global $dia;
    foreach ($dia as $key => $d) {
        //echo " El día " . $d . " El trimestre ". trimestreProximo()." En el aula " . $aula["id_aula"] . " estará la ficha "  . $ficha["numero_ficha"] . " con el instructor " . $instruc["documento"] .  "<br>";
        /*
         * se compara con la base de datos el día y el aula para saber si se asigna
         */
        //if(!){
        seleccionBloque($instruc, $ficha, $aula, $d);
        //}
    }
}

$fichasQuery = "select numero_ficha, denominacion
from ficha inner join programa_ficha fp on numero_ficha=fichanumero_ficha
inner join programa p on p.id_programa=fp.id_programa
where ficha.salida > \"" . date("yy") . "-" . date("m") . "-30\" order by denominacion asc;";


//selecciona los datos de los instructores y si título 
$instructoresQuery = "select documento, nombre, apellido, rol, certificacion from titulo t
inner join 
persona_titulo pt on t.id_titulo=pt.id_titulo
inner join 
persona on persona_documento=documento
inner join 
rol on rol_documento=id_rol
where rol='instructor';";


//selecciona el aula y su descripción
$sedeAulaQuery = "SELECT id_sede, nombre, id_aula, descripcion from sede INNER JOIN aula a on id_sede=sedeid_sede INNER JOIN descripcion_aula da on a.id_descripcion=da.id_descripcion";

//creo el query de asignación y guardo en la base de datos



function seleccionBloque($instruc, $ficha, $aula, $d) {
    global $bloque;
    $salto = 0;


    foreach ($bloque as $blo => $b) {


        /* */
        if (!empty($instruc["documento"])) {
            if ($salto < 2 && $d != "Sábado") {
                @include '../../utili/Conexion.php';
                $sql2 = "select * from bloque;";
                $r = $mysqli->query($sql2);
                if ($r->num_rows > 0) {
                    while ($row = $r->fetch_assoc()) {
                        if (($row['dia'] == $d &&
                                $row['trimestre'] == trimestreProximo() &&
                                $row['rango_horas'] == $b &&
                                $row['fichanumero_ficha'] == $ficha["numero_ficha"] &&
                                $row['aulaid_aula'] == $aula["id_aula"]
                                )) {

                           echo  "1('$d', '" . trimestreProximo() . "', '" . $b . "', '" . $instruc["documento"] . "', '" . $ficha["numero_ficha"] . "', '" . $aula["id_aula"] . "', " . date("yy") . ")";
                           $sql = "INSERT INTO `horarios_sena`.`bloque` (`dia`, `trimestre`, `rango_horas`, `persona_documento`, `fichanumero_ficha`, `aulaid_aula`, `anio`) VALUES ('$d', '" . trimestreProximo() . "', '" . $b . "', '" . $instruc["documento"] . "', '" . $ficha["numero_ficha"] . "', '" . $aula["id_aula"] . "', " . date("yy") . ")";
                            $mysqli->query($sql);
                        }else{
                            echo "<br>".$row['dia']." ".
                                $row['trimestre'] ." ".
                                $row['rango_horas'] ." ".
                                $row['fichanumero_ficha'] ." ".
                                $row['aulaid_aula'] ."<br> ";
                        }
                    }
                } else {
                     echo  "2('$d', '" . trimestreProximo() . "', '" . $b . "', '" . $instruc["documento"] . "', '" . $ficha["numero_ficha"] . "', '" . $aula["id_aula"] . "', " . date("yy") . ")";
                     $sql = "INSERT INTO `horarios_sena`.`bloque` (`dia`, `trimestre`, `rango_horas`, `persona_documento`, `fichanumero_ficha`, `aulaid_aula`, `anio`) VALUES ('$d', '" . trimestreProximo() . "', '" . $b . "', '" . $instruc["documento"] . "', '" . $ficha["numero_ficha"] . "', '" . $aula["id_aula"] . "', " . date("yy") . ")";
                    $mysqli->query($sql);
                }


                $mysqli->close();
                // echo "El día " . $d . " y el trimestre " . trimestreProximo() . " en el bloque " . $b . " la ficha " . $ficha["numero_ficha"] . " con el instructor " . $instruc["documento"] . " En el aula " . $aula["id_aula"] . "<br>";
            }
            if ($salto < 7) {
                $salto++;
            } else {
                $salto = 0;
            }
        }
    }
}

function seleccionPrograma($id_programa) {
    global $programas;

    foreach ($programas as $pro => $p) {
        
    }
}

function seleccionCompetencia($ficha) {
    global $competencias;

    foreach ($competencias as $com) {

        // echo "La competencia " . $com["id_competencia"] ." la ficha que estoy  usan en este momento es :".$ficha["numero_ficha"]. "<br>";
        //echo "La competencia " . $com["id_competencia"] ." la ficha que estoy  usan en este moemtno es :<br>";
    }
}

function seleccionResultadoMinMax($ficha) {
    global $minResultado;
    global $maxResultado;

    foreach ($minResultado as $min) {
        foreach ($maxResultado as $max) {
            $r = rand($min["id_resultado"], $max["id_resultado"]);
            //echo $r;
            // echo "El resultado " . $r ." está asignado a la ficha :".$ficha["numero_ficha"]. "<br>"; 
        }
    }
}

////
    
    
    
/*
 * mirar el programa de formación
 * qué materias por programa se ven en cada trimestre
 *          ya tenemos el programa, consultamos el arreglo donde está la info
 *          de qué materia se ve por trimestre
 * 
 */
/*
 * los de la noche SÍ ven todas las transversales, pero tienen que venir los sábados o virtual
 */






