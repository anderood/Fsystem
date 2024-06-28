<?php

namespace App\Services\Imports;

use App\Models\Movement\Movement;
use App\Models\Origin\Origin;
use App\Models\Transaction\Transaction;
use App\Models\Type\Type;
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
            $csvImports[] = [
                'title' => $row[0],
                'amount' => $row[1],
                'date' => $row[2],
                'type_id' => $row[3],
                'origin_id' => $row[4],
                'movement_id' => $row[5],
                'observation' => $row[6],
            ];
        }
        return $csvImports;
    }

    public function storeImport($data)
    {
        $type_id = $data['type_id'];

        if (!isset($type_id)) {
            throw new \Exception("Campo Vazio");
        }

        $csvData[] = [
            'title' => $data['title'],
            'amount' => $data['amount'],
            'date' => $data['date'],
            'type_id' => $this->checkIsNotNull($data['type_id'], 'type'),
            'origin_id' => $this->checkIsNotNull($data['origin_id'], 'origin'),
            'movement_id' => $this->checkIsNotNull($data['movement_id'], 'movement'),
        ];

//        die(dd($csvData));
        Transaction::create($csvData[0]);

        return redirect()->back()->with('success', 'CSV importação iniciada com sucesso!');
    }

    public function checkIsNotNull($search, $option)
    {
        switch ($option) {
            case 'type':

                $typeFind = $this->typeService->findType($search);

                if ($typeFind !== null) {
                    return $typeFind->id;
                }

                $newType =  Type::create(['name' => $search, 'description' => 'Provido de importação']);

                return $newType->id;

            case 'origin':

                try {
                    $originFind = $this->originService->findOrigin($search);

                    if ($originFind !== null) {
                        return $originFind->id;
                    }

                    $newOrigin =  Origin::create(['name' => $search, 'description' => 'Provido de importação']);

                    return $newOrigin->id;
                } catch (\Throwable $th) {
                    return $th->getMessage();
                }


            default:

                $movementFind = $this->movementService->findMovement($search);

                if ($movementFind !== null) {
                    return $movementFind->id;
                }

                $movement =  Movement::create(['name' => $search, 'description' => 'Provido de importação']);

                return $movement->id;
        }
    }
}
