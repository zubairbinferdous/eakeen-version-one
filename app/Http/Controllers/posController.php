<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class posController extends Controller
{

    public function pos()
    {
        return view('admin.pos');
    }



    public function adminDashboard()
    {
        return view('admin.admin_dashboard');
    }


    public function bank()
    {
        return view('admin.bank');
    }

    public function sales()
    {
        return view('admin.sales');
    }
    public function return()
    {
        return view('admin.return');
    }
    public function addPurchases()
    {
        return view('admin.addPurchases');
    }
    public function addPurchasesData()
    {
        return view('admin.addPurchasesData');
    }
    public function addDamages()
    {
        return view('admin.addDamages');
    }
    public function addDamagesData()
    {
        return view('admin.addDamagesData');
    }



    public function confirm()
    {
        return view('admin.confirm');
    }
    public function pending()
    {
        return view('admin.pending');
    }
}
