<?php


namespace App\Http\Controllers;

use \App\Facades\AmoService;


class AmoController extends Controller
{
    protected $apiClient;
    public function __construct()
    {
        $this->apiClient = AmoService::apiClient();
    }

    public function getLeads()
    {
        $leads = $this->apiClient->leads()->get();

        return response()->json($leads);
    }

    public function getTasks()
    {
        $tasks = $this->apiClient->tasks()->get();

        return response()->json($tasks);
    }
}
