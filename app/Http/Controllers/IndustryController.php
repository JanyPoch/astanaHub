<?php


namespace App\Http\Controllers;


use App\Http\Resources\IndustryResource;
use App\Models\Industry;

class IndustryController extends Controller
{
    public function index()
    {
        return IndustryResource::collection(Industry::all());
    }

}
