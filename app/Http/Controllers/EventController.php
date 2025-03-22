<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Hotel;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the events.
     */
    public function index()
    {
        $events = Event::with(['hotel', 'group', 'creator', 'updater'])->where('is_active', 1)->orderBy('id', 'DESC')->get();
        return view('event.list', compact('events'));
    }

    /**
     * Show the form for creating a new event.
     */
    public function create()
    {
        $hotels = Hotel::where('is_active', 1)->orderBy('hotel_name')->get();
        $groups = Group::where('is_active', 1)->orderBy('group_name')->get();
        return view('event.add', compact('hotels', 'groups'));
    }

    /**
     * Store a newly created event.
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'client_pay_form' => 'required',
            'client_pay_to' => 'required',
            'room_rate' => 'required|numeric',
            'extra_guest_rate' => 'required|numeric',
            'early_check_in_fee' => 'required|numeric',
            'late_check_out_fee' => 'required|numeric',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|after_or_equal:check_in_date',
            'check_out_time' => 'required',
            'check_in_time' => 'required',
            'hotel_name' => 'required|integer|exists:hotels,id',
            'group' => 'required|integer|exists:groups,id',
        ]);

        // Event::create([
        //     'event_name' => $request->event_name,
        //     'start_date' => $request->start_date,
        //     'end_date' => $request->end_date,
        //     'hotel_name' => $request->hotel_name,
        //     'client_pay_form' => $request->client_pay_form,
        //     'client_pay_to' => $request->client_pay_to,
        //     'room_rate' => $request->room_rate,
        //     'extra_guest_rate' => $request->extra_guest_rate,
        //     'early_check_in_fee' => $request->early_check_in_fee,
        //     'late_check_out_fee' => $request->late_check_out_fee,
        //     'check_in_date' => $request->check_in_date,
        //     'check_out_date' => $request->check_out_date,
        //     'check_out_time' => $request->check_out_time,
        //     'check_in_time' => $request->check_in_time,
        //     'cut_off_date' => $request->cut_off_date,
        //     'cut_off_cost' => $request->cut_off_cost,
        //     'early_departure_cost' => $request->early_departure_cost,
        //     'deadline_first' => $request->deadline_first,
        //     'deadline_second' => $request->deadline_second,
        //     'group' => $request->group,
        //     'created_by' => Auth::id(),
        //     'updated_by' => Auth::id(),
        //     'is_active' => 1,
        // ]);

        Event::create($request->all());

        // Flash session message
        session()->flash('event_added', true);

        return redirect()->route('event.add'); // redirect back to form

       // return redirect()->route('event.list')->with('success', 'Event Added Successfully!');
    }

    /**
     * Show the form for editing the event.
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $hotels = Hotel::where('is_active', 1)->get();
        $groups = Group::where('is_active', 1)->get();
        return view('event.add', compact('event', 'hotels', 'groups'));
    }

    /**
     * Update the specified event.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
        ]);

        $event = Event::findOrFail($id);
        $event->update([
            'event_name' => $request->event_name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'hotel_name' => $request->hotel_name,
            'client_pay_form' => $request->client_pay_form,
            'client_pay_to' => $request->client_pay_to,
            'room_rate' => $request->room_rate,
            'extra_guest_rate' => $request->extra_guest_rate,
            'early_check_in_fee' => $request->early_check_in_fee,
            'late_check_out_fee' => $request->late_check_out_fee,
            'check_in_date' => $request->check_in_date,
            'check_out_date' => $request->check_out_date,
            'check_out_time' => $request->check_out_time,
            'check_in_time' => $request->check_in_time,
            'cut_off_date' => $request->cut_off_date,
            'cut_off_cost' => $request->cut_off_cost,
            'early_departure_cost' => $request->early_departure_cost,
            'deadline_first' => $request->deadline_first,
            'deadline_second' => $request->deadline_second,
            'group' => $request->group,
            'updated_by' => Auth::id(),
        ]);

        return redirect()->route('event.list')->with('success', 'Event Updated Successfully!');
    }

    /**
     * Soft delete the specified event.
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->update(['is_active' => 0]);
        return redirect()->route('event.list')->with('success', 'Event Deleted Successfully!');
    }

}
