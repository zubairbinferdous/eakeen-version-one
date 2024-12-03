<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function owner()
    {
        return view('admin.Owner.user_area');
    }

    public function addUser(Request $request)
    {
        Owner::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'invest' => $request->invest,
            'withdraw' => $request->withdraw,
        ]);
        return redirect()->route('ownerData')->with('success', ' added User successfully!');
    }


    public function ownerData()
    {
        $data = Owner::get();
        return view('admin.Owner.userData', compact('data'));
    }

    public function deleteUser($id)
    {
        $data = Owner::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('warning', 'User Delete successfully!');
    }
}
