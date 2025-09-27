<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function index(){
        $outlets = Outlet::all();
        return view('outlet-page', compact('outlets'));
    }

    public function search(Request $request){
        $search = $request->input('search');
        $outlets = Outlet::where('city', 'LIKE', '%' . $search . '%')
        ->orWhere('address', 'LIKE', '%' . $search . '%')
        ->get();
        return view('outlet-page', compact('outlets'));  
    }

    public function create(Request $request){
        $outlets = Outlet::All();

        if($request->isMethod(('post'))){
        $validateData = $request->validate([
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:50',
            'opening_time' => 'required',
            'closing_time' => 'required'
        ]);
    
            $outlets = Outlet::create($validateData);
            $outlets->save();
        
            return redirect()->back()->with('success', 'Outlet is added successfully!');
        }
        return view('add-outlet', compact('outlets'));
    }
    public function edit($id){
        $outlets = Outlet::find($id);
        return view('edit-outlet', compact('outlets'));
    }

    public function update(Request $request, $id){
        $validateData = $request->validate([
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:50',
            'opening_time' => 'required',
            'closing_time' => 'required'
        ]);

        $outlets = Outlet::findOrFail($id);
        $outlets->update($validateData);

        return redirect('/add-outlet')->with('success', 'Outlet is updated successfully!');
    }
}
