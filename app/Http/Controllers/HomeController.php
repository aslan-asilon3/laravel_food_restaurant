<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $foods = Food::all();
        return view('welcome', compact('foods'));

    }
}
