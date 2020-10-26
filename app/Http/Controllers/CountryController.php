<?php


namespace App\Http\Controllers;


use App\Http\Resources\CountryResource;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        return CountryResource::collection(Country::all());
    }
}
