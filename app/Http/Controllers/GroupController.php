<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class GroupController extends Controller
{
    public function index(){
      $groups = Group::where('is_active',1)->orderBy('id', 'DESC')->get();  
      return view('group.list',compact('groups'));
    }

    public function create(){
        return view('group.add');
    }

    public function store(Request $request){
        $request->validate([
            'group_name' => 'required|string|max:255|unique:groups,group_name',
        ]);

        Group::create([
            'group_name'=> $request->group_name,
            'created_by' => Auth::id(),
            'updated_by' => Auth::id(),
        ]);

        return redirect()->route('group.list')->with('success','Group Added Successfully!');
    }

    public function edit(Group $group)
    {
        return view('group.edit', compact('group'));
    }

    public function update(Request $request, Group $group)
    {
        $request->validate([
            'group_name' => 'required|string|max:255|unique:groups,group_name,' . $group->id,
        ]);

        $group->update([
            'group_name' => $request->group_name,
            'updated_by' => Auth::id(),
        ]);

        return redirect()->route('group.list')->with('success', 'Group updated successfully!');
    }

    public function destroy(Group $group)
    {
        $group->is_active = 0; // Soft delete
        $group->save();
        return redirect()->route('group.list')->with('success', 'Group deleted successfully!');
    }

    public function storeAjax(Request $request)
    {
        $request->validate([
            'group_name' => 'required|string|max:255',
        ]);

        $group = new Group();
        $group->group_name = $request->group_name;
        $group->created_by = Auth::id(); // or any default
        $group->updated_by = Auth::id();
        $group->save();

        return response()->json([
            'status' => 'success',
            'group' => $group
        ]);
    }
}
