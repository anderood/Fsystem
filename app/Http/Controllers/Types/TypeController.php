<?php

namespace App\Http\Controllers\Types;

use App\Http\Controllers\Controller;
use App\Models\Type\Type;
use App\Services\Type\TypeServiceInterface;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    protected $typeService;

    public function __construct(TypeServiceInterface $TypeService)
    {
        $this->typeService = $TypeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->typeService->allTypes();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->typeService->createType($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        return $this->typeService->updateType($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        return $this->typeService->deleteType($id);
    }
}
