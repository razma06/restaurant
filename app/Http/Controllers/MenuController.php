<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home(){
        $menu = Menu::all()->groupBy('category');
        return view('home')->with('menu', $menu);
    }

    public function product(Request $request){
        $name = preg_replace('/\++/', ' ', $request->input('search'));
        $product = Menu::where('name', $name)->get()[0];
        return view('show')->with('menu', $product);
    }

    public function category($name){
        $menu = Menu::where('category', $name)->get();
        return view('categories')->with('menu', $menu);
    }

    public function index()
    {
        $menu = Menu::all();
        return view ('panel')->with('menu', $menu);
    }

    
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>"required",
            'calories'=>"required"
        ]);
        $input = $request->all();
        Menu::create($input);
        return redirect('admin')->with('flash_message', 'Contact Addedd!');  
    }

    
    public function show($id)
    {
        $menu = Menu::find($id);
        return view('show')->with('menu', $menu);
    }

    
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('edit')->with('menu', $menu);
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $input = $request->all();
        $menu->update($input);
        return redirect('admin');  
    }


    public function destroy($id)
    {
        Menu::destroy($id);
        return redirect('admin');  
    }
}
