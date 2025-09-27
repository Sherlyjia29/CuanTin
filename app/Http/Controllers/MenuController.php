<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Storage;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::paginate(6);
        return view('menu-page', compact('menus'));
    }

    public function search(Request $request){
        $search = $request->input('search');
        $menus = Menu::where('name', 'LIKE', '%' . $search . '%')
        ->orWhere('type', 'LIKE', '%' . $search . '%')
        ->orWhere('description', 'LIKE', '%' . $search . '%')
        ->paginate(6);
        return view('menu-page', compact('menus'));  
    }

    public function create(Request $request){
        $menus = Menu::all();

        if($request->isMethod(('post'))){
        $validateData = $request->validate([
            'type' => 'required|string|exists:menus,type',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'photo' => 'required|image|max:2000'
        ]);

        $imageFile = $request->file('photo');
        $imagePath = time().'.'.$imageFile->getClientOriginalExtension();
        Storage::putFileAs('public/image/menus', $imageFile, $imagePath);
        $imagePath = 'storage/image/menus/'.$imagePath;
        
        $validateData['photo'] = $imagePath;
        $menus = Menu::create($validateData);
        $menus->save();
        
            return redirect()->back()->with('success', 'Menu is added successfully!');
        }
        return view('add-menu', compact('menus'));
    }
    public function edit($id){
        $menus = Menu::find($id);
        return view('edit-menu', compact('menus'));
    }

    public function update(Request $request, $id){
        $validateData = $request->validate([
            'type' => 'required|string',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'photo' => 'required'
        ]);

        $imageFile = $request->file('photo');
        $imagePath = time().'.'.$imageFile->getClientOriginalExtension();
        Storage::putFileAs('public/image/menus', $imageFile, $imagePath);
        $imagePath = 'storage/image/menus/'.$imagePath;
        
        $validateData['photo'] = $imagePath;
        
        $menus = Menu::findOrFail($id);
        
        $menus->update($validateData);

        return redirect('/add-menu')->with('success', 'Menu is updated successfully!');
    }
}
