<?php

namespace App\Http\Controllers;

use App\Models\Affiliated;
use Illuminate\Http\Request;

class AffiliatedController extends Controller
{
    public function affiliate()
    {
        return view('admin.affiliate.addPackages');
    }

    public function packagesStore(Request $request)
    {

        Affiliated::create([
            'Packages_name' => $request->Packages_name,
            'Packages_amount' => $request->Packages_amount,
            'number' => $request->number,
            'payment_type' => $request->payment_type,
            'noteOne' => $request->noteOne,
            'noteTwo' => $request->noteTwo,
        ]);

        return redirect()->back()->with('success', 'packages add successfully');
    }
}
