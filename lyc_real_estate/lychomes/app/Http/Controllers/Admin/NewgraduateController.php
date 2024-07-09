<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Newgraduate;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class NewgraduateController extends Controller
{
    public function index(Request $request)
    {
        $list = Newgraduate::where("status", 1)->latest()->get();
        return view('admin.newgraduate.index', compact('list'));
    }

    public function create(Request $request)
    {
        return view('admin.newgraduate.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'type'     => 'required',
            'start_salary'     => 'required',
            'trial_period'     => 'required',
            'hands_on'     => 'required',
            'salary_incr'     => 'required',
            'bonus'     => 'required',
            'work_place'     => 'required',
            'work_time'    => 'required',
            'rest_time'    => 'required',
            'welfare'    => 'required',
            'training_system'    => 'required',
            'status'    => 'required',
            //'show_rank' => 'required'
        ]);

        $newgraduate = new Newgraduate();
        $newgraduate->type = $request->type;
        $newgraduate->start_salary= $request->start_salary;
        $newgraduate->trial_period= $request->trial_period ?? "";
        $newgraduate->hands_on= $request->hands_on ?? "";
        $newgraduate->salary_incr= $request->salary_incr ?? "";
        $newgraduate->bonus= $request->bonus ?? "";
        $newgraduate->work_place= $request->work_place ?? "";
        $newgraduate->work_time= $request->work_time ?? "";
        $newgraduate->rest_time= $request->rest_time ?? "";
        $newgraduate->welfare= $request->welfare ?? "";
        $newgraduate->training_system= $request->training_system ?? "";
        $newgraduate->status = $request->status ?? 1;
        $newgraduate->show_rank= $request->show_rank ?? 1;
        $newgraduate->created_at = time();
        $newgraduate->save();

        toastr()->success('message', 'Newgraduate created successfully.');
        return redirect()->route('admin.newgraduate.index');
    }


    public function show(Newgraduate $newgraduate)
    {
        $newgraduate = Newgraduate::find($newgraduate->id);
        return view('admin.newgraduate.show', compact('newgraduate'));
    }

    public function edit(Newgraduate $newgraduate)
    {
        $newgraduate = Newgraduate::find($newgraduate->id);
        return view('admin.newgraduate.edit', compact('newgraduate'));
    }

    public function update(Request $request, Newgraduate $newgraduate)
    {
        $request->validate([
            'type'     => 'required',
            'start_salary'     => 'required',
            'trial_period'     => 'required',
            'hands_on'     => 'required',
            'salary_incr'     => 'required',
            'bonus'     => 'required',
            'work_place'     => 'required',
            'work_time'    => 'required',
            'rest_time'    => 'required',
            'welfare'    => 'required',
            'training_system'    => 'required',
        ]);
    
        $newgraduate = Newgraduate::find($newgraduate->id);

        $newgraduate->updated_at = time();
        $newgraduate->type = $request->type;
        $newgraduate->start_salary= $request->start_salary;
        $newgraduate->trial_period= $request->trial_period ?? "";
        $newgraduate->hands_on= $request->hands_on ?? "";
        $newgraduate->salary_incr= $request->salary_incr ?? "";
        $newgraduate->bonus= $request->bonus ?? "";
        $newgraduate->work_place= $request->work_place ?? "";
        $newgraduate->work_time= $request->work_time ?? "";
        $newgraduate->rest_time= $request->rest_time ?? "";
        $newgraduate->welfare= $request->welfare ?? "";
        $newgraduate->training_system= $request->training_system ?? "";
        $newgraduate->save();

        toastr()->success('message', 'Newgraduate updated successfully.');
        return redirect()->route('admin.newgraduate.index');
    }
    
    public function destroy(Newgraduate $newgraduate)
    {
        $newgraduate = Newgraduate::find($newgraduate->id);
        $newgraduate->delete();

        toastr()->success('message', 'Newgraduate deleted successfully.');
        return back();
    }


}
