<?php
$txtNombre = "";
$fltNumero1 = 0;
$fltNumero2 = 0;
$cmbOperacion = "";
$fltResultado = 0;
$strResultado = "";
$ciclos = 0;

if (isset($_POST["btnEnviar"])) {
    $txtNombre = $_POST["txtNombre"] ?? "";
    $cmbOperacion = $_POST["cmbOperacion"] ?? "";
    $fltNumero1 = floatval($_POST["fltNumero1"] ?? "0");
    $fltNumero2 = floatval($_POST["fltNumero2"] ?? "0");

    // if ( $cmbOperacion === "add") {
    //     // ...
    // } else {
    //     if ( $cmbOperacion === "sub") {

    //     } else {
    //         if ( $cmbOperacion === "mul") {

    //         } else {
    //             if ($cmbOperacion === "div") {

    //             }
    //         }
    //     }
    // }


    //  1 == "1"   >  verdadero
    //  2 === "2"  >  false
    //  2 . "2"    >  22
    //  2 + "2"    >  4
    //  2 * "4.5"  >  8


    switch ($cmbOperacion) {
        case "add":
            $fltResultado = $fltNumero1 + $fltNumero2;
            $strResultado = sprintf(
                "La suma de %0.2f y %0.2f es igual a %0.2f",
                $fltNumero1,
                $fltNumero2,
                $fltResultado
            );
            break;
        case "sub":

            break;
        case "mul":

            break;
        case "div":

            break;
    }

    // intval(<string number>);
    // floatval(<string number>);  

}

/*

if ( condicion ) {
    ... expresiones si verdadero
} else {
    ... exporesiones si falso
}

*/

if (isset($_POST["btnCiclos"])) {
    $txtNombre = $_POST["txtNombre"] ?? "";
    $ciclos = intval($_POST["cmbCiclos"] ?? "0");

    $strResultado = "";
    // for
    for ($i = 0; $i < $ciclos; $i++) {
        $strResultado .= $txtNombre . ' Iteración ' . ($i + 1) . "<br/>";
        //$strResultado = $strResultado .  $txtNombre . 'Iteración' . ($i + 1) . "<br/>";
    }
    $strResultado .= "<hr/>";
    //ciclor while
    $j = 0;
    while ($j < $ciclos) {
        $strResultado .= $txtNombre . ' Iteración ' . ($j + 1) . "<br/>";
        $j++;
    }
    //do while
    $strResultado .= "<hr/>";
    $k = 0;
    do {
        $strResultado .= $txtNombre . ' Iteración ' . ($k + 1) . "<br/>";
        $k++;
    } while ($k < $ciclos);

    // Lista dinamicamente ligadas Estructura de Datos

    // *p1 = "abcd"
    // *p2 = 123
    // *p3 = true
    // ["llave" => *p1;] -> ["llave2" => *p2;] -> ["llave3" => *p3;]

    $arrColores = ["Uno", 2, true, ["a", "b", "c"]];

    //[0 => *p1 | "Uno";] -> [1 => *p2; | 2] -> [2 => *p3; | true] -> [3 => *p4 |  [0 => *p4.1; | "a" ] -> [1 => *p4.2; | "b"] -> [2 => *p4.3; | "c"]]

}

/*
Ciclos en PHP
for
while
do while
*/


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capturar Formularios en PHP</title>
</head>

<body>
    <h1>Formulario PHP</h1>
    <h2>Formulario de Condiciones</h2>
    <form action="formulario.php" method="post">
        <label for="txtNombre">Nombre Completo </label>
        <input type="text" id="txtNombre" name="txtNombre"
            placeholder="Tu nombre Completo" value="<?php echo $txtNombre; ?>" />
        <br />
        <label for="cmbOperacion">Operando</label>
        <select id="cmbOperacion" name="cmbOperacion">
            <option value="">Seleccione una Opción</option>
            <option value="add">Sumar</option>
            <option value="sub">Restar</option>
            <option value="mul">Multiplicar</option>
            <option value="div">Dividir</option>
        </select>
        <br />
        <label for="fltNumero1">Primer Número</label>
        <input type="number" id="fltNumero1" name="fltNumero1" step="0.01"
            placeholder="0-100" value="<?php echo $fltNumero1; ?>" />
        <br />
        <label for="fltNumero2">Segundo Número</label>
        <input type="number" id="fltNumero2" name="fltNumero2" step="0.01"
            placeholder="0-100" value="<?php echo $fltNumero2; ?>" />
        <br />
        <button type="submit" name="btnEnviar">Enviar Formulario</button>
    </form>
    <hr />
    <h2>Formulario de Ciclos</h2>
    <form action="formulario.php" method="post">
        <label for="txtNombre1">Nombre Completo </label>
        <input type="text" id="txtNombre1" name="txtNombre"
            placeholder="Tu nombre Completo" value="<?php echo $txtNombre; ?>" />
        <br />
        <label for="cmbCiclos">Ciclos</label>
        <select id="cmbCiclos" name="cmbCiclos">
            <option value="">Seleccione una Opción</option>
            <option value="100">Cién</option>
            <option value="50">Cincuenta</option>
            <option value="25">Veinticinco</option>
            <option value="5">Cinco</option>
        </select>
        <br />
        <button type="submit" name="btnCiclos">Procesar Ciclos</button>
    </form>


    <div>
        <?php
        if ($txtNombre !== "") {
            echo "<strong>" . $txtNombre . "</strong>";
            echo "<hr>";
            echo $strResultado;
        }
        ?>
    </div>
</body>

</html>