<?php
// Comentario una línea
/* 
Comentario multi 
*/
echo "Hola mundo\n";
echo "Hola", " mundo\n";
echo ("Hola mundo\n");
print("Hola mundo 1 \n");

print "Hola mundo 2";

// definir variables
$_ = "ESPOL";
$edad = 23;
$multa = false;
$promedio = 8.7;

echo "\nYo estudio en la $_ y mi promedio fue de $promedio \n";
/*
$archivo = fopen("main.php", "r");
fread($archivo);
fclose($archivo);
*/
/*
include_once("archivo1");
require_once("archivo2");
*/
//Encriptacion
$clave = "hola123456";
echo md5($clave);

echo "\n". password_hash($clave, PASSWORD_BCRYPT);

echo "\n";

$favcolor = "green";
switch ($favcolor) {
   case "red":
       echo "Your favorite color is red!";
       break;
   case "blue":
       echo "Your favorite color is blue!";
       break;
   case "green":
       echo "Your favorite color is green!";
       break;
   default:
       echo "Your favorite color is neither red, blue, nor green!";
}

?>
