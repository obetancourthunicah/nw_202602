<?php
require_once "vendor/autoload.php";

// use Unicah\Poop1\Trucha;
use Unicah\Poop1\Servicios\Data;
use Unicah\Poop1\Servicios\Data\FileDataService;
use Unicah\Poop1\Servicios\Data\IDataService;
use Unicah\Poop1\Servicios\Data\SQLiteDataService;

//$dataService = new FileDataService();

$dataService = new SQLiteDataService();





// $miTrucha = new Trucha();

// $orden = [
//     "hola",
//     "esto",
//     "no",
//     "es",
//     "una",
//     "orden",
//     "pero",
//     "entra"
// ];

// $miTrucha->addOrden($orden);

// $orden = [
//     "adios",
//     "esto",
//     "no",
//     "es",
//     "una",
//     "orden",
//     "pero",
//     "se va a mostrar"
// ];

// $miTrucha->addOrden($orden);

// print_r($miTrucha->obtenerOrdenes());
