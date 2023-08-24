<?php

namespace App\Services;

use App\Models\Building;

class SearchBuildingService
{
    public function getData($request)
    {
        return Building::when($request->name, function ($query, $name) {
            return $query->where('name', "like", "%" . $name . "%");
        })->when($request->bedroom, function ($query, $bedroom) {
            return $query->where('bedroom', $bedroom);
        })->when($request->bathroom, function ($query, $bathroom) {
            return $query->where('bathroom', $bathroom);
        })->when($request->storey, function ($query, $storey) {
            return $query->where('storey', $storey);
        })->when($request->garage, function ($query, $garage) {
            return $query->where('garage', $garage);
        })->when($request->min_price, function ($query, $min_price) use ($request) {
            return $query->wherebetween('price', [$min_price, $request->max_price]);
        })->when($request->max_price, function ($query, $max_price) use ($request) {
            return $query->wherebetween('price', [$request->min_price, $max_price]);
        })->get();
    }
}
