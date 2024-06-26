<?php

namespace App\Services\Imports;

use App\Services\Movement\MovementServiceInterface;
use App\Services\Origin\OriginServiceInterface;
use App\Services\Type\TypeServiceInterface;

class ImportService implements ImportServiceInterface
{
    protected $typeService;

    protected $originService;

    protected $movementService;

    public function __construct(
        TypeServiceInterface $typeService,
        OriginServiceInterface $originService,
        MovementServiceInterface $movementService
    )
    {
        $this->typeService = $typeService;
        $this->originService = $originService;
        $this->movementService = $movementService;
    }

    public function import($request)
    {
        $csvImports = [];
        $file = $request->file('import_csv');

        $rows = array_map('str_getcsv', file($file->getRealPath()));

        array_shift($rows);

        foreach ($rows as $row) {
            $csvImports[] = $row;
        }

        return $csvImports;
    }
}
