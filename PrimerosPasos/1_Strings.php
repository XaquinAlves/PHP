<?php
//Funcions básicas de String
$variable = "ola";
$frase = "calquer outra cousa";

echo 'Hey ' . $variable . ' mundo' . "\n"; #Uso de variables con comilla simple

echo "Num de letras en ola : " . strlen("ola") . "\n"; # Lonxitude dun string

echo "Num de palabras en \"$frase\" : " . str_word_count($frase) . "\n"; #Num de palabras dun string

echo strpos("Ola mundo", "mundo") . "\n"; #Posicion nun string

//Modificación Strings
$un_string = "Ola mundo";

echo strtoupper("ola mundo") . "\n"; #Pasar a maiusculas

echo strtolower("OLA MUNDO") . "\n"; #Pasar a minusculas

echo str_replace("Ola", "Que tal", $un_string) . "\n"; #Replace un string

echo strrev("Ola mundo") . "\n";  #Darlle a volta a un string

echo "     cadena con espacios" . "\n";
echo trim("     cadena con espacios") . "\n"; #Clasico trim, quita espacio pricipo e final

$string_a_array = explode(" ", $un_string); #Convertir string a array con un criterio
print_r($string_a_array);

//Concatenacion
$outro_string = "que pasa";

echo "$un_string $outro_string" . "\n";
echo "$un_string " . "$outro_string" . "\n";

//Slice
echo substr($un_string, 5, 2) . "\n"; #Facer un substring por lonxitude, empeza en 5 con 2 char

echo substr($un_string, 5) . "\n"; #Facer un substring ata o final que empeza en 5

echo substr($un_string, -5, 2) . "\n"; #Facer un substring contando desde a dereita

echo substr($un_string, 2, -2) . "\n"; # Facer un substring que comeza en 2 e omite os 3 ultimos char

//Caracteres especiais

echo "esto e \"especial\"";
?>