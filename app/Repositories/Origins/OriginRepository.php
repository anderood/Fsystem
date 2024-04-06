<?php

namespace App\Repositories\Origins;

use App\Models\Origin\Origin;

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

    public function createOrigin(array $originData)
    {
        return Origin::create($originData);
    }
}
