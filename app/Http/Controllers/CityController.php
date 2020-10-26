<?php


namespace App\Http\Controllers;


use App\Http\Requests\City\CityFilter;
use App\Http\Resources\CityResource;
use App\Models\City;

class CityController extends Controller
{
    public function index(CityFilter $filters)
    {
        $cities = City::filter($filters)->paginate(20);
        return CityResource::collection($cities);
    }
}
