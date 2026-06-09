<?php

namespace Unicah\Poop1\Servicios\Data;

interface IDataService
{
    public function Salvar(): bool;
    public function Init(): bool;
    public function ObtenerRegistros($sentencia, $filtros): array;
    public function ObtenerRegistro($sentencia, $filtro): array;
    public function Ejecutar($sentencia, $filtro): array;
}
