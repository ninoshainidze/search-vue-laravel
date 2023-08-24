<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Services\SearchBuildingService;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    protected SearchBuildingService $service;

    public function __construct(SearchBuildingService $service)
    {
        $this->service = $service;
    }

    public function search(Request $request)
    {
        $data = $this->service->getData($request);

        return response()->json($data)->header('Access-Control-Allow-Origin', '*');
    }
}
