<?php

namespace Unicah\Poop1\Servicios\Data;

use Exception;
use SQLite3;

class SQLiteDataService implements IDataService
{
    private string $dbFilePath = "trucha_data.db";
    private SQLite3 $conn;

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
        $this->conn = new SQLite3(
            $this->dbFilePath
        );
        if ($this->conn->lastErrorCode() > 0) {
            return false;
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
