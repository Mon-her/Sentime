<?php
include_once '../utili/sesion.php';
require_once '../ScriptDB/Querys.php';
require_once '../utili/Conexion.php';
/*
 * $cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
 */
/*
$rango1 = '06:00-07:40';
$rango2 = '08:00-09:40';
$rango3 = '10:00-11:40';
$rango4 = '12:00-13:40';
$rango5 = '14:20-16:00';
$rango6 = '16:20-18:00';
$rango7 = '18:15-19:45';
$rango8 = '20:00-21:40';*/

$bloque=array(
    "06:00-07:40Lunes"=>"",
    "06:00-07:40Martes"=>"",
    "06:00-07:40Miércoles"=>"",
    "06:00-07:40Jueves"=>"",
    "06:00-07:40Viernes"=>"",
    "06:00-07:40Sábado"=>"",
    "08:00-09:40Lunes"=>"",
    "08:00-09:40Martes"=>"",
    "08:00-09:40Miércoles"=>"",
    "08:00-09:40Jueves"=>"",
    "08:00-09:40Viernes"=>"",
    "08:00-09:40Sábado"=>"",
    "10:00-11:40Lunes"=>"",
    "10:00-11:40Martes"=>"",
    "10:00-11:40Miércoles"=>"",
    "10:00-11:40Jueves"=>"",
    "10:00-11:40Viernes"=>"",
    "10:00-11:40Sábado"=>"",
    "12:00-13:40Lunes"=>"",
    "12:00-13:40Martes"=>"",
    "12:00-13:40Miércoles"=>"",
    "12:00-13:40Jueves"=>"",
    "12:00-13:40Viernes"=>"",
    "12:00-13:40Sábado"=>"",
    "14:20-16:00Lunes"=>"",
    "14:20-16:00Martes"=>"",
    "14:20-16:00Miércoles"=>"",
    "14:20-16:00Jueves"=>"",
    "14:20-16:00Viernes"=>"",
    "14:20-16:00Sábado"=>"",
     "16:20-18:00Lunes"=>"",
    "16:20-18:00Martes"=>"",
    "16:20-18:00Miércoles"=>"",
    "16:20-18:00Jueves"=>"",
    "16:20-18:00Viernes"=>"",
    "16:20-18:00Sábado"=>"",
     "18:15-19:45Lunes"=>"",
    "18:15-19:45Martes"=>"",
    "18:15-19:45Miércoles"=>"",
    "18:15-19:45Jueves"=>"",
    "18:15-19:45Viernes"=>"",
    "18:15-19:45Sábado"=>"",
     "20:00-21:40Lunes"=>"",
    "20:00-21:40Martes"=>"",
    "20:00-21:40Miércoles"=>"",
    "20:00-21:40Jueves"=>"",
    "20:00-21:40Viernes"=>"",
    "20:00-21:40Sábado"=>"",
    
    
    );



$query = $mysqli->query(bloquePorInstructor($_SESSION['documento']));
$i = 0;
$stop = 6;
foreach ($query as $key) {

    for ($r = 0; $r < 47; $r++) {
        $data=$key['rango_horas'].$key['dia'];
        
             $bloque[$data]='<p title="Especialidad">' . $key['aulaid_aula'] . '-' . $key['fichanumero_ficha'] . '</p>';
    }
}



echo "Trimestre (" . $key['trimestre'] . ") del año (" . $key['anio'] . ")";
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Bloque</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sábado</th>
        </tr>
    </thead>
    <tbody>



        <tr>
           <td>06:00 a 07:40</td>
           <td><?php echo $bloque["06:00-07:40Lunes"] ?></td>
           <td><?php echo $bloque["06:00-07:40Martes"] ?></td>
           <td><?php echo $bloque["06:00-07:40Miércoles"] ?></td>
           <td><?php echo $bloque["06:00-07:40Jueves"] ?></td>
           <td><?php echo $bloque["06:00-07:40Viernes"] ?></td>
           <td><?php echo $bloque["06:00-07:40Sábado"] ?></td>

        </tr>
        <tr>
            <td>08:00 a 09:40</td>
           <td><?php echo $bloque["08:00-09:40Lunes"] ?></td>
           <td><?php echo $bloque["08:00-09:40Martes"] ?></td>
           <td><?php echo $bloque["08:00-09:40Miércoles"] ?></td>
           <td><?php echo $bloque["08:00-09:40Jueves"] ?></td>
           <td><?php echo $bloque["08:00-09:40Viernes"] ?></td>
           <td><?php echo $bloque["08:00-09:40Sábado"] ?></td>
        </tr>
        <tr>
            <td>10:00 a 11:40</td>
            <td><?php echo $bloque["10:00-11:40Lunes"] ?></td>
           <td><?php echo $bloque["10:00-11:40Martes"] ?></td>
           <td><?php echo $bloque["10:00-11:40Miércoles"] ?></td>
           <td><?php echo $bloque["10:00-11:40Jueves"] ?></td>
           <td><?php echo $bloque["10:00-11:40Viernes"] ?></td>
           <td><?php echo $bloque["10:00-11:40Sábado"] ?></td>
        </tr>
        <tr>
            <td>12:00 a 13:40</td>
            <td><?php echo $bloque["12:00-13:40Lunes"] ?></td>
           <td><?php echo $bloque["12:00-13:40Martes"] ?></td>
           <td><?php echo $bloque["12:00-13:40Miércoles"] ?></td>
           <td><?php echo $bloque["12:00-13:40Jueves"] ?></td>
           <td><?php echo $bloque["12:00-13:40Viernes"] ?></td>
           <td><?php echo $bloque["12:00-13:40Sábado"] ?></td>
        </tr>
        <tr>
            <td>14:20 a 16:00</td>
            <td><?php echo $bloque["14:20-16:00Lunes"] ?></td>
           <td><?php echo $bloque["14:20-16:00Martes"] ?></td>
           <td><?php echo $bloque["14:20-16:00Miércoles"] ?></td>
           <td><?php echo $bloque["14:20-16:00Jueves"] ?></td>
           <td><?php echo $bloque["14:20-16:00Viernes"] ?></td>
           <td><?php echo $bloque["14:20-16:00Sábado"] ?></td>
        </tr>
        <tr>
            <td>16:20 a 18:00</td>
            <td><?php echo $bloque["16:20-18:00Lunes"] ?></td>
           <td><?php echo $bloque["16:20-18:00Martes"] ?></td>
           <td><?php echo $bloque["16:20-18:00Miércoles"] ?></td>
           <td><?php echo $bloque["16:20-18:00Jueves"] ?></td>
           <td><?php echo $bloque["16:20-18:00Viernes"] ?></td>
           <td><?php echo $bloque["16:20-18:00Sábado"] ?></td>
        </tr>
        <tr>
            <td>18:15 a 19:45</td>
              <td><?php echo $bloque["18:15-19:45Lunes"] ?></td>
           <td><?php echo $bloque["18:15-19:45Martes"] ?></td>
           <td><?php echo $bloque["18:15-19:45Miércoles"] ?></td>
           <td><?php echo $bloque["18:15-19:45Jueves"] ?></td>
           <td><?php echo $bloque["18:15-19:45Viernes"] ?></td>
           <td><?php echo $bloque["18:15-19:45Sábado"] ?></td>            

        </tr>
        <tr>
            <td>20:00 a 21:40</td>
            <td><?php echo $bloque["20:00-21:40Lunes"] ?></td>
           <td><?php echo $bloque["20:00-21:40Martes"] ?></td>
           <td><?php echo $bloque["20:00-21:40Miércoles"] ?></td>
           <td><?php echo $bloque["20:00-21:40Jueves"] ?></td>
           <td><?php echo $bloque["20:00-21:40Viernes"] ?></td>
           <td><?php echo $bloque["20:00-21:40Sábado"] ?></td>
        </tr>

    </tbody>
</table>

<?php
?>


