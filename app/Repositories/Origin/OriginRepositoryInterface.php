<?php

namespace App\Repositories\Origin;

use Illuminate\Http\Request;

interface OriginRepositoryInterface
{
    public function allOrigins();

    public function getOriginById(int $id);

    public function createOrigin(Request $request);

    public function updateOrigin(Request $request, int $id);

    public function deleteOrigin(int $id);
}
