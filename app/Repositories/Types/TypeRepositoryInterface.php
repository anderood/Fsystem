<?php

namespace App\Repositories\Types;

use Illuminate\Http\Request;

interface TypeRepositoryInterface
{
    public function getAllTypes();
    public function getTypeId($id);
    public function createType(Request $request);
    public function updateType(int $id, Array $typeData);
}
