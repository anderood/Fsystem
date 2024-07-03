<?php

namespace App\Services\Imports;

use App\Models\Movement\Movement;
use App\Models\Origin\Origin;
use App\Models\Transaction\Transaction;
use App\Models\Type\Type;
use App\Services\Movement\MovementServiceInterface;
use App\Services\Origin\OriginServiceInterface;
use App\Services\Transaction\TransactionServiceInterface;
use App\Services\Type\TypeServiceInterface;

class ImportService implements ImportServiceInterface
{
    protected $typeService;

    protected $originService;

    protected $movementService;

    protected $transactionService;

    public function __construct(
        TypeServiceInterface $typeService,
        OriginServiceInterface $originService,
        MovementServiceInterface $movementService,
        TransactionServiceInterface $transactionService
    )
    {
        $this->typeService = $typeService;
        $this->originService = $originService;
        $this->movementService = $movementService;
        $this->transactionService = $transactionService;
    }
    public function storeImport($request)
    {
        $csvData = $this->convert_csvdata_in_array($request);

        $this->check_array($csvData);

        foreach ($csvData as $index => $value) {
            $csvData[$index]['amount'] = $this->convert_coin_to_decimal($value['amount']);
            $csvData[$index]['date'] = $this->convert_date($value['date']);
            $csvData[$index]['type_id'] = $this->create_fields($value['type_id'], 'type');
            $csvData[$index]['origin_id'] = $this->create_fields($value['origin_id'], 'origin');
            $csvData[$index]['movement_id'] = $this->create_fields($value['movement_id'], 'movement');
        }

        $this->createTransaction($csvData);

        return redirect()->back()->with('success', 'CSV importação realizada com sucesso!');
    }

    private function create_fields($search, $option)
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

    private function convert_csvdata_in_array($csvData): array
    {
        $csvImports = [];
        $file = $csvData->file('import_csv');

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

    private function check_array($csvData)
    {
        if (!is_array($csvData)) {
            throw new \InvalidArgumentException("Invalid csv data");
        }
    }

    private function convert_date($csvData): string
    {
        return implode("-", array_reverse(explode("/", $csvData)));
    }

    private function convert_coin_to_decimal($amount)
    {
        $valorLimpo = trim(str_replace('R$', '', $amount));
        $removeSpace = trim(str_replace(' ', '', $valorLimpo));

        $valorReformulado = str_replace(",", ".", $removeSpace);

        $novoValor = (float)$valorReformulado;

        return $novoValor;
    }

    private function createTransaction($csvData)
    {
        foreach ($csvData as $value) {
            Transaction::create([
                'title' => $value['title'],
                'amount' => $value['amount'],
                'date' => $value['date'],
                'type_id' => $value['type_id'],
                'origin_id' => $value['origin_id'],
                'movement_id' => $value['movement_id'],
                'observation' => $value['observation'],
            ]);
        }
    }
}
