<?php

namespace Unicah\Poop1;

class Trucha
{
    private $ordenes;

    public function __construct()
    {
        $this->ordenes = [];
    }
    public function addOrden($nuevaOrden)
    {
        $this->ordenes[] = $nuevaOrden;
    }
    public function obtenerOrdenes()
    {
        return $this->ordenes;
    }
}
