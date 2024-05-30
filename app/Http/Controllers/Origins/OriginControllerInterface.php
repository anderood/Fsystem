<?php

namespace App\Http\Controllers\Origins;

use Illuminate\Http\Request;

interface OriginControllerInterface
{
    public function index();
    public function create();
    public function store(Request $request);
    public function show(Request $request);
    public function edit(int $id);
    public function update(Request $request);
    public function destroy(Request $request);
}
