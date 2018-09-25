<?php

$dia = date("N");

$hora = date("G");

$horario = array ( 
    array("Base de datos", "EIE", "Sistemas", "Sistemas", "Web", "Web"), //Lunes
    array("Web", "Seguridad", "Redes", "Redes", "Base de datos", "Base de datos"), //Martes
    array("Seguridad", "Seguridad", "Sistemas", "Sistemas", "EIE", "EIE"), //Martes
    array("Redes", "Redes","Sistemas", "Sistemas", "Web", "Web"), //Jueves
    array("Seguridad", "Seguridad", "Redes", "Redes", "Ingles", "Ingles"), //Viernes
);

echo $horario[$dia-1][$hora-8];