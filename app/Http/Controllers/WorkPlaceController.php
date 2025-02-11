<?php

namespace App\Http\Controllers;

use App\Models\workPlace;
use App\Models\workPlaceListUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkPlaceController extends Controller
{
    public function workPlace()
    {
        return view('admin.work.addWorkPlace');
    }

    public function workPlaceAddData(Request $request)
    {
        $request->validate([
            'WorkPackages_name' => 'required',
            'WorkPackages_amount' => 'required',
            'WorkPayment_type' => 'required',
            'number' => 'required',
        ]);

        $workPlace = new workPlace();
        $workPlace->packages_name = $request->WorkPackages_name;
        $workPlace->packages_amount = $request->WorkPackages_amount;
        $workPlace->payment_type = $request->WorkPayment_type;
        $workPlace->number = $request->number;
        $workPlace->status = $request->status ?? 'Publish';
        $workPlace->task_one = $request->taskOne;
        $workPlace->task_two = $request->taskTwo;
        $workPlace->task_three = $request->taskThree;
        $workPlace->task_four = $request->taskFour;
        $workPlace->task_five = $request->taskFive;
        $workPlace->save();
        return redirect()->route('workPlaceAdd')->with('success', 'Work Place Added Successfully');
    }

    public function allWorkPlace()
    {
        $data = workPlace::all();
        return view('admin.work.allWorkPlace', compact('data'));
    }

    public function workPlaceList()
    {
        $data = workPlace::all();
        $workPlaceList = workPlaceListUser::where('user_id', Auth::id())->where('status', 'confirm')->first();
        if ($workPlaceList) {
            $dataId = $workPlaceList->packages_id;
            $dataTask = workPlace::where('id', $dataId)->select('task_one', 'task_two', 'task_three', 'task_four', 'task_five')->first();
            // dd($dataTask);
            return view('worklist', compact('data', 'workPlaceList', 'dataTask'));
        } else {
            return view('worklist', compact('data', 'workPlaceList'));
        }
    }

    public function confirmWorkPlace($id)
    {
        $data = workPlaceListUser::find($id);
        $data->status = 'confirm';
        $data->save();
        return redirect()->back()->with('success', 'Work Place request confirmed successfully');
    }

    public function cancelWorkPlace($id)
    {
        $data = workPlaceListUser::find($id);
        $data->status = 'cancel';
        $data->save();
        return redirect()->back()->with('success', 'Work Place request canceled successfully');
    }

    public function WorkPlaceApply(Request $request)
    {
        $data = workPlace::find($request->id);
        return view('workPlaceApply', compact('data'));
    }

    public function applyForWorkPlace(Request $request)
    {
        $request->validate([
            'PaymentType' => 'required|string',
            'PaymentNumber' => 'required|string',
            'transationNumber' => 'required|string',
            'packagesAmount' => 'required|numeric',
            'packages_id' => 'required|numeric',
        ]);

        workPlaceListUser::create([
            'user_id' => Auth::id(),
            'payment_type' => $request->PaymentType,
            'packages_id' => $request->packages_id,
            'payment_number' => $request->PaymentNumber,
            'transaction_number' => $request->transationNumber,
            'packages_amount' => $request->packagesAmount,
            'status' => 'pending',
        ]);

        return redirect()->route('workPlaceList')->with('success', 'Application for working place submitted successfully!');
    }

    public function allWorkPlaceData()
    {
        $data = workPlaceListUser::all();
        return view('admin.work.allWorkPlaceUser', compact('data'));
    }
}
