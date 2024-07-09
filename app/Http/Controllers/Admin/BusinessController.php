<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyInfo;
use App\Business;
use App\FileUpload;
use App\Lib\FileUploadUtil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class BusinessController extends Controller
{
    public function index(Request $request)
    {
        $list = CompanyInfo::where("status", 1)->latest()->get();
        return view('admin.companyinfo.index', compact('list'));
    }

    public function create(Request $request)
    {
        return view('admin.Business.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'title'     => 'required',
            'title_en'     => 'required',
            'middle_title'   => 'required',
            'middle_image'    => 'required',
            'middle_right_title'    => 'required',
            'middle_right_content'    => 'required',
            'middle_right_bottom_title'    => 'required',
            'middle_right_bottom_content'    => 'required',
            'bottom_images'    => 'required',
            'bottom_titles'    => 'required',
            'bottom_contents'    => 'required',
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

        $middle_image_id = 0;
        $middle_image_link = '';
        $image = $request->file('middle_image');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $middle_image_id = $fileUpload->id;
            $middle_image_link = $fileUpload->file_link;
        }

        $bottoms = [];
        $images = $request->file('bottom_images');
        $bottom_titles = $request->bottom_titles;
        $bottom_contents = $request->bottom_contents;
        if ($images) {
            foreach ($images as  $index => $image) {
                $tmp = [];
                $fileUpload = FileUploadUtil::uploadImg($image);
                $tmp['bottom_image_id'] = $fileUpload->id;
                $tmp['bottom_image_link'] = $fileUpload->file_link;
                $tmp['bottom_title'] = $bottom_titles[$index];
                $tmp['bottom_content'] = $bottom_contents[$index];
                $bottoms[] = $tmp;
            }
        }

        $contentArr = [
            'title'     => $request->title ?? "",
            'title_en'     => $request->title_en ?? "",
            'middle_title'   => $request->middle_title ?? "",
            'middle_image_id'    => $middle_image_id,
            'middle_image_link'    => $middle_image_link,
            'middle_right_title'    => $request->middle_right_title ?? "",
            'middle_right_content'    => $request->middle_right_content ?? "",
            'middle_right_bottom_title'    => $request->middle_right_bottom_title ?? "",
            'middle_right_bottom_content'    => $request->middle_right_bottom_content ?? "",
            'bottoms' => $bottoms,
            'cover_image_id'    => $cover_image_id,
            'cover_image_link'    => $cover_image_link,
            'cover_image_intro'    => $request->cover_image_intro ?? "",
        ];
        $companyinfo = new CompanyInfo();
        $companyinfo->name = 'business';
        $companyinfo->content= serialize($contentArr);
        $companyinfo->status = $request->status ?? 1;
        $companyinfo->created_at = time();
        $companyinfo->save();

        toastr()->success('message', 'companyinfo created successfully.');
        return redirect()->route('admin.companyinfo.index');
    }

    public function show(Business $business)
    {
        $companyinfo = Business::find($business->id);
        $content = unserialize($companyinfo->content);
        return view('admin.Business.show', compact('companyinfo', 'content'));
    }

    public function edit(Business $business)
    {
        $companyinfo = Business::find($business->id);
        $content = unserialize($companyinfo->content);
        return view('admin.Business.edit', compact('companyinfo', 'content'));
    }

    public function update(Request $request, Business $business)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'title'     => 'required',
            'title_en'     => 'required',
            'middle_title'   => 'required',
            'middle_right_title'    => 'required',
            'middle_right_content'    => 'required',
            'middle_right_bottom_title'    => 'required',
            'middle_right_bottom_content'    => 'required',
            'bottom_titles'    => 'required',
            'bottom_contents'    => 'required',
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

        $middle_image_id = 0;
        $middle_image_link = '';
        $image = $request->file('middle_image');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $middle_image_id = $fileUpload->id;
            $middle_image_link = $fileUpload->file_link;
        }

        $companyinfo = Business::find($business->id);
        $images = $request->file('bottom_images');
        $images_arr = [];
        if ($images) {
            foreach ($images as  $index => $image) {
                $tmp = [];
                $fileUpload = FileUploadUtil::uploadImg($image);
                $tmp['bottom_image_id'] = $fileUpload->id;
                $tmp['bottom_image_link'] = $fileUpload->file_link;
                $images_arr[$index] = $tmp;
            }
        }
        $bottom_titles = $request->bottom_titles;
        $bottom_contents = $request->bottom_contents;
        $bottoms = [];
        $contentArr = unserialize($companyinfo->content);
        foreach ($bottom_titles as  $i => $title) {
            $bottoms[$i] = [
                'bottom_title' => $title,
                'bottom_content' => $bottom_contents[$i],
            ];
            if(empty($images_arr[$i])) {
                $bottoms[$i]['bottom_image_id'] = $contentArr['bottoms'][$i]['bottom_image_id'];
                $bottoms[$i]['bottom_image_link'] = $contentArr['bottoms'][$i]['bottom_image_link'];
            } else {
                $bottoms[$i]['bottom_image_id'] = $images_arr[$i]['bottom_image_id'];
                $bottoms[$i]['bottom_image_link'] = $images_arr[$i]['bottom_image_link'];
            }
        }

        if($cover_image_id <> 0) {
            $contentArr['cover_image_id'] = $cover_image_id;
            $contentArr['cover_image_link'] = $cover_image_link;
        }
        if($middle_image_id <> 0) {
            $contentArr['middle_image_id'] = $middle_image_id;
            $contentArr['middle_image_link'] = $middle_image_link;
        }

        $contentArr['title'] = $request->title ?? "";
        $contentArr['title_en'] = $request->title_en ?? "";
        $contentArr['middle_title'] = $request->middle_title ?? "";
        $contentArr['middle_right_title'] = $request->middle_right_title ?? "";
        $contentArr['middle_right_content'] = $request->middle_right_content ?? "";
        $contentArr['middle_right_bottom_title'] = $request->middle_right_bottom_title ?? "";
        $contentArr['middle_right_bottom_content'] = $request->middle_right_bottom_content ?? "";
        $contentArr['cover_image_intro'] = $request->cover_image_intro ?? "";
        $contentArr['bottoms'] = $bottoms;
        $companyinfo->content= serialize($contentArr);
        $companyinfo->updated_at = time();
        $companyinfo->save();
        toastr()->success('message', 'companyinfo updated successfully.');
        return redirect()->route('admin.companyinfo.index');
    }
    
    public function destroy(Business $companyinfo)
    {
        $companyinfo = Business::find($companyinfo->id);
        $companyinfo->delete();

        toastr()->success('message', 'companyinfo deleted successfully.');
        return back();
    }


}
