<?php

namespace App\Http\Controllers\Imports;

use App\Http\Controllers\Controller;
use App\Services\Movement\MovementServiceInterface;
use App\Services\Origin\OriginServiceInterface;
use App\Services\Type\TypeServiceInterface;
use Illuminate\Http\Request;

class ImportController extends Controller
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

    public function index()
    {
        return view('csv.layout-import');
    }

    public function analysis(Request $request)
    {
        $csvImports = [];
        $file = $request->file('import_csv');

        $rows = array_map('str_getcsv', file($file->getRealPath()));

        array_shift($rows);

        foreach ($rows as $row) {
           $csvImports[] = $row;
        }

        return view('csv.edit-import', ['csvImports' => $csvImports]);

    }

    public function edit()
    {
        //
    }
}
