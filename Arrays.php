<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
/*
1) Crea un array asociaƟvo con los siguientes datos y claves.
nombre: Sara, apellido: Martínez, edad: 23, ciudad: Barcelona.
Muestra los valores del array anterior uƟlizando foreach. 
*/

$nombre = array("Nombre" =>"Sara", "Apellido" => "Martinez", "Edad"=> "23", "Ciudad" => "Barcelona");
$numero = 1;
foreach ($nombre as $value) {

    echo "Dato $numero º: $value <br>";
    $numero++;
}
$numero = 1;
echo "<br>";

/*
2) Muestra los valores del array del ejercicio 1 mostrando la clave y el valor uƟlizando
foreach.
*/

foreach ($nombre as $key => $value) {
    echo "$key: $value <br>";
}
echo "<br>";
/*
3) Modifica la edad del primer array a 24. Vuelve a mostrar toda su información. 
*/
$nombre["Edad"] = "24";
foreach ($nombre as $value) {

    echo "Dato $numero º: $value <br>";
    $numero++;
}
$numero = 1;
echo "<br>";
/*
4) Borra la ciudad del array y vuelve a mostrar toda su información usando la función
var_dump.
*/
array_splice($nombre,  3,  1);
var_dump($nombre);
echo "<br>";
/*
5) Crear un nuevo array con un valor separado por coma a parƟr de la cadena de texto
$letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su
información en orden descendente
*/
echo "<br>";
$letter= "a,b,c,d,e,f";
$array = explode(",",$letter);
krsort($array);
foreach ($array as $value) {

    echo "Dato $numero º: $value <br>";
    $numero++;
}
echo "<br>";
    
    

/*
6) Un profesor quiere registrar las notas de su clase en un array asociaƟvo. Las notas son
las siguientes:
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
Guarda los datos en un array asociaƟvo en el orden previo y muéstralos ordenados de
mayor a menor
*/

$Notas = array("Miguel" =>"5", "Luís" => "7", "Marta"=> "10", "Isabel" => "8", "Aitor"=>"4", "Pepe"=>"1");
$numero = 1;
arsort($Notas);
foreach ($Notas as $key => $value) {
    echo "$key: $value <br>";
}

/*
7) Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
nombres de los alumnos cuya nota esté por encima de la media.
*/
array_sum($Notas);
$Media = array_sum($Notas)/count($Notas);
echo "<br>";
echo "La media de las notas es: ". round($Media, 2);
echo "<br>";
echo "<br>";
echo "Y estos son aquellos estudiantes por encima de la media:";

foreach ($Notas as $key => $value){
    if($value>$Media){
        echo"<br>";
        echo $key;

    }
}


/*
8) Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del
array.
*/
$top = 0;
$top_nombre = "";

foreach($Notas as $key => $value){
    if($value>$top){
        $top=$value;
        $top_nombre = $key;

    }   

}
echo "<br>";
echo "<br>";
echo "El/la  estudiante con más nota es: ". $top_nombre. " con una nota de: ".$top;



?>
</body>
</html>


