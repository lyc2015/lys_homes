<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Career;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class CareerController extends Controller
{
    public function index(Request $request)
    {
        $list = Career::where("status", 1)->latest()->get();
        return view('admin.career.index', compact('list'));
    }

    public function create(Request $request)
    {
        return view('admin.career.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            //'type'     => 'required',
            'name'     => 'required',
            'intro'   => 'required',
            'requirement'   => 'required',
            'work_place'    => 'required',
            'work_time'    => 'required',
            'rest_time'    => 'required',
            'salary'    => 'required',
            'status'    => 'required',
            'show_rank' => 'required'
        ]);

        $career = new Career();
        $career->type = 1;
        $career->name= $request->name;
        $career->intro= $request->intro ?? "";
        $career->requirement= $request->requirement ?? "";
        $career->work_place= $request->work_place ?? "";
        $career->work_time = $request->work_time ?? "";
        $career->rest_time = $request->rest_time ?? "";
        $career->salary = $request->salary ?? "";
        $career->status = $request->status ?? 1;
        $career->show_rank= $request->show_rank ?? 1;
        $career->created_at = time();
        $career->save();

        toastr()->success('message', 'Career created successfully.');
        return redirect()->route('admin.career.index');
    }


    public function show(Career $career)
    {
        $career = Career::find($career->id);
        return view('admin.career.show', compact('career'));
    }

    public function edit(Career $career)
    {
        $career = Career::find($career->id);
        return view('admin.career.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        $request->validate([
            'name'     => 'required',
            'intro'   => 'required',
            'requirement'   => 'required',
            'work_place'    => 'required',
            'work_time'    => 'required',
            'rest_time'    => 'required',
            'salary'    => 'required',
            //'status'    => 'required',
            'show_rank' => 'required'
        ]);
    
        $career = Career::find($career->id);

        //$career->type = $request->type;
        $career->name= $request->name;
        $career->intro= $request->intro ?? "";
        $career->requirement= $request->requirement ?? "";
        $career->work_place= $request->work_place ?? "";
        $career->work_time = $request->work_time ?? "";
        $career->rest_time = $request->rest_time ?? "";
        $career->salary = $request->salary ?? "";
        //$career->status = $request->status ?? 1;
        $career->show_rank= $request->show_rank ?? 1;
        $career->updated_at = time();
        $career->save();

        toastr()->success('message', 'Career updated successfully.');
        return redirect()->route('admin.career.index');
    }
    
    public function destroy(Career $career)
    {
        $career = Career::find($career->id);
        $career->delete();

        toastr()->success('message', 'Career deleted successfully.');
        return back();
    }

}
