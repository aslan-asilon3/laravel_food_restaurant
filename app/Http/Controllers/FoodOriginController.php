<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodOrigin;

class FoodOriginController extends Controller
{
    public function index()
    {
        //get all posts from Model
        $foodorigins = FoodOrigin::paginate(10);

        //passing posts to view
        return view('pages.food-origin.index', compact('foodorigins'));
    }

    public function create()
    {
        return view('pages.food-origin.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'food_id'   => 'required',
            'foodOrigin'   => 'required',
            'image'   => 'required|image|mimes:png,jpg,jpeg,svg',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/foodOrigins', $image->hashName());

        $food = FoodOrigin::create([
            'food_id'     => $request->food_id,
            'foodOrigin'   => $request->foodOrigin,
            'image'     => $image->hashName(),
        ]);



        if($food){
            //redirect dengan pesan sukses
            return redirect()->route('foodorigin.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('foodorigin.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

}
