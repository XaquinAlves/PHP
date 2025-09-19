<?php
echo "Hola mundo! ";
// Comentario
# Comentario
/*
    Comentario en bloque
*/

echo "Hola mundo!\n";

$variable_int = 5;
$variable_string = "Hola!";
$variable_double = 3.1416;
$variable_boolean = true;
$variable_null = null;
$variable_array = [2, "texto", 5];

echo "A variable vale $variable_int \n";

var_dump($variable_string); #Describe a variable
var_dump($variable_array);

$unha_variable = 3;
$outra_variable = $unha_variable;
var_dump($outra_variable);

$unha_variable = "Cambio";
?>