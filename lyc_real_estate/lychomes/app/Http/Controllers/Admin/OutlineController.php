<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyInfo;
use App\Outline;
use App\FileUpload;
use App\Lib\FileUploadUtil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class OutlineController extends Controller
{
    public function index(Request $request)
    {
        $list = CompanyInfo::where("status", 1)->latest()->get();
        return view('admin.companyinfo.index', compact('list'));
    }

    public function create(Request $request)
    {
        return view('admin.Outline.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'title'     => 'required',
            'title_en'     => 'required',
            'company_name'   => 'required',
            'company_adress'   => 'required',
            'legal_person_code'    => 'required',
            'login_code'    => 'required',
            'tel'    => 'required',
            'register_capital'    => 'required',
            'establish_time'    => 'required',
            'employee_count'    => 'required',
            'legal_person'    => 'required',
            'license_number'    => 'required',
            'business_content'    => 'required',
            'membership'    => 'required',
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
            'company_name'   => $request->company_name ?? "",
            'company_adress'   => $request->company_adress ?? "",
            'legal_person_code'    => $request->legal_person_code ?? "",
            'login_code'    => $request->login_code ?? "",
            'tel'    => $request->tel ?? "",
            'register_capital'    => $request->register_capital ?? "",
            'establish_time'    => $request->establish_time ?? "",
            'employee_count'    => $request->employee_count ?? "",
            'legal_person'    => $request->legal_person ?? "",
            'license_number'    => $request->license_number ?? "",
            'business_content'    => $request->business_content ?? "",
            'membership'    => $request->membership ?? "",
            'cover_image_id'    => $cover_image_id,
            'cover_image_link'    => $cover_image_link,
            'cover_image_intro'    => $request->cover_image_intro ?? "",
        ];
        $companyinfo = new CompanyInfo();
        $companyinfo->name = 'outline';
        $companyinfo->content= serialize($contentArr);
        $companyinfo->status = $request->status ?? 1;
        $companyinfo->created_at = time();
        $companyinfo->save();

        toastr()->success('message', 'companyinfo created successfully.');
        return redirect()->route('admin.companyinfo.index');
    }

    public function show(Outline $outline)
    {
        $companyinfo = Outline::find($outline->id);
        $content = unserialize($companyinfo->content);
        return view('admin.Outline.show', compact('companyinfo', 'content'));
    }

    public function edit(Outline $outline)
    {
        $companyinfo = Outline::find($outline->id);
        $content = unserialize($companyinfo->content);
        return view('admin.Outline.edit', compact('companyinfo', 'content'));
    }

    public function update(Request $request, Outline $outline)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'title'     => 'required',
            'title_en'     => 'required',
            'company_name'   => 'required',
            'company_adress'   => 'required',
            'legal_person_code'    => 'required',
            'login_code'    => 'required',
            'tel'    => 'required',
            'register_capital'    => 'required',
            'establish_time'    => 'required',
            'employee_count'    => 'required',
            'legal_person'    => 'required',
            'license_number'    => 'required',
            'business_content'    => 'required',
            'membership'    => 'required',
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

        $companyinfo = Outline::find($outline->id);
        $contentArr = unserialize($companyinfo->content);
        if($cover_image_id <> 0) {
            $contentArr['cover_image_id'] = $cover_image_id;
            $contentArr['cover_image_link'] = $cover_image_link;
        }

        $contentArr['title'] = $request->title ?? "";
        $contentArr['title_en'] = $request->title_en ?? "";
        $contentArr['company_name'] = $request->company_name ?? "";
        $contentArr['company_adress'] = $request->company_adress ?? "";
        $contentArr['legal_person_code'] = $request->legal_person_code ?? "";
        $contentArr['login_code'] = $request->login_code ?? "";
        $contentArr['tel'] = $request->tel ?? "";
        $contentArr['register_capital'] = $request->register_capital ?? "";
        $contentArr['establish_time'] = $request->establish_time ?? "";
        $contentArr['employee_count'] = $request->employee_count ?? "";
        $contentArr['legal_person'] = $request->legal_person ?? "";
        $contentArr['license_number'] = $request->license_number ?? "";
        $contentArr['business_content'] = $request->business_content ?? "";
        $contentArr['membership'] = $request->membership ?? "";
        $contentArr['cover_image_intro'] = $request->cover_image_intro ?? "";

        $companyinfo->content= serialize($contentArr);
        $companyinfo->updated_at = time();
        $companyinfo->save();
        toastr()->success('message', 'companyinfo updated successfully.');
        return redirect()->route('admin.companyinfo.index');
    }
    
    public function destroy(Outline $companyinfo)
    {
        $companyinfo = Outline::find($companyinfo->id);
        $companyinfo->delete();

        toastr()->success('message', 'companyinfo deleted successfully.');
        return back();
    }


}
