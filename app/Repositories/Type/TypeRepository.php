<?php

namespace App\Repositories\Type;

use App\Models\Type\Type;
use Illuminate\Http\Request;

class TypeRepository implements TypeRepositoryInterface
{
    public function allTypes()
    {
        return Type::all();
    }

    public function getTypeById(int $id)
    {
        return Type::findOrFail($id);
    }

    public function createType(Request $request)
    {
        return Type::create($request);
    }

    public function updateType(Request $request, int $id)
    {
        $type = Type::findOrFail($id);
        return Type::update($request->all(), $type);
    }

    public function deleteType(int $id)
    {
        return Type::destroy($id);
    }
}
