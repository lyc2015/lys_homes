<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyInfoZh;
use App\IndexZh;
use App\FileUpload;
use App\Lib\FileUploadUtil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class IndexZhController extends Controller
{
    public function index(Request $request)
    {
        $list = CompanyInfo::where("status", 1)->latest()->get();
        return view('admin.companyinfo.index', compact('list'));
    }

    public function create(Request $request)
    {
        return view('admin.companyinfozh.Index.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'name_zh'     => 'required',
            'title'     => 'required',
            'bottom_image'   => 'required',
            'bottom_title_left'    => 'required',
            'bottom_title_right'    => 'required',
            'bottom_content'    => 'required',
            'status'    => 'required',
        ]);

        $bottom_image_id = 0;
        $bottom_image_link = '';
        $image = $request->file('bottom_image');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $bottom_image_id = $fileUpload->id;
            $bottom_image_link = $fileUpload->file_link;
        }
        $contentArr = [
            'name_zh'     => $request->name_zh ?? "",
            'title'     => $request->title ?? "",
            'bottom_title_left'    => $request->bottom_title_left ?? "",
            'bottom_title_right'    => $request->bottom_title_right ?? "",
            'bottom_image_id'    => $bottom_image_id,
            'bottom_image_link'    => $bottom_image_link,
            'bottom_content'    => $request->bottom_content ?? "",
        ];
        $companyinfo = new CompanyInfoZh();
        $companyinfo->name = 'indexzh';
        $companyinfo->content= serialize($contentArr);
        $companyinfo->status = $request->status ?? 1;
        $companyinfo->created_at = time();
        $companyinfo->save();

        toastr()->success('message', 'companyinfo created successfully.');
        return redirect()->route('admin.companyinfozh.index');
    }

    public function show(IndexZh $indexzh)
    {
        $companyinfo = IndexZh::find($indexzh->id);
        $content = unserialize($companyinfo->content);
        return view('admin.companyinfozh.index.show', compact('companyinfo', 'content'));
    }

    public function edit(IndexZh $indexzh)
    {
        $companyinfo = IndexZh::find($indexzh->id);
        $content = unserialize($companyinfo->content);
        return view('admin.companyinfozh.index.edit', compact('companyinfo', 'content'));
    }

    public function update(Request $request, IndexZh $indexzh)
    {
        $request->validate([
            'name_zh'     => 'required',
            'title'     => 'required',
            'bottom_title_left'    => 'required',
            'bottom_title_right'    => 'required',
            'bottom_content'    => 'required',
            'status'    => 'required',
        ]);

        $bottom_image_id = 0;
        $bottom_image_link = '';
        $image = $request->file('bottom_image');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $bottom_image_id = $fileUpload->id;
            $bottom_image_link = $fileUpload->file_link;
        }
 
        $companyinfo = IndexZh::find($indexzh->id);
        $contentArr = unserialize($companyinfo->content);
        if($bottom_image_id <> 0) {
            $contentArr['bottom_image_id'] = $bottom_image_id;
            $contentArr['bottom_image_link'] = $bottom_image_link;
        }
        $contentArr['name_zh'] = $request->name_zh ?? "";
        $contentArr['title'] = $request->title ?? "";
        $contentArr['bottom_title_left'] = $request->bottom_title_left ?? "";
        $contentArr['bottom_title_right'] = $request->bottom_title_right ?? "";
        $contentArr['bottom_content'] = $request->bottom_content ?? "";
        $companyinfo->content= serialize($contentArr);
        $companyinfo->updated_at = time();
        $companyinfo->save();
        toastr()->success('message', 'companyinfo updated successfully.');
        return redirect()->route('admin.companyinfozh.index');
    }
    
}
