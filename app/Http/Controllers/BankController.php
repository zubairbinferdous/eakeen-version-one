<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function bank()
    {
        $data = Bank::get();
        return view('admin.Bank.bank', compact('data'));
    }

    public function newAccount(Request $request)
    {
        // return $request;
        Bank::create([
            'name' => $request->name,
            'openingBalance' => $request->openingBalance,
            'currentBalance' => $request->currentBalance,
        ]);
        return redirect()->route('bankData')->with('success', 'Bank Account Create successfully!');
    }
}
