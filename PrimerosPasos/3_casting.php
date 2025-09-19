<?php
// Casting
$a = 5;
$b = 5.34;
$c = "ola";
$d = true;
$e = NULL;

$a = (string) $a;
echo "Casteo de int a string:\n";
var_dump($a);

$d = (string) $d;
echo "Casteo de boolean true a string:\n";
var_dump($d);

$d = false;
$d = (string) $d;
echo "Casteo de boolean false a string:\n";
var_dump($d);

$e = (string) $e;
echo "Casteo de NULL a string:\n";
var_dump($e);

$c = (float) $c;
echo "MAL casteo no permitido de string a float:\n";
var_dump($e);

$string_falso = "false";
$string_falso = (bool) $string_falso;
echo "CUIDADO con el casteo del string \"false\" a bool:\n";
var_dump($string_falso);

$numero_falso = (bool) 0;
echo "Casteo de 0 a bool:\n";
var_dump($numero_falso);

$e = NULL;
$e = (bool) $e;
echo "Casteo de NULL a bool:\n";
var_dump($e);

$string_vacio = (bool) "";
echo "Casteo de string vacio a bool:\n";
var_dump($string_vacio);
?>