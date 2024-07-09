<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->type;
        $list = Job::where("type", $type)->latest()->get();
        return view('admin.job.index', compact('list', "type"));
    }

    public function create(Request $request)
    {
        $type = $request->get("type");
        return view('admin.job.create', compact("type"));
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'type'     => 'required',
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

        $job = new Job();
        $job->type = $request->type;
        $job->name= $request->name;
        $job->intro= $request->intro ?? "";
        $job->requirement= $request->requirement ?? "";
        $job->work_place= $request->work_place ?? "";
        $job->work_time = $request->work_time ?? "";
        $job->rest_time = $request->rest_time ?? "";
        $job->salary = $request->salary ?? "";
        $job->status = $request->status ?? 1;
        $job->show_rank= $request->show_rank ?? 1;
        $job->created_at = time();
        $job->save();

        toastr()->success('message', 'Job created successfully.');
        return redirect()->route('admin.job.index', ['type'=>$request->type]);
    }


    public function show(Job $job)
    {
        $job = Job::find($job->id);
        return view('admin.job.show', compact('job'));
    }

    public function edit(Job $job)
    {
        $job = Job::find($job->id);
        return view('admin.job.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
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
    
        $job = Job::find($job->id);

        //$job->type = $request->type;
        $job->name= $request->name;
        $job->intro= $request->intro ?? "";
        $job->requirement= $request->requirement ?? "";
        $job->work_place= $request->work_place ?? "";
        $job->work_time = $request->work_time ?? "";
        $job->rest_time = $request->rest_time ?? "";
        $job->salary = $request->salary ?? "";
        //$job->status = $request->status ?? 1;
        $job->show_rank= $request->show_rank ?? 1;
        $job->updated_at = time();
        $job->save();

        toastr()->success('message', 'Job updated successfully.');
        return redirect()->route('admin.job.index', ['type'=>$job->type]);
    }
    
    public function destroy(Job $job)
    {
        $job = Job::find($job->id);
        $job->delete();

        toastr()->success('message', 'Job deleted successfully.');
        return back();
    }


}
