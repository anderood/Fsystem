<?php

namespace App\Http\Controllers\Types;

use App\Http\Controllers\Controller;
use App\Models\Types;
use App\Services\Types\TypeServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TypeController extends Controller
{
    private TypeServiceInterface $typeService;
    public function __construct(TypeServiceInterface $typeService)
    {
        $this->typeService = $typeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $types = $this->typeService->getAllTypes();
        return View('types.home_types', ['types' => $types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('types.create_types');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $newType = $request->all();
        return $this->typeService->createType($newType);
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View
     */
    public function show()
    {
        return view('types.create_types');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Types  $types
     * @return Application|Factory|View|Response
     */
    public function edit($id)
    {
        $typesData = $this->typeService->getTypeId($id);
        return view('types.edit_types', ['type' => $typesData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Types  $types
     * @return Response
     */
    public function update($id, Request $request)
    {
        $typesData = $request->all();
        return $this->typeService->updateService($id, $typesData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Types  $types
     * @return Response
     */
    public function destroy(Types $types)
    {
        //
    }
}
