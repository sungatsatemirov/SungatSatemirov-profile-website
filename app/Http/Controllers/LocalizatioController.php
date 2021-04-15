<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizatioController extends Controller
{
    //
    public function index($locale) {
        App::setlocale($locale);
        session()->put('locale', $locale);
    }
}
