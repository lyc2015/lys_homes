<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FileUpload;
use App\Lib\FileUploadUtil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class FileUploadController extends Controller
{
    public function index(Request $request)
    {
        $list = FileUpload::where("id", '>', 0)->latest()->get();
        return view('admin.fileupload.index', compact('list'));
    }

    public function create(Request $request)
    {
        $type = $request->get("type");
        return view('admin.fileupload.create');
    }

    public function store(Request $request)
    {
        $files = $request->file('files');
        if ($files) {
            foreach ($files as  $index => $f) {
                $fileUpload = FileUploadUtil::uploadFile($f);
            }
        }
        toastr()->success('message', 'File created successfully.');
        return redirect()->route('admin.fileupload.index');
    }


    public function show(FileUpload $fileupload)
    {
        $file = FileUpload::find($fileupload->id);
        return view('admin.fileupload.show', compact('file'));
    }

    public function edit(FileUpload $fileupload)
    {
        $file = FileUpload::find($fileupload->id);
        return view('admin.fileupload.edit', compact('file'));
    }

    public function update(Request $request, FileUpload $fileupload)
    {
        $fileUpload = FileUpload::find($fileupload->id);

        $f = $request->file('file');
        if ($f) {
            $fileUpload = FileUploadUtil::uploadFile($f);
        }

        toastr()->success('message', 'Job updated successfully.');
        return redirect()->route('admin.fileupload.index');
    }
    
    public function destroy(FileUpload $fileupload)
    {
        $f = FileUpload::find($fileupload->id);
        $f->delete();

        toastr()->success('message', 'File deleted successfully.');
        return back();
    }


}
