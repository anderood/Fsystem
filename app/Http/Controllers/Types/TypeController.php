<?php

namespace App\Http\Controllers\Types;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeRequest;
use App\Models\Type\Type;
use App\Services\Type\TypeServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class TypeController extends Controller
{
    protected TypeServiceInterface $typeService;

    public function __construct(TypeServiceInterface $TypeService)
    {
        $this->typeService = $TypeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $types = $this->typeService->allTypes();
        return view('types.home_types', ['types' => $types]);
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
     * @param TypeRequest $request
     * @return RedirectResponse|Redirector|Application
     */
    public function store(TypeRequest $request): Application|RedirectResponse|Redirector
    {
        $this->typeService->createType($request);
        return redirect("/types")->with('success', 'Criado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param Type $type
     * @return Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $type = $this->typeService->getTypeById($id);
        return view('types.edit_types', ['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TypeRequest $request
     * @param int $id
     * @return Type
     */
    public function update(TypeRequest $request, int $id): Type
    {
        return $this->typeService->updateType($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id): Response
    {
        return $this->typeService->deleteType($id);
    }
}
