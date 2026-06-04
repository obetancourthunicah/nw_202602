<?php
// include 'libreria.php';
// require 'libreria.php';
//include_once 'libreria.php';
require_once 'libreria.php';

$productos = getProductos();
$refrescos = getRefrescos();
$postres = getPostres();


if (isset($_POST["btnGuardar"])) {
    $nombre = $_POST["txtNombre"] ?? '';
    $productoCod = $_POST["cmbProducto"] ?? '';
    $refrescoCod = $_POST["cmbRefresco"] ?? '';
    $postreCod = $_POST["cmbPostre"] ?? '';
    $producto = getItemPorCodigo($productos, $productoCod);
    $refresco = getItemPorCodigo($refrescos, $refrescoCod);
    $postre = getItemPorCodigo($postres, $postreCod);

    $total = $producto["precio"] * (($producto["iva"] / 100) + 1);
    $total += $refresco["precio"] * (($refresco["iva"] / 100) + 1);
    $total += $postre["precio"] * (($postre["iva"] / 100) + 1);

    $orden = [
        "cliente" => $nombre,
        "producto" => $producto,
        "refresco" => $refresco,
        "postre" => $postre,
        "total" => $total
    ];
    nuevaOrden($orden);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Trucha</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
</head>

<body>
    <h1>Ordenar en la Trucha</h1>
    <form action="trucha.php" method="post">
        <label for="txtNombre">Nombre de Cliente</label>
        <input type="text" name="txtNombre" id="txtNombre" />
        <br />
        <label for="cmbProducto">Producto</label>
        <select id="cmbProducto" name="cmbProducto">
            <?php
            foreach ($productos as $producto) {
                echo '<option value="' . $producto["codigo"] . '">' . $producto["nombre"] . '</option>';
            }
            ?>
        </select>
        <br />
        <label for="cmbRefresco">Refresco</label>
        <select id="cmbRefresco" name="cmbRefresco">
            <?php
            foreach ($refrescos as $refresco) {
                echo '<option value="' . $refresco["codigo"] . '">' . $refresco["nombre"] . '</option>';
            }
            ?>
        </select>
        <br />
        <label for="cmbPostre">Postre</label>
        <select id="cmbPostre" name="cmbPostre">
            <?php
            foreach ($postres as $postre) {
                echo '<option value="' . $postre["codigo"] . '">' . $postre["nombre"] . '</option>';
            }
            ?>
        </select>
        <br />
        <button type="submit" name="btnGuardar">Ordenar</button>
    </form>
</body>

</html>