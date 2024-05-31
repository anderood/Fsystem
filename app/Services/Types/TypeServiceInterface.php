<?php

namespace App\Services\Types;

use Illuminate\Http\Request;

interface TypeServiceInterface
{
    public function getAllTypes();
    public function getTypeId($id);
    public function createType(Request $request);
    public function updateService(int $id, Array $typeData);
}
