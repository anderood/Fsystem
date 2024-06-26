<?php

namespace App\Services\Imports;

use Illuminate\Http\Request;

interface ImportServiceInterface
{
    public function import(Request $request);
}
