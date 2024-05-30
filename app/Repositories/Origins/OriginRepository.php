<?php

namespace App\Repositories\Origins;

use App\Http\Requests\Origins\OriginsRequest;
use App\Models\Origin\Origin;
use Illuminate\Validation\ValidationException;

class OriginRepository implements OriginRepositoryInterface
{

    public function getAllOrigins()
    {
        return Origin::all();
    }

    public function getOriginById($id)
    {
        return Origin::find($id);
    }

    public function createOrigin($request)
    {
        $request->validate(OriginsRequest::rules());

        $originData = $request->all();

        return Origin::create($originData);
    }
}
