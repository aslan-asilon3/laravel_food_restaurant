<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Food;
use Illuminate\Support\Str;

class FoodController extends Controller
{
    public function index()
    {
        //get all posts from Model
        $foods = Food::paginate(10);

        //passing posts to view
        return view('pages.food.index', compact('foods'));
    }

        public function create()
    {
        return view('pages.food.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'image'   => 'required|image|mimes:png,jpg,jpeg,svg',
            'foodName'     => 'required',
            'price'   => 'required',
            'foodRate'   => 'required',
            'foodDiscount'   => 'required',
            'foodDescription'   => 'required',
        ]);

            //upload image
            $image = $request->file('image');
            $image->storeAs('public/foods', $image->hashName());

        $food = food::create([
            'image'     => $image->hashName(),
            'foodName'     => $request->foodName,
            'price'          => $request->price,
            'foodRate'     => $request->foodRate,
            'foodDiscount'     => $request->foodDiscount,
            'foodDescription'     => $request->foodDescription,
        ]);

        if($food){
            //redirect dengan pesan sukses
            return redirect()->route('food.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('food.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Food $food)
    {
        return view('pages.food.edit', compact('food'));
    }


    public function update(Request $request, Food $food)
    {
        $this->validate($request, [
            'foodName'     => 'required',
            'price'   => 'required',
            'foodRate'   => 'required',
            'foodDiscount'   => 'required',
            'foodDescription'   => 'required',
        ]);

        //get data Blog by ID
        $food = Food::findOrFail($food->id);

        if($request->file('image') == "") {

            $food->update([
                'foodName'     => $request->foodName,
                'price'          => $request->price,
                'foodRate'     => $request->foodRate,
                'foodDiscount'     => $request->foodDiscount,
                'foodDescription'     => $request->foodDescription,
            ]);

        } else {

            //hapus old image
            Storage::disk('local')->delete('public/foods/'.$food->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/foods', $image->hashName());

            $food->update([
                'image'     => $image->hashName(),
                'foodName'     => $request->foodName,
                'price'          => $request->price,
                'foodRate'     => $request->foodRate,
                'foodDiscount'     => $request->foodDiscount,
                'foodDescription'     => $request->foodDescription,
            ]);

        }

        if($food){
            //redirect dengan pesan sukses
            return redirect()->route('food.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('food.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
    $food = Food::findOrFail($id);
    Storage::disk('local')->delete('public/foods/'.$food->image);
    $food->delete();

    if($food){
        //redirect dengan pesan sukses
        return redirect()->route('food.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('food.index')->with(['error' => 'Data Gagal Dihapus!']);
    }
    }




}
