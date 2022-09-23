<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class LandingPageController extends Controller
{
    public function index()
    {
        // $items = Gallery::with(['galleries'])->get();
        $foods = Food::all();
        return view('pages.landingpage.index',with('foods'));
    }

}
