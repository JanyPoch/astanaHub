<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function setLocale($locale)
    {
        if (App::getLocale() !== $locale) {
            Session::put('locale', $locale);
        }
        if (request()->ajax()) {
            return ['message' => 'success'];
        }
        return redirect()->back();
    }
}
