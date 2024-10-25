<?php

namespace App\Http\Controllers\Origins;

use App\Http\Controllers\Controller;
use App\Http\Requests\OriginRequest;
use App\Models\Origin\Origin;
use App\Services\Origin\OriginServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class OriginController extends Controller
{
    private OriginServiceInterface $originService;

    public function __construct(OriginServiceInterface $originService)
    {
        $this->originService = $originService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $origins = $this->originService->allOrigins();
        return view('origins.home_origins', ['origins' => $origins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Factory|View|Application
    {
        return view('origins.create_origins');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param OriginRequest $request
     * @return RedirectResponse|Redirector|Application
     */
    public function store(OriginRequest $request): Application|RedirectResponse|Redirector
    {
        $this->originService->createOrigin($request);
        return redirect("/origins")->with("success", "Cadastrado com Sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param Origin $origin
     * @return Response
     */
    public function show(Origin $origin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id): Factory|View|Application
    {
        $origin = $this->originService->getOriginById($id);
        return view('origins.edit_origins', ['origin' => $origin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param OriginRequest $request
     * @param int $id
     * @return Application|Redirector|RedirectResponse
     */
    public function update(OriginRequest $request, int $id): Application|RedirectResponse|Redirector
    {
        $this->originService->updateOrigin($request, $id);
        return redirect("/origins")->with('success', "Cadastro atualizado com Sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id)
    {
        return $this->originService->deleteOrigin($id);
    }
}
