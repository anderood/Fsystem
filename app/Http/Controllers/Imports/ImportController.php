<?php

namespace App\Http\Controllers\Imports;

use App\Http\Controllers\Controller;
use App\Services\Imports\ImportServiceInterface;
use App\Services\Member\MemberServiceInterface;
use App\Services\Movement\MovementServiceInterface;
use App\Services\Origin\OriginServiceInterface;
use App\Services\Type\TypeServiceInterface;
use Illuminate\Http\Request;

class ImportController extends Controller
{

    protected $importService;

    protected $typeService;

    protected $originService;

    protected $movementService;

    public function __construct(
        ImportServiceInterface $importService,
        MemberServiceInterface $memberService,
        TypeServiceInterface $typeService,
        OriginServiceInterface $originService,
        MovementServiceInterface $movementService
    )
    {
        $this->importService = $importService;
        $this->memberService = $memberService;
        $this->typeService = $typeService;
        $this->originService = $originService;
        $this->movementService = $movementService;
    }

    public function index()
    {
        return view('csv.layout-import');
    }

    public function create(Request $request)
    {

        $csvImports = $this->importService->import($request);
        $allTypes = $this->typeService->allTypes();
        $allOrigins = $this->originService->allOrigins();
        $allMovements = $this->movementService->allMovements();
        $allMembers = $this->memberService->allMembers();

        return view('csv.edit-import', [
            'csvImports' => $csvImports,
            'allTypes' => $allTypes,
            'allOrigins' => $allOrigins,
            'allMovements' => $allMovements,
            'allMembers' => $allMembers,
        ]);

    }

    public function store(Request $request)
    {
        $allImports = $request->all();

        return $this->importService->storeImport($allImports);
    }
}
