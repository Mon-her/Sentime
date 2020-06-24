<?php

//selecciono la ficha y nombre del programa de las que no salen en el siguiente trimestre
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



$AsignarFichasQuery = "select numero_ficha, denominacion, persona_documento
from
instructor_ficha i  
inner join 
ficha f  on f.numero_ficha=i.fichanumero_ficha
inner join 
programa_ficha pf on f.numero_ficha=pf.fichanumero_ficha 
inner join 
programa p on  p.id_programa=pf.id_programa;
;";

$competenciasQuery="SELECT id_competencia, denominacion from competencia";
$minResultadoQuery="select id_resultado from resultado "
        . "where id_resultado = ( select min(id_resultado) from resultado)";

$maxResultadoQuery="select id_resultado  from resultado  "
        . " where id_resultado  = ( select max(id_resultado ) "
        . "from resultado )";

$SeleccionarAulaQuery = "select id_aula, descripcion, nombre 
from aula a, descripcion_aula da, sede s
where a.id_descripcion  = da.id_descripcion And a.sedeid_sede  = s.id_sede ;";

$SeleccionarProgramaCompetencia = "Select c.id_competencia, c.denominacion AS 'Denominacion_competencia',"
        . "p.denominacion AS 'Denominacion_programa', duracion, p.id_programa,meses_lectiva, tipo, "
        . "denominacion_nivel"
        . " from competencia c inner join programa_competencia p_c on c.id_competencia=p_c.id_competencia "
        . "inner join programa p on p.id_programa=p_c.id_programa inner join tipo t on "
        . "t.id_tipo=p.id_tipo inner join nivel_formacion n on n.id_nivel=p.id_formacion "
        . "inner join duracion d on d.id_duracion=p.id_duracion";

function bloquePorInstructor($documentoInstructor) {
    return "SELECT * FROM bloque where persona_documento='$documentoInstructor' and anio='2020' and trimestre =1 order by rango_horas;";
}
$competenciasQuery="SELECT id_competencia, denominacion from competencia";
