<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyInfoZh;
use App\ProfileZh;
use App\FileUpload;
use App\Lib\FileUploadUtil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class ProfileZhController extends Controller
{
    public function create(Request $request)
    {
        return view('admin.companyinfozh.profile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_zh'     => 'required',
            'title'     => 'required',
            'middle_content'    => 'required',
            'business_names'    => 'required',
            'business_titles'    => 'required',
            'business_contents'    => 'required',
            'business_images'    => 'required',
            'status'    => 'required',
        ]);

        $business_names = $request->business_names;
        $business_titles = $request->business_titles;
        $business_contents = $request->business_contents;
        $business_images = $request->file('business_images');
        $businessArr = [];
        foreach($business_names as $k=>$val) {
            $temp = [];
            $temp['name'] = $val;
            $temp['title'] = $business_titles[$k];
            $temp['content'] = $business_contents[$k];

            $image_id = 0;
            $image_link = '';
            $image = $business_images[$k];
            if ($image) {
                $fileUpload = FileUploadUtil::uploadImg($image);
                $image_id = $fileUpload->id;
                $image_link = $fileUpload->file_link;
            }
            $temp['image_id'] = $image_id;
            $temp['image_link'] = $image_link;
            $businessArr[] = $temp;
        }
        $contentArr = [
            'name_zh'     => $request->name_zh?? "",
            'title'     => $request->title ?? "",
            'middle_content'    => $request->middle_content ?? "",
            'business'    => $businessArr,
        ];
        $companyinfo = new CompanyInfoZh();
        $companyinfo->name = 'profilezh';
        $companyinfo->content= serialize($contentArr);
        $companyinfo->status = $request->status ?? 1;
        $companyinfo->created_at = time();
        $companyinfo->save();

        toastr()->success('message', 'companyinfo created successfully.');
        return redirect()->route('admin.companyinfozh.index');
    }

    public function show(ProfileZh $profilezh)
    {
        $companyinfo = ProfileZh::find($profilezh->id);
        $content = unserialize($companyinfo->content);
        return view('admin.companyinfozh.profile.show', compact('companyinfo', 'content'));
    }

    public function edit(ProfileZh $profilezh)
    {
        $companyinfo = ProfileZh::find($profilezh->id);
        $content = unserialize($companyinfo->content);
        return view('admin.companyinfozh.profile.edit', compact('companyinfo', 'content'));
    }

    public function update(Request $request, ProfileZh $profilezh)
    {
        $request->validate([
            'name_zh'     => 'required',
            'title'     => 'required',
            'middle_content'    => 'required',
            'business_names'    => 'required',
            'business_titles'    => 'required',
            'business_contents'    => 'required',
        ]);

        $companyinfo = ProfileZh::find($profilezh->id);
        $contentArr = unserialize($companyinfo->content);

        $business_names = $request->business_names;
        $business_titles = $request->business_titles;
        $business_contents = $request->business_contents;
        $business_images = $request->file('business_images');
        $businessArr = $contentArr['business'];
        foreach($business_names as $k=>$val) {
            $temp = [];
            if(isset($businessArr[$k])) {
                $temp = $businessArr[$k];
            }
            $temp['name'] = $val;
            $temp['title'] = $business_titles[$k];
            $temp['content'] = $business_contents[$k];

            $image_id = 0;
            $image_link = '';
            if(!empty($business_images)) {
                $image = $business_images[$k];
                if ($image) {
                    $fileUpload = FileUploadUtil::uploadImg($image);
                    $image_id = $fileUpload->id;
                    $image_link = $fileUpload->file_link;
                }
                if($image_id <> 0) {
                    $temp['image_id'] = $image_id;
                    $temp['image_link'] = $image_link;
                }
            }
            $businessArr[$k] = $temp;
        }
 
        $contentArr['name_zh'] = $request->name_zh ?? "";
        $contentArr['title'] = $request->title ?? "";
        $contentArr['middle_content'] = $request->middle_content ?? "";
        $contentArr['business'] = $businessArr;
        $companyinfo->content= serialize($contentArr);
        $companyinfo->updated_at = time();
        $companyinfo->save();
        toastr()->success('message', 'companyinfo updated successfully.');
        return redirect()->route('admin.companyinfozh.index');
    }

}
