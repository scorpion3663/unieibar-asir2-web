

<?php
$horario = array(
    array("BASES", "EIE", "SIST", "SIST", "WEB","WEB"),   //lunes 0
    array("WEB", "SEGUR", "RED", "RED", "BASES","BASES"),   //martes 1
    array("SEGUR", "SEGUR", "SIST", "SIST", "EIE","EIE"),   //miercoles 2
    array("RED", "RED", "SIST", "SIST", "WEB","WEB"),   //jueves 3
    array("SEGUR", "SEGUR", "RED", "RED", "INGLES","INGLES"),   //viernes 4
    
);

$dia = date("N");
$hora = date("G");
//echo "hora : $hora";

echo $horario[$dia-1][$hora-8];

//echo "hora : $hora";
// fala por controlar los horarios de fuera