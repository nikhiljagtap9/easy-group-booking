<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    // List Hotels
    public function index(){
       // $hotels = Hotel::all();
        $hotels = Hotel::where('is_active',1)->orderBy('id', 'DESC')->get();
        return view('hotel.list',compact('hotels'));
    } 
    //Show add form
    public function create(){
        return view('hotel.add');
    }

    // Store hotel
    public function store(Request $request){
        $request->validate([
            'hotel_name' => 'required|string|max:255|unique:hotels,hotel_name',
        ]);

        Hotel::create([
            'hotel_name'=> $request->hotel_name,
            'created_by' => Auth::id(),
            'updated_by' => Auth::id(),
        ]);

        return redirect()->route('hotel.list')->with('success','Hotel Added Successfully!');
    }

    public function edit(Hotel $hotel)
    {
        return view('hotel.edit', compact('hotel'));
    }

    public function update(Request $request, Hotel $hotel)
    {
        $request->validate([
            'hotel_name' => 'required|string|max:255|unique:hotels,hotel_name,'. $hotel->id,
        ]);

        $hotel->update([
            'hotel_name' => $request->hotel_name,
            'updated_by' => Auth::id(),
        ]);

        return redirect()->route('hotel.list')->with('success', 'Hotel updated successfully!');
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->is_active = 0; // Soft delete
        $hotel->save();
        return redirect()->route('hotel.list')->with('success', 'Hotel deleted successfully!');
    }

    public function storeAjax(Request $request)
    {
        $request->validate([
            'hotel_name' => 'required|string|max:255',
        ]);

        $hotel = new Hotel();
        $hotel->hotel_name = $request->hotel_name;
        $hotel->created_by = Auth::id(); // or any default
        $hotel->updated_by = Auth::id();
        $hotel->save();

        return response()->json([
            'status' => 'success',
            'hotel' => $hotel
        ]);
    }

}
