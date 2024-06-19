<?php

namespace App\Repositories\Origin;

use App\Models\Origin\Origin;
use Illuminate\Http\Request;

class OriginRepository implements OriginRepositoryInterface
{

    public function allOrigins()
    {
        return Origin::all();
    }

    public function getOriginById(int $id)
    {
        return Origin::find($id);
    }

    public function createOrigin(Request $request)
    {
        return Origin::create($request->all());
    }

    public function updateOrigin(Request $request, int $id)
    {
        $origin = Origin::findOrFail($id);
        $originData = $request->all();
        $origin->fill($originData);
        $origin->save();

        return $origin;
    }

    public function deleteOrigin(int $id)
    {
        return Origin::destroy($id);
    }
}
