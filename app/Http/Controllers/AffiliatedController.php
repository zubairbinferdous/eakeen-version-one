<?php

namespace App\Http\Controllers;

use App\Models\Affiliated;
use App\Models\affiliateList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'packages add successfully');
    }

    public function affiliateSystem()
    {

        $data = Affiliated::where('status', 'Publish')->get();
        $userId = Auth()->user()->id;
        $member = affiliateList::where('user_id', $userId)->where('status', 'affiliate')->first();
        $ref =  Auth()->user()->Username;
        $refMember = User::where('Referral', $ref)->get();
        return view('affiliateDashBord', compact('data', 'member', 'refMember'));
    }


    public function affiliateApply(Request $request)
    {
        $Packages_amount = $request->Packages_amount;
        return view('dashBoardApply', compact("Packages_amount"));
    }

    public function applyForAffiliate(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id', // Ensure user_id exists in the users table
            'packagesAmount' => 'required|numeric', // Must be a number
            'Group' => 'required|in:A+,A-,B+,B-,O+,O-,AB+,AB-', // Restrict to valid blood groups
            'Birth' => 'required|date|', // Must be a valid date before today
            'Gender' => 'required|in:male,female', // Only allow 'male' or 'female'
            'WhatsAppNumber' => 'required|', // Valid phone number lengths
            'NidNumber' => 'required|unique:affiliate_lists,NidNumber|digits_between:10,17', // Ensure uniqueness and valid length
            'ImageFront' => 'nullable', // Optional, must be a valid image
            'ImageBack' => 'nullable', // Optional, must be a valid image
            'District' => 'required|string|max:255', // District must be a string
            'Thana' => 'required|string|max:255', // Thana must be a string
            'PaymentType' => 'required|in:Bkash,Nagad,Rocket', // Restrict to allowed payment types
            'PaymentNumber' => 'required|digits_between:10,15', // Payment number must be valid
            'transationNumber' => 'required|unique:affiliate_lists,TransationNumber|alpha_num', // Must be unique and alphanumeric
        ]);

        // Create the affiliate record
        affiliateList::create([
            'user_id' => $validatedData['user_id'],
            'paymentAmount' => $validatedData['packagesAmount'],
            'Group' => $validatedData['Group'],
            'Birth' => $validatedData['Birth'],
            'Gender' => $validatedData['Gender'],
            'WhatsAppNumber' => $validatedData['WhatsAppNumber'],
            'NidNumber' => $validatedData['NidNumber'],
            'ImageFront' => $validatedData['ImageFront'] ?? null,
            'ImageBack' => $validatedData['ImageBack'] ?? null,
            'District' => $validatedData['District'],
            'Thana' => $validatedData['Thana'],
            'PaymentType' => $validatedData['PaymentType'],
            'PaymentNumber' => $validatedData['PaymentNumber'],
            'TransationNumber' => $validatedData['transationNumber'],
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Successfully sent affiliate request.');
    }

    public function takeUserdata($id)
    {
        $takeUserdata = User::where('id', $id)->select('Username')->first();
        $takeUserdataByRef = User::where('Referral', $takeUserdata->Username)->get();
        if ($takeUserdataByRef->isEmpty()) {
            return redirect()->back()->with('warning', 'there is no data found ');
        } else {
            return view('affiliateDashBordList', compact('takeUserdataByRef'));
        }
    }
}
