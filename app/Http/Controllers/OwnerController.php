<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function owner()
    {
        return view('admin.user_area');
    }


    public function ownerData()
    {
        return view('admin.userData');
    }
}
