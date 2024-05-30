<?php

namespace App\Services\Origins;

use Illuminate\Http\Request;

interface OriginServiceInterface
{
    public function getAllOrigins();
    public function getOriginById($id);
    public function createOrigin(Request $request);
}
