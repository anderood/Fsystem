<?php

namespace App\Services\Imports;

use Illuminate\Http\Request;

interface ImportServiceInterface
{
    public function storeImport(Request $request);
}
