<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HomePage;
use App\FileUpload;
use App\Lib\FileUploadUtil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class HomePageController extends Controller
{
    public function index(Request $request)
    {
        $list = HomePage::where("id", '>', 0)->latest()->get();
        return view('admin.homepage.index', compact('list'));
    }

    public function create(Request $request)
    {
        return view('admin.homepage.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bk_image'     => 'required',
            'news_ids'     => 'required',
            //'status'   => 'required',
        ]);

        $hm = new HomePage();
        $hm->bk_image = $request->bk_image ?? "";
        $hm->news_ids = $request->news_ids ?? "";
        $hm->status = $request->status ?? 1;
        $hm->created_at = time();
        $hm->save();

        toastr()->success('message', 'HomePage created successfully.');
        return redirect()->route('admin.homepage.index');
    }

    public function show(HomePage $homepage)
    {
        $hm = HomePage::find($homepage->id);
        return view('admin.homepage.show', compact('hm'));
    }

    public function edit(HomePage $homepage)
    {
        $hm = HomePage::find($homepage->id);
        $bk_image_id = intval($hm->bk_image);
        $file = FileUpload::find($bk_image_id);
        $bk_image_link = '';
        if(!empty($file) && !empty($file->file_link)) {
            $bk_image_link = $file->file_link;
        }
        return view('admin.homepage.edit', compact('hm', 'bk_image_link'));
    }

    public function update(Request $request, HomePage $homepage)
    {
        $request->validate([
            //'bk_image'     => 'required',
            //'news_ids'     => 'required',
            //'status'   => 'required',
        ]);

        $f = $request->file('bk_image');
        $bk_image_id = 0;
        if($f) {
            $fileUpload = FileUploadUtil::uploadFile($f);
            $bk_image_id = $fileUpload->id;
        }
        $hm = HomePage::find($homepage->id);
        if($bk_image_id<>0) {
           $hm->bk_image = $bk_image_id;
        }

        //$hm->news_ids = $request->news_ids ?? "";
        $hm->status = $request->status ?? 1;
        $hm->updated_at = time();
        $hm->save();

        toastr()->success('message', 'HomePage updated successfully.');
        return redirect()->route('admin.homepage.edit', compact('hm'));
    }
    
    public function destroy(HomePage $homepage)
    {
        $hm = HomePage::find($homepage->id);
        $hm->delete();

        toastr()->success('message', 'HomePage deleted successfully.');
        return back();
    }


}
