<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyInfo;
use App\Philosophy;
use App\FileUpload;
use App\Lib\FileUploadUtil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class PhilosophyController extends Controller
{
    public function index(Request $request)
    {
        $list = CompanyInfo::where("status", 1)->latest()->get();
        return view('admin.companyinfo.index', compact('list'));
    }

    public function create(Request $request)
    {
        return view('admin.philosophy.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'title'     => 'required',
            'title_en'     => 'required',
            'middle_title'   => 'required',
            'middle_content'    => 'required',
            'bottom_title'    => 'required',
            'bottom_title_en'    => 'required',
            'bottom_image'    => 'required',
            'bottom_image_intro'    => 'required',
            'bottom_content'    => 'required',
            'cover_image'    => 'required',
            'cover_image_intro'    => 'required',
            'status'    => 'required',
        ]);

        $cover_image_id = $bottom_image_id = 0;
        $cover_image_link = $bottom_image_link = '';
        $image = $request->file('cover_image');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $cover_image_id = $fileUpload->id;
            $cover_image_link = $fileUpload->file_link;
        }
        $image = $request->file('bottom_image');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $bottom_image_id = $fileUpload->id;
            $bottom_image_link = $fileUpload->file_link;
        }

        $contentArr = [
            'title'     => $request->title ?? "",
            'title_en'     => $request->title_en ?? "",
            'middle_title'   => $request->middle_title ?? "",
            'middle_content'    => $request->middle_content ?? "",
            'bottom_title'    => $request->bottom_title ?? "",
            'bottom_title_en'    => $request->bottom_title_en ?? "",
            'bottom_image_id'    => $bottom_image_id,
            'bottom_image_link'    => $bottom_image_link,
            'bottom_image_intro'    => $request->bottom_image_intro ?? "",
            'bottom_content'    => $request->bottom_content ?? "",
            'cover_image_id'    => $cover_image_id,
            'cover_image_link'    => $cover_image_link,
            'cover_image_intro'    => $request->cover_image_intro ?? "",
        ];
        $companyinfo = new CompanyInfo();
        $companyinfo->name = 'philosophy';
        $companyinfo->content= serialize($contentArr);
        $companyinfo->status = $request->status ?? 1;
        $companyinfo->created_at = time();
        $companyinfo->save();

        toastr()->success('message', 'companyinfo created successfully.');
        return redirect()->route('admin.companyinfo.index');
    }

    public function show(Philosophy $philosophy)
    {
        $companyinfo = Philosophy::find($philosophy->id);
        $content = unserialize($companyinfo->content);
        return view('admin.philosophy.show', compact('companyinfo', 'content'));
    }

    public function edit(Philosophy $philosophy)
    {
        $companyinfo = Philosophy::find($philosophy->id);
        $content = unserialize($companyinfo->content);
        return view('admin.philosophy.edit', compact('companyinfo', 'content'));
    }

    public function update(Request $request, Philosophy $philosophy)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'title'     => 'required',
            'title_en'     => 'required',
            'middle_title'   => 'required',
            'middle_content'    => 'required',
            'bottom_title'    => 'required',
            'bottom_title_en'    => 'required',
            'bottom_image_intro'    => 'required',
            'bottom_content'    => 'required',
            'cover_image_intro'    => 'required',
        ]);

        $cover_image_id = $bottom_image_id = 0;
        $cover_image_link = $bottom_image_link = '';
        $image = $request->file('cover_image');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $cover_image_id = $fileUpload->id;
            $cover_image_link = $fileUpload->file_link;
        }
        $image = $request->file('bottom_image');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $bottom_image_id = $fileUpload->id;
            $bottom_image_link = $fileUpload->file_link;
        }

        $companyinfo = Philosophy::find($philosophy->id);
        $contentArr = unserialize($companyinfo->content);
        if($cover_image_id <> 0) {
            $contentArr['cover_image_id'] = $cover_image_id;
            $contentArr['cover_image_link'] = $cover_image_link;
        }
        if($bottom_image_id <> 0) {
            $contentArr['bottom_image_id'] = $bottom_image_id;
            $contentArr['bottom_image_link'] = $bottom_image_link;
        }

        $contentArr['title'] = $request->title ?? "";
        $contentArr['title_en'] = $request->title_en ?? "";
        $contentArr['middle_title'] = $request->middle_title ?? "";
        $contentArr['middle_content'] = $request->middle_content ?? "";
        $contentArr['bottom_title'] = $request->bottom_title ?? "";
        $contentArr['bottom_title_en'] = $request->bottom_title_en ?? "";
        $contentArr['bottom_image_intro'] = $request->bottom_image_intro ?? "";
        $contentArr['bottom_content'] = $request->bottom_content ?? "";
        $contentArr['cover_image_intro'] = $request->cover_image_intro ?? "";
        $companyinfo->content= serialize($contentArr);
        $companyinfo->updated_at = time();
        $companyinfo->save();
        toastr()->success('message', 'companyinfo updated successfully.');
        return redirect()->route('admin.companyinfo.index');
    }
    
    public function destroy(Philosophy $companyinfo)
    {
        $companyinfo = Philosophy::find($companyinfo->id);
        $companyinfo->delete();

        toastr()->success('message', 'companyinfo deleted successfully.');
        return back();
    }


}
