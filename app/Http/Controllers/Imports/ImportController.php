<?php

namespace App\Http\Controllers\Imports;

use App\Http\Controllers\Controller;
use App\Services\Imports\ImportServiceInterface;
use Illuminate\Http\Request;

class ImportController extends Controller
{

    protected $importService;

    public function __construct(ImportServiceInterface $importService)
    {
        $this->importService = $importService;
    }

    public function index()
    {
        return view('csv.layout-import');
    }

    public function analysis(Request $request)
    {

        $csvImports = $this->importService->import($request);

        return view('csv.edit-import', ['csvImports' => $csvImports]);

    }

    public function edit()
    {
        //
    }
}
