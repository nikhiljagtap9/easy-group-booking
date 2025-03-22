<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class ClientController extends Controller
{
    /**
     * Show Client Listing
     */
    public function index()
    {
        $clients = User::whereHas('details', function ($query) {  //details is function name in User model
           // $query->where('usertype', 'client'); // Or adjust as needed
        })->with('details')->orderBy('id', 'DESC')->get();

        return view('client.list', compact('clients'));
    }

    /**
     * Show Add Client Form
     */
    public function create()
    {
        return view('client.add'); // Adjust view path if needed
    }

    public function store(Request $request)
    {

        // Validate inputs
        $validator = Validator::make($request->all(), [
            'name'         => 'required|string|max:255',
            'surname'      => 'required|string|max:255',
            'email'        => 'required|email|unique:users,email',
            'password'     => 'required|string|min:6',
            'whatsapp_no'  => 'required|string|max:20',
            'phone'        => 'nullable|string|max:20',
            'usertype'     => 'required|in:admin,client,guest',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // Validate Input
       /* $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]); */

        // Save to Users table
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Save to UserDetails table
        UserDetail::create([
            'user_id' => $user->id,
            'surname' => $request->surname,
            'whatsapp_no' => $request->whatsapp_no,
            'phone' => $request->phone,
            'usertype' => $request->usertype,
        ]);

        // Assign Role based on usertype
        $roleName = $request->usertype; // admin, client, guest
        $role = Role::where('name', $roleName)->first();

        if ($role) {
            $user->assignRole($role); // Auto adds to model_has_roles
        }

        return redirect()->route('client.list')->with('success', 'Client Added Successfully!');
    }
}

