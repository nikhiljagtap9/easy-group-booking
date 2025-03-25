<?php

namespace App\Http\Controllers;

use App\Models\FlightDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\GuestDetail;
use App\Models\Group;
use Illuminate\Support\Facades\Storage;
use App\Models\Country;

class GuestController extends Controller
{
    public function showLoginForm()
    {
        return view('guest.login'); // Your login form blade file
    }

    public function showRegisterForm()
    {
        return view('guest.register'); // Registration Blade view
    }

   
    public function showForm(Request $request)
    {
        $event_id = $request->query('event_id'); // Get event_id from URL
        
        // fetch countries:
        $countries = Country::orderBy('name')->get();

        // Fetch active groups
        $groups = Group::where('is_active', 1)->orderBy('id', 'DESC')->get();

        // Check if guest detail exists for current user & event_id
        $guestDetail = null;
        $flightDetail = null;
        
        if ($event_id) {
            $guestDetail = GuestDetail::where('user_id', Auth::id())
                                    ->where('event_id', $event_id)
                                    ->with('flightDetail')
                                    ->first();
            if ($guestDetail) {
                $flightDetail = $guestDetail->flightDetail;
            }                        
        }

        return view('guest.form', compact('groups', 'guestDetail','flightDetail','countries','event_id'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6', // For password confirmation
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Save to UserDetails table
        UserDetail::create([
            'user_id' => $user->id,
            'surname' => '',
            'usertype' => $request->usertype,
        ]);

        // Assign Role based on usertype
        $roleName = $request->usertype; // admin, client, guest
        $role = Role::where('name', $roleName)->first();

        if ($role) {
            $user->assignRole($role); // Auto adds to model_has_roles
        }

        // Optional: Add entry in user_details table here if needed.

        return redirect()->route('guest.login')->with('success', 'Registration Successful! Please login.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Optional: Fetch additional user details
            $user = Auth::user();
            $userDetails = UserDetail::where('user_id', $user->id)->first();

            return redirect()->route('guest.form')->with('success', 'Login Successful!');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('guest.login')->with('success', 'Logged out successfully!');
    }

    public function storeStep1(Request $request)
    {
        // Validate data
        $validated = $request->validate([
            'title'            => 'nullable|string|max:50',
            'full_name'        => 'required|string|max:255',
            'nickname'         => 'nullable|string|max:255',
            'dummy_booking'    => 'nullable|boolean',
            'group'            => 'required|string|max:255',
            'employee_id'      => 'nullable|string|max:100',
            'email' => 'required|email|unique:guest_details,email,' . $request->guest_id, // unique except current record
            'whatsapp_number'  => 'nullable|string|max:20',
            'country_born'     => 'nullable|string|max:100',
            'country_based'    => 'nullable|string|max:100',
            'tshirt_size'      => 'nullable|string|max:10',
            'profile_picture'  => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'passport_expiry'  => 'nullable|date',
            'event_id'         => 'required|exists:events,id',
            'current_step'     => 'nullable',
        ]);

        $validated['user_id'] = Auth::id();  // Logged in user ID


        // Handle file upload
        if ($request->hasFile('profile_picture')) {
            // Ensure directory exists
           if (!Storage::disk('public')->exists('profile_picture')) {
               Storage::disk('public')->makeDirectory('profile_picture');
           }
           $fileName = time().'_'.$request->profile_picture->getClientOriginalName(); // getClientOriginalName is get origanl file name
           $filePath = $request->file('profile_picture')->storeAs('profile_picture', $fileName, 'public');
           // Save file path in validated data
           $validated['profile_picture'] = $filePath;
       }else {
            // Keep the existing file
            $validated['profile_picture'] = $request->input('existing_profile_picture');
        }


        // Check if guest_id exists (update) or insert new
        if ($request->guest_id) {
            $guest = GuestDetail::find($request->guest_id);
            if ($guest) {
                $guest->update($validated);
            } else {
                $guest = GuestDetail::create($validated);
            }
        } else {
            $guest = GuestDetail::create($validated);
        }

        // Return response with guest_id
        return response()->json(['status' => 'success', 'guest_id' => $guest->id]);
    }

    public function storeStep2(Request $request)
    {
        $validated = $request->validate([
            'guest_detail_id' => 'required|exists:guest_details,id',
            'flight_ticket' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'visa_required' => 'required|boolean',
            'visa_status' => 'string    ',
            'arrival_flight_number' => 'required|string',
            'arrival_flight_date' => 'required|date',
            'arrival_flight_time' => 'required',
            'departure_flight_number' => 'required|string',
            'departure_flight_date' => 'required|date',
            'departure_flight_time' => 'required',
        ]);

        // Handle file upload
        if ($request->hasFile('flight_ticket')) {
            // Ensure directory exists
           if (!Storage::disk('public')->exists('flight_tickets')) {
               Storage::disk('public')->makeDirectory('flight_tickets');
           }
           $fileName = time().'_'.$request->flight_ticket->getClientOriginalName();
           $filePath = $request->file('flight_ticket')->storeAs('flight_tickets', $fileName, 'public');
           // Save file path in validated data
           $validated['flight_ticket'] = $filePath;
       }


        // Check if guest_id exists (update) or insert new
        if ($request->guest_detail_id) {
            $flight = FlightDetail::where('guest_detail_id', $request->guest_detail_id)->first();
            if ($flight) {
                $flight->update($validated);
            } else {
                $flight = FlightDetail::create($validated);
            }
        } else {
            $flight = FlightDetail::create($validated);
        }

        // Update `current_step` in guest_details table
        GuestDetail::where('id', $request->guest_detail_id)->update(['current_step' => $request->current_step]);


        return response()->json(['status' => 'success']);
    }

}
