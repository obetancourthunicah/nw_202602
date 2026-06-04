<?php
session_start();

function getProductos()
{
    return [
        array(
            "codigo" => "P001",
            "nombre" => "Producto 1",
            "precio" => 100.34,
            "iva" => 15
        ),
        array(
            "codigo" => "P002",
            "nombre" => "Producto 2",
            "precio" => 10.00,
            "iva" => 15
        ),
        array(
            "codigo" => "P003",
            "nombre" => "Producto 3",
            "precio" => 60.99,
            "iva" => 15
        )
    ];
}
function getRefrescos()
{
    return [
        array(
            "codigo" => "R001",
            "nombre" => "Refresco 1",
            "precio" => 20.00,
            "iva" => 15
        ),
        array(
            "codigo" => "R002",
            "nombre" => "Refresco 2",
            "precio" => 25.00,
            "iva" => 15
        ),
        array(
            "codigo" => "R003",
            "nombre" => "Refresco 3",
            "precio" => 40.99,
            "iva" => 15
        )
    ];
}
function getPostres()
{
    return [
        array(
            "codigo" => "D001",
            "nombre" => "Postre 1",
            "precio" => 200.34,
            "iva" => 15
        ),
        array(
            "codigo" => "D002",
            "nombre" => "Postre 2",
            "precio" => 120.00,
            "iva" => 15
        ),
        array(
            "codigo" => "D003",
            "nombre" => "Postre 3",
            "precio" => 360.99,
            "iva" => 15
        )
    ];
}

function getItemPorCodigo(&$arrProductos, &$codigo)
{
    $r_producto = [];
    foreach ($arrProductos as $producto) {
        if ($producto["codigo"] === $codigo) {
            $r_producto = $producto;
            break;
        }
    }
    return $r_producto;
}

function nuevaOrden($orden)
{
    $ordenes = [];
    // Obtener el arreglo guardado en la sesión
    if (isset($_SESSION["ordenes_trucha"])) {
        $ordenes = $_SESSION["ordenes_trucha"];
    }
    // Adjuntar la nueva orden al arreglo
    $ordenes[] = $orden;
    // Cuardar el nuevo arrelgo en la sesión.
    $_SESSION["ordenes_trucha"] = $ordenes;
}
function obtenerOrdenes()
{
    $ordenes = [];
    if (isset($_SESSION["ordenes_trucha"])) {
        $ordenes = $_SESSION["ordenes_trucha"];
    }
    return $ordenes;
}
