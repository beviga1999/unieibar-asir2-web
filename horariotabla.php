<?php

$dia = date("N") - 1;

$hora = date("G") - 8;


$horario = array ( 
    array("Base de datos", "EIE", "Sistemas", "Sistemas", "Web", "Web"), //Lunes
    array("Web", "Seguridad", "Redes", "Redes", "Base de datos", "Base de datos"), //Martes
    array("Seguridad", "Seguridad", "Sistemas", "Sistemas", "EIE", "EIE"), //Martes
    array("Redes", "Redes","Sistemas", "Sistemas", "Web", "Web"), //Jueves
    array("Seguridad", "Seguridad", "Redes", "Redes", "Ingles", "Ingles"), //Viernes
);



//imprimir horario
echo "<table border = 1>";
for($x = 0; $x < count($horario); $x++) {
    echo "<tr>";
    for($i = 0; $i <= count($horario[$x]); $i++){
        echo "<td>";
        if($x == $dia && $i == $hora){
            echo "<b>".$horario[$x][$i]."</b>";
        }
        else{
            echo $horario[$x][$i]."<br>";
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";



$dia_actual = date("N")-1;
$hora_actual = date("G")-8;
//echo $horario[$hora][$dia] . "<br><br>";
// print horario
// https://stackoverflow.com/questions/141108/how-to-find-the-foreach-index
echo "<table border='1'>";
foreach ($horario as $i=>$dia) {
    echo "<tr>";
    foreach ($dia as $j=>$asig) {
        echo "<td>";       
        if ($i == $hora_actual && $j == $dia_actual) {
            echo "<b>" . $asig . "</b>";
            //echo "<b>" . $horario[$i][$j] . "</b>";
        } else {
            echo $horario[$i][$j];
        }
        echo "</td>";
    }
    echo "<tr>";
}
echo "</table>";