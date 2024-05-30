<?php

namespace App\Repositories\Origins;

use Illuminate\Http\Request;

interface OriginRepositoryInterface
{
    public function getAllOrigins();
    public function getOriginById($id);
    public function createOrigin(Request $request);
}
