<?php

namespace App\Http\Controllers\Imports;

use App\Http\Controllers\Controller;
use App\Models\Transaction\Transaction;
use Illuminate\Http\Request;

class ImportController extends Controller
{
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
