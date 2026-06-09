<?php

namespace Unicah\Poop1\Servicios\Data;

use Exception;

class FileDataService implements IDataService
{
    private string $fileName = "trucha_data.json";
    private array $data = [];

    public function __construct()
    {
        $this->Init();
    }

    public function Salvar(): bool
    {
        throw new Exception("No implementado");
    }

    public function Init(): bool
    {
        $file = fopen($this->fileName, "a+");
        $fileSize = filesize($this->fileName);
        if ($fileSize !== 0) {
            $fileContext = fread($file, $fileSize);
            $this->data = json_decode($fileContext, true);
        }
        return true;
    }

    public function ObtenerRegistros($sentencia, $filtros): array
    {
        throw new Exception('Not implemented');
    }

    public function ObtenerRegistro($sentencia, $filtro): array
    {
        throw new Exception('Not implemented');
    }

    public function Ejecutar($sentencia, $filtro): array
    {
        throw new Exception('Not implemented');
    }
}
