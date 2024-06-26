<?php

namespace App\Services\Type;


use Illuminate\Http\Request;

interface TypeServiceInterface
{
    public function allTypes();

    public function getTypeById(int $id);

    public function createType(Request $request);

    public function updateType(Request $request, int $id);

    public function deleteType(int $id);

    public function findType(String $search);
}
