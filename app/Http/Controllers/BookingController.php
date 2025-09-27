<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Outlet;
use Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    
    public function indexAndcreate(Request $request){
        $bookings = Booking::all();
        $outlets = Outlet::all();
        
        $user = Auth::user();

        if($request->isMethod(('post'))){
            $validateData = $request->validate(
        [
                    'outlet_choice' => 'required|exists:outlets,id',
                    'booking_time' => 'required|date|after:now',
                    'number_of_guests' => 'required|integer|min:1',
                ]
            );
            $validateData['user_id'] = $user->id;
            $bookings = Booking::create($validateData);
            $bookings->save();

            return redirect()->back()->with('success', 'Booking created successfully!');
        }
        
        return view('booking-page', compact('bookings', 'outlets', 'user'));
    }

    public function adminIndex(){
        $bookings = Booking::with('user')->get();
        $outlets = Outlet::all();

        return view('admin.booking-page', compact('bookings', 'outlets'));
    }
}
