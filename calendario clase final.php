<?php
// two dimensional array
// https://www.w3schools.com/php/php_arrays_multi.asp<?php
// https://www.w3schools.com/php/php_arrays.asp
// https://www.w3schools.com/php/php_arrays_multi.asp
<table border="1">
  <tr>
$horario = array(
    array("WEB","WEB","SIST","SIST","RED","RED"),  // lunes 0
    array("WEB","RED","WEB","WEB","SIST","SIST"),  // martes 1
    array("WEB","WEB","SIST","SIST","RED","RED"),  // miercoles 2
    array("WEB","WEB","SIST","SIST","RED","RED"),  // jueves 3
    array("WEB","WEB","SIST","SIST","RED","RED")  // viernes 4
);
// OR
$horario = [
    ["WEB","WEB","SIST","SIST","RED","RED"],  // lunes 0
    ["WEB","RED","WEB","WEB","SIST","SIST"],  // martes 1
    ["WEB","WEB","SIST","SIST","RED","RED"],  // miercoles 2
    ["WEB","WEB","SIST","SIST","RED","RED"],  // jueves 3
    ["WEB","WEB","SIST","SIST","RED","RED"]  // viernes 4
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
            
        }
    echo "------------------------<br>";
    table width="100%"  border="1" cellpadding="0" cellspacing="0"> 
<? for ($i=0; $i=5; $i++){ ?> 
<tr> 
<td>  echo $horario[$dia-1][$hora-8]."<br>";
// print horaio
foreach ($horario as $dia) {
    foreach ($dia as $asig){
        
        echo $asig. "<br>";</td>  
</tr><? } ?> 
</table>
    
    }
   