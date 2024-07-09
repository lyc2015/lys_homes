<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyInfo;
use App\History;
use App\FileUpload;
use App\Lib\FileUploadUtil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class HistoryController extends Controller
{
    public function index(Request $request)
    {
        $list = CompanyInfo::where("status", 1)->latest()->get();
        return view('admin.companyinfo.index', compact('list'));
    }

    public function create(Request $request)
    {
        return view('admin.History.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'title'     => 'required',
            'title_en'     => 'required',
            'middle_title'   => 'required',
            'years'    => 'required',
            'months'    => 'required',
            'intros'    => 'required',
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
 
        $years = $request->years;
        $months = $request->months;
        $intros = $request->intros;
        $company_story = [];
        foreach($years as $k=>$y) {
            if(!isset($company_story[$y])) {
                $company_story[$y] = [];
            }
            if(!isset($company_story[$y][$months[$k]])) {
                $company_story[$y][$months[$k]] = [];
            }
            $company_story[$y][$months[$k]][] = $intros[$k];
        }
        //排序
        foreach($company_story as &$val) {
           ksort($val);
        }
        ksort($company_story);

        $contentArr = [
            'title'     => $request->title ?? "",
            'title_en'     => $request->title_en ?? "",
            'middle_title'     => $request->middle_title ?? "",
            'company_story'    => $company_story ,
            'bottom_content'     => $request->bottom_content ?? "",
            'cover_image_id'    => $cover_image_id,
            'cover_image_link'    => $cover_image_link,
            'cover_image_intro'    => $request->cover_image_intro ?? "",
        ];
        $companyinfo = new CompanyInfo();
        $companyinfo->name = 'history';
        $companyinfo->content= serialize($contentArr);
        $companyinfo->status = $request->status ?? 1;
        $companyinfo->created_at = time();
        $companyinfo->save();

        toastr()->success('message', 'companyinfo created successfully.');
        return redirect()->route('admin.companyinfo.index');
    }

    public function show(History $history)
    {
        $companyinfo = History::find($history->id);
        $content = unserialize($companyinfo->content);
        return view('admin.History.show', compact('companyinfo', 'content'));
    }

    public function edit(History $history)
    {
        $companyinfo = History::find($history->id);
        $content = unserialize($companyinfo->content);
        return view('admin.History.edit', compact('companyinfo', 'content'));
    }

    public function update(Request $request, History $history)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'title'     => 'required',
            'title_en'     => 'required',
            'middle_title'   => 'required',
            'years'    => 'required',
            'months'    => 'required',
            'intros'    => 'required',
            'bottom_content'     => 'required',
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

        $years = $request->years;
        $months = $request->months;
        $intros = $request->intros;
        $company_story = [];
        foreach($years as $k=>$y) {
            if(!isset($company_story[$y])) {
                $company_story[$y] = [];
            }
            if(!isset($company_story[$y][$months[$k]])) {
                $company_story[$y][$months[$k]] = [];
            }
            $company_story[$y][$months[$k]][] = $intros[$k];
        }

        //排序
        foreach($company_story as &$val) {
           ksort($val);
        }
        ksort($company_story);

        $companyinfo = History::find($history->id);
        $contentArr = unserialize($companyinfo->content);

        if($cover_image_id <> 0) {
            $contentArr['cover_image_id'] = $cover_image_id;
            $contentArr['cover_image_link'] = $cover_image_link;
        }

        $contentArr['title'] = $request->title ?? "";
        $contentArr['title_en'] = $request->title_en ?? "";
        $contentArr['middle_title'] = $request->middle_title ?? "";
        $contentArr['company_story'] = $company_story;
        $contentArr['bottom_content'] = $request->bottom_content ?? "";
        $contentArr['cover_image_intro'] = $request->cover_image_intro ?? "";
        $companyinfo->content= serialize($contentArr);
        $companyinfo->updated_at = time();
        $companyinfo->save();
        toastr()->success('message', 'companyinfo updated successfully.');
        return redirect()->route('admin.companyinfo.index');
    }
    
    public function destroy(History $companyinfo)
    {
        $companyinfo = History::find($companyinfo->id);
        $companyinfo->delete();

        toastr()->success('message', 'companyinfo deleted successfully.');
        return back();
    }


}
