<?php

namespace App\Repositories\Types;

use App\Models\Types;
use App\Services\Types\TypeService;

class TypeRepository implements TypeRepositoryInterface
{

    public function getAllTypes()
    {
        return Types::all();
    }

    public function getTypeId($id)
    {
        return Types::find($id);
    }

    public function createType(array $typeData)
    {
        return Types::create($typeData);
    }

    public function updateType(int $id, array $typeData)
    {
        $types = Types::findOrFail($id);

        $types->update($typeData);

        $types->save();

        return redirect()->route('types.update', ['id' => $id])->with('success', 'Tipo Atualizado com Sucesso');
    }
}
