<?php
/*
Estos ejercicios son los de los puntos.
*/

//Crea un array llamado nombres que contenga varios nombres.
$nombres = ['Daniel','Pepe','Sofía','María'];
echo "<br>";

// Muestra el número de elementos que tiene el array (función count) 
echo count($nombres);
echo "<br>";

/* Crea una cadena que contenga los nombres de los alumnos existentes 
en el array  separados por un espacio y muéstrala (función de strings implode) 
*/
echo implode(' ',$nombres);
echo "<br>";

// Muestra el array ordenado alfabéticamente (función asort) 
asort($nombres);
print_r($nombres);
echo "<br>";

// Muestra el array en el orden inverso al que se creó (función array_reverse) 
array_reverse($nombres);
print_r($nombres);
echo "<br>";

// Muestra la posición que tiene tu nombre en el array (función array_search) 
echo array_search("Daniel",$nombres);
//print_r($nombres);
echo "<br>";

//Crea un array de alumnos donde cada elemento sea otro array que contenga el id, nombre y edad del alumno.
$alumnos = [
    ['id'=>'100m','nombre'=> 'Daniel','edad'=> '21'],
    ['id'=>'101m','nombre'=> 'Pepe','edad'=> '22'],
    ['id'=>'103m','nombre'=> 'María','edad'=> '26'],
    ['id'=>'104m','nombre'=> 'Sofía','edad'=> '25']
];
echo "<br>";
echo "<table>";

//Crea una tabla html en la que se muestren todos los datos de los alumnos.
foreach ($alumnos as $alumno){
    echo "<tr>";
    foreach ($alumno as $key => $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";

// Utiliza la función array_column para obtener un array indexado que contenga únicamente los nombres de los alumnos y muéstralo por pantalla. 
$alumnos = array_column($alumnos,'nombre');
print_r($alumnos);
echo "<br>";

// Crea un array con 10 números y utiliza la función array_sum para obtener la suma de los 10 números. 
$números = [1,2,3,4,5,6,7,8,9,10];
echo "sumar números array = " . array_sum($números);
echo "<br>";


/*
Recorrer array foreach.php

*Escribe un script en PHP que muestre
un array de colores como una lista desordenada.
*/
$color = array('blanco', 'verde', 'rojo');
    echo "<ul>";
    foreach ($color as $key => $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";

/*
Rcorrer array II foreach2.php 
Escribe un script en PHP que muestre un array de colores 
como una lista desordenada.
*/
$colores = array(
'blanco'=>'blanco.html',
'verde' => 'verde.html', 
'rojo' => 'rojo.html');
echo "<ul>";
    foreach ($colores as $key => $value) {
        echo "<li><a href='$value'>$key</a></li>";
    }
    echo "</ul>";
    echo "<br>";

/*
Ordenar un array sort.php
Escribe un script PHP para ordenar un array asociativo.
*/
$edades=array(
"Juan"=>"31",
"María"=>"41",
"Andrés"=>"39",
"Berta"=>"40");
//Ordenado por Nombre, ascendente//
ksort($edades);
    print_r($edades);
    echo "<br>";
//Ordenado por Edad, ascendente//
asort($edades);
    print_r($edades);
    echo "<br>";
//Ordenado por Nombre, descendente//
krsort($edades);
    print_r($edades);
    echo "<br>";
//Ordenado por Edad, descendente//
arsort($edades);
    print_r($edades);
    echo "<br>";
    echo "<br>";

/*
Más orden sort2.php
A partir de una cadena con las temperaturas de un mes, 
realiza la media e imprime las 5 temperaturas mínimas y las 5 máximas
*/
$septiembre = "22,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40";
$temperatura = explode(",",$septiembre);
$minimas = array_slice($temperatura, 0,5);
$maximas = array_slice($temperatura, -5,);
$media = array_sum($temperatura)/count($temperatura);
print_r($minimas);
print_r($maximas);
echo($media);
echo "<br>";

/*
Ordenar según nuestro criterio sort3.php
Tenemos un array asociativo con nombre => descripción Realiza un script
php que ordene el array por la longitud de la descripción.
*/
function sort3($a, $b) {
    if (strlen($a) == strlen($b)) {
        return 0;
    }
    return (strlen($a) < strlen($b)) ? -1 : 1;

}
$nombre=array(
    "Juan"=>"Es un tio guapo",
    "María"=>"Es una persona bien",
    "Andrés"=>"No tiene ni idea de nada",
    "Berta"=>"Esta ahí sin mas");

    uasort($nombre,'sort3');
    print_r($nombre);
    echo "<br>";

/*
Password aleatorio password.php
Crea una función que genere un password aleatorio. La función tiene como parámetros los siguientes:
function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2)
Funciones a utilizar: chr — Devuelve un caracter específico rand — Genera un número entero aleatorio shuffle — Mezcla un array
Por ejemplo, chr(rand(65, 90)); devuelve un carácter en mayúscula (ver tabla ASCII)
*/
echo "<br>";
function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
    $pass = [];
    for ($i=0; $i < $upper; $i++) { 
        $pass[] = chr(rand(65,90));
    }
    for ($i=0; $i < $lower; $i++) { 
        $pass[] = chr(rand(97,122));
    }
    for ($i=0; $i < $numeric; $i++) { 
        $pass[] = chr(rand(48,57));
    }
    for ($i=0; $i < $other; $i++) { 
        $pass[] = chr(rand(33,47));
    }
    shuffle($pass);
    return implode($pass);
}
echo (rand_Pass(10, 4, 5, 1)); 
echo "<br>";

/*
Callbacks callback.php
Escribe un script php que calcule la longitud máxima y mínima de las cadenas de un array.
Funciones a utilizar: array_map — Aplica un callback a los elementos de los arrays
dados max — Encontrar el valor más alto min — Encontrar el valor más bajo.
*/

$a = ["hola", "esto", "es", "un", "ejemplo"];
$long = array_map('strlen', $a);
print_r($long);

echo "<br>";

?>