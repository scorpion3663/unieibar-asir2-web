<?php
// two dimensional array
// https://www.w3schools.com/php/php_arrays_multi.asp<?php
// https://www.w3schools.com/php/php_arrays.asp
// https://www.w3schools.com/php/php_arrays_multi.asp
$horario = array(
    array("WEB","WEB","SIST","SIST","RED","RED"),  // lunes 0
    array("WEB","RED","WEB","WEB","SIST","SIST"),  // martes 1
    array("WEB","WEB","SIST","SIST","RED","RED"),  // miercoles 2
    array("WEB","WEB","SIST","SIST","RED","RED"),  // jueves 3
    array("WEB","WEB","SIST","SIST","RED","RED")  // viernes 4
);
// OR
$horario = [
    ["BASES","EIE","SIST","SIST","WEB","WEB"],  // lunes 0
    ["WEB","SEG","RED","RED","BASES","BASES"],  // martes 1
    ["SEG","SEG","SIST","SIST","EIE","EIE"],  // miercoles 2
    ["RED","RED","SIST","SIST","WEB","WEB"],  // jueves 3
    ["SEG","SEG","RED","RED","ING","ING"]  // viernes 4
];
// OR with Associative Arrays
$horario2 = array(
    "Lunes" => array("WEB","WEB","SIST","SIST","RED","RED"),  // lunes 0
    "Martes" => array("WEB","RED","WEB","WEB","SIST","SIST"),  // martes 1
    "Miercoles" => array("WEB","WEB","SIST","SIST","RED","RED"),  // miercoles 2
    "Jueves" => array("WEB","WEB","SIST","SIST","RED","RED"),  // jueves 3
    "Viernes" => array("WEB","WEB","SIST","SIST","RED","RED")  // viernes 4
);
$dia = date("N");
$hora = date("G");
    
    echo $horario[$dia-1][$hora-8]."<br>";
    // print horaio
   // foreach ($horario as $dia) {
     //   foreach ($dia as $asig){
            
       //     echo $asig. "<br>";
            
    echo "<table width='100%''  border='1' cellpadding='0' cellspacing='0'>";
    foreach ($horario as $dia) {
        echo"<tr>";
    foreach ($dia as $asig){
        echo"<td>";
        echo $asig. "<br>";
        echo"</td>";
      }
      echo "<tr>";
      }
 echo "</table>";
 // using for
// print horario
echo "<br><br>";
echo "<table border='1'>";
for ($i=0; $i<count($horario); $i++) {
    echo "<tr>";
    for ($j=0; $j<count($horario[$i]); $j++) {
        echo "<td>";
        echo $horario[$i][$j] . "<br>";
        echo "</td>";
    }
    echo "<tr>";
}
echo "</table>";
//echo $horario2["Lunes"][0];
// Controlar los horarios de fuera de dia y hora
// Print el horario
// Where can we check PHP errors?

    

   