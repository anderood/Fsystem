<?php

namespace App\Http\Controllers\Csvs;

use App\Http\Controllers\Controller;
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
        $handle = fopen($file->path(), 'r');

        $data = fgetcsv($handle);

        print_r($data);die();

        foreach ($fileContents as $line) {
            $data = str_getcsv($line);
            var_dump($data);
        }
    }
}
