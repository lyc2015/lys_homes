<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyInfo;
use App\Release;
use App\FileUpload;
use App\Lib\FileUploadUtil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class ReleaseController extends Controller
{
    public function index(Request $request)
    {
        $list = CompanyInfo::where("status", 1)->latest()->get();
        return view('admin.companyinfo.index', compact('list'));
    }

    public function create(Request $request)
    {
        return view('admin.release.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'title'     => 'required',
            'title_en'     => 'required',
            'cover_image'    => 'required',
            'cover_image_intro'    => 'required',
            'status'    => 'required',
        ]);

        $cover_image_id = 0;
        $cover_image_link = '';
        $image = $request->file('cover_image');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $cover_image_id = $fileUpload->id;
            $cover_image_link = $fileUpload->file_link;
        }
 
        $contentArr = [
            'title'     => $request->title ?? "",
            'title_en'     => $request->title_en ?? "",
            'cover_image_id'    => $cover_image_id,
            'cover_image_link'    => $cover_image_link,
            'cover_image_intro'    => $request->cover_image_intro ?? "",
        ];
        $companyinfo = new CompanyInfo();
        $companyinfo->name = 'release';
        $companyinfo->content= serialize($contentArr);
        $companyinfo->status = $request->status ?? 1;
        $companyinfo->created_at = time();
        $companyinfo->save();

        toastr()->success('message', 'companyinfo created successfully.');
        return redirect()->route('admin.companyinfo.index');
    }

    public function show(Release $release)
    {
        $companyinfo = Release::find($release->id);
        $content = unserialize($companyinfo->content);
        return view('admin.Release.show', compact('companyinfo', 'content'));
    }

    public function edit(Release $release)
    {
        $companyinfo = Release::find($release->id);
        $content = unserialize($companyinfo->content);
        return view('admin.Release.edit', compact('companyinfo', 'content'));
    }

    public function update(Request $request, Release $release)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'title'     => 'required',
            'title_en'     => 'required',
            'cover_image_intro'    => 'required',
        ]);

        $cover_image_id = 0;
        $cover_image_link = '';
        $image = $request->file('cover_image');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $cover_image_id = $fileUpload->id;
            $cover_image_link = $fileUpload->file_link;
        }

        $companyinfo = Release::find($release->id);
        $contentArr = unserialize($companyinfo->content);
        if($cover_image_id <> 0) {
            $contentArr['cover_image_id'] = $cover_image_id;
            $contentArr['cover_image_link'] = $cover_image_link;
        }
        $contentArr['title'] = $request->title ?? "";
        $contentArr['title_en'] = $request->title_en ?? "";
        $contentArr['cover_image_intro'] = $request->cover_image_intro ?? "";
        $companyinfo->content= serialize($contentArr);
        $companyinfo->updated_at = time();
        $companyinfo->save();
        toastr()->success('message', 'companyinfo updated successfully.');
        return redirect()->route('admin.companyinfo.index');
    }
    
    public function destroy(Release $companyinfo)
    {
        $companyinfo = Release::find($companyinfo->id);
        $companyinfo->delete();

        toastr()->success('message', 'companyinfo deleted successfully.');
        return back();
    }


}
