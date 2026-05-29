<?php
//Los arreglos ordinales son aquellos que su puntero o elemento
// está ligado a un indice numérico

use BcMath\Number;

$arrOrdinal = [9, 8, 7, 6, 5, 4, 3, 2, 1];
//El Arreglo con un append utiliza el numero ordinal siguiente no usado
$arrOrdinal[] = 10;
$arrOrdinal[20] = 11;
$arrOrdinal[] = 12;

$listaDePersonas = [];
$arrAsociativo = [
    "nombre" => "Orlando",
    "apellido" => "Betancourth",
    "curso" => "Negocios Web",
    "seccion" => "2001"
];
$listaDePersonas[] = $arrAsociativo;

$arrAsociativo = [
    "nombre" => "Fulanto",
    "apellido" => "De Tal",
    "curso" => "Negocios Web",
    "seccion" => "2001"
];
$listaDePersonas[] = $arrAsociativo;

$arrAsociativo = [
    "nombre" => "Menganito",
    "apellido" => "De Tal y Milatos",
    "curso" => "Negocios Web",
    "seccion" => "2001"
];
$listaDePersonas[] = $arrAsociativo;

$arrAsociativo = [
    "nombre" => "Sutano",
    "apellido" => "De Madrid",
    "curso" => "Negocios Web",
    "seccion" => "2001"
];
$listaDePersonas[] = $arrAsociativo;


// Funciones 

function sumarValores(Number $a, Number $b): Number
{
    return $a + $b;
}



/*
Indice -> Puntero*
0            9
1            8
2            7   
3            6
4            5
5            4
6            3
7            2
8            1
9            10
20           11
21           12
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Arreglos y Funciones</h1>
    <strong>Accediendo a un arreglo ordinal por medio de su índice</strong><br />
    El valor del índice 8 es <?php echo $arrOrdinal[8] ?>. <br />
    El valor del índice 20 es <?php echo $arrOrdinal[20] ?>.<br />
    El valor del índice 10 es <?php echo $arrOrdinal[10] ?>.
    El valor del índice 15 es <?php echo $arrOrdinal[15] ?>.
    El valor del índice 21 es <?php echo $arrOrdinal[21] ?>.
    <hr />
    <h2>For each por valor</h2>
    <?php
    foreach ($arrOrdinal as $item) {
        echo "Valor del item es:" . $item . "<br/>";
    }
    ?>
    <hr />
    <strong>Accediendo a un arreglo Asociativo por medio de su llave</strong><br />
    El valor de la llave nombre es <?php echo $arrAsociativo["nombre"] ?>. <br />
    El valor del indice 0 es <?php echo $arrAsociativo[0] ?>. <br />
    <hr />
    <h2>For each por valor con llave</h2>
    <?php
    foreach ($arrAsociativo as $llave => $item) {
        echo "Valor de la " . $llave . " es:" . $item . "<br/>";
    }

    echo "<hr/>";
    $numLinea = 1;
    foreach ($listaDePersonas as $persona) {
        echo "Nombre Completo: " . $persona["nombre"] . " " . $persona["apellido"] . "<br/>";
    }
    ?>
    <hr />
</body>

</html>