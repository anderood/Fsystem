<?php

namespace App\Http\Controllers\Csvs;

use App\Http\Controllers\Controller;
use App\Models\Transaction\Transaction;
use Illuminate\Http\Request;

class CSVController extends Controller
{
    public function index()
    {
        return view('csv.layout-import');
    }

    public function store(Request $request)
    {
        $file = $request->file('import_csv');

        $rows = array_map('str_getcsv', file($file->getRealPath()));

        array_shift($rows);
        foreach ($rows as $row) {
            Transaction::create([
                'title' => $row[0],
                'amount' => $row[1],
                'date' => $row[2],
                'member_id' => 6,
                'type_id' => 4,
                'origin_id' => 2,
                'movement_id' => 1,
                'observation' => $row[6],
            ]);
        }

    }

    public function edit()
    {
        //
    }
}
