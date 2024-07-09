<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyInfo;
use App\Organization;
use App\FileUpload;
use App\Lib\FileUploadUtil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class OrganizationController extends Controller
{
    public function index(Request $request)
    {
        $list = CompanyInfo::where("status", 1)->latest()->get();
        return view('admin.companyinfo.index', compact('list'));
    }

    public function create(Request $request)
    {
        return view('admin.Organization.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'title'     => 'required',
            'title_en'     => 'required',
            'organization_image'   => 'required',
            'organization_file'    => 'required',
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
 
        $organization_image_id = $organization_file_id = 0;
        $organization_image_link = $organization_file_link = '';
        $image = $request->file('organization_image');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $organization_image_id = $fileUpload->id;
            $organization_image_link = $fileUpload->file_link;
        }
        $file = $request->file('organization_file');
        if ($file) {
            $fileUpload = FileUploadUtil::uploadFile($file);
            $organization_file_id = $fileUpload->id;
            $organization_file_link = $fileUpload->file_link;
        }

        $contentArr = [
            'title'     => $request->title ?? "",
            'title_en'     => $request->title_en ?? "",
            'organization_image_id'    => $organization_image_id,
            'organization_image_link'    => $organization_image_link,
            'organization_file_id'    => $organization_file_id,
            'organization_file_link'    => $organization_file_link,
            'cover_image_id'    => $cover_image_id,
            'cover_image_link'    => $cover_image_link,
            'cover_image_intro'    => $request->cover_image_intro ?? "",
        ];
        $companyinfo = new CompanyInfo();
        $companyinfo->name = 'organization';
        $companyinfo->content= serialize($contentArr);
        $companyinfo->status = $request->status ?? 1;
        $companyinfo->created_at = time();
        $companyinfo->save();

        toastr()->success('message', 'companyinfo created successfully.');
        return redirect()->route('admin.companyinfo.index');
    }

    public function show(Organization $organization)
    {
        $companyinfo = Organization::find($organization->id);
        $content = unserialize($companyinfo->content);
        return view('admin.Organization.show', compact('companyinfo', 'content'));
    }

    public function edit(Organization $organization)
    {
        $companyinfo = Organization::find($organization->id);
        $content = unserialize($companyinfo->content);
        return view('admin.Organization.edit', compact('companyinfo', 'content'));
    }

    public function update(Request $request, Organization $organization)
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

        $organization_image_id = $organization_file_id = 0;
        $organization_image_link = $organization_file_link = '';
        $image = $request->file('organization_image');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $organization_image_id = $fileUpload->id;
            $organization_image_link = $fileUpload->file_link;
        }
        $file = $request->file('organization_file');
        if ($file) {
            $fileUpload = FileUploadUtil::uploadFile($file);
            $organization_file_id = $fileUpload->id;
            $organization_file_link = $fileUpload->file_link;
        }

        $companyinfo = Organization::find($organization->id);
        $contentArr = unserialize($companyinfo->content);
        if($cover_image_id <> 0) {
            $contentArr['cover_image_id'] = $cover_image_id;
            $contentArr['cover_image_link'] = $cover_image_link;
        }
        if($organization_image_id <> 0) {
            $contentArr['organization_image_id'] = $organization_image_id;
            $contentArr['organization_image_link'] = $organization_image_link;
        }
        if($organization_file_id <> 0) {
            $contentArr['organization_file_id'] = $organization_file_id;
            $contentArr['organization_file_link'] = $organization_file_link;
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
    
    public function destroy(Organization $companyinfo)
    {
        $companyinfo = Organization::find($companyinfo->id);
        $companyinfo->delete();

        toastr()->success('message', 'companyinfo deleted successfully.');
        return back();
    }


}
