<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyInfoZh;
use App\CorporateZh;
use App\FileUpload;
use App\Lib\FileUploadUtil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class CorporateZhController extends Controller
{
    public function create(Request $request)
    {
        return view('admin.companyinfozh.corporate.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'name_zh'     => 'required',
            'title_outline'     => 'required',
            'company_name'   => 'required',
            'company_adress'    => 'required',
            'capital'    => 'required',
            'revenue'    => 'required',
            'establish_time'    => 'required',
            'legal_person'    => 'required',
            'business'    => 'required',
            'mother_company'    => 'required',
            'affiliation'    => 'required',
            'title_history'     => 'required',
            'years'    => 'required',
            'intros'    => 'required',
            'status'    => 'required',
        ]);

        $contentArr = [
            'name_zh'     => $request->name_zh ?? "",
            'title_outline'     => $request->title_outline ?? "",
            'company_name'   => $request->company_name ?? "",
            'company_adress'    => $request->company_adress ?? "",
            'capital'    => $request->capital ?? "",
            'revenue'    => $request->revenue ?? "",
            'establish_time'    => $request->establish_time ?? "",
            'legal_person'    => $request->legal_person ?? "",
            'business'    => $request->business ?? "",
            'affiliation'    => $request->affiliation ?? "",
            'mother_company'    => $request->mother_company ?? "",
            'title_history'    => $request->title_history ?? "",
        ];
        $years = $request->years;
        $intros = $request->intros;
        $company_story = [];
        foreach($years as $key=>$year) {
            $company_story[$year] = $intros[$key];
        }

        //排序
        ksort($company_story);
        $contentArr['company_story'] = $company_story;

        $companyinfo = new CompanyInfoZh();
        $companyinfo->name = 'corporatezh';
        $companyinfo->content= serialize($contentArr);
        $companyinfo->status = $request->status ?? 1;
        $companyinfo->created_at = time();
        $companyinfo->save();

        toastr()->success('message', 'companyinfo created successfully.');
        return redirect()->route('admin.companyinfozh.index');
    }

    public function show(CorporateZh $corporatezh)
    {
        $companyinfo = CorporateZh::find($corporatezh->id);
        $content = unserialize($companyinfo->content);
        return view('admin.companyinfozh.corporate.show', compact('companyinfo', 'content'));
    }

    public function edit(CorporateZh $corporatezh)
    {
        $companyinfo = CorporateZh::find($corporatezh->id);
        $content = unserialize($companyinfo->content);
        return view('admin.companyinfozh.corporate.edit', compact('companyinfo', 'content'));
    }

    public function update(Request $request, CorporateZh $corporatezh)
    {
        $request->validate([
            'name_zh'     => 'required',
            'title_outline'     => 'required',
            'company_name'   => 'required',
            'company_adress'    => 'required',
            'capital'    => 'required',
            'revenue'    => 'required',
            'establish_time'    => 'required',
            'legal_person'    => 'required',
            'business'    => 'required',
            'mother_company'    => 'required',
            'affiliation'    => 'required',
            'title_history'     => 'required',
            'years'    => 'required',
            'intros'    => 'required',
        ]);

        $companyinfo = CorporateZh::find($corporatezh->id);
        $contentArr = unserialize($companyinfo->content);
        $contentArr['name_zh'] = $request->name_zh ?? "";
        $contentArr['title_outline'] = $request->title_outline ?? "";
        $contentArr['company_name'] = $request->company_name ?? "";
        $contentArr['company_adress'] = $request->company_adress ?? "";
        $contentArr['capital'] = $request->capital ?? "";
        $contentArr['revenue'] = $request->revenue ?? "";
        $contentArr['establish_time'] = $request->establish_time ?? "";
        $contentArr['legal_person'] = $request->legal_person ?? "";
        $contentArr['business'] = $request->business ?? "";
        $contentArr['mother_company'] = $request->mother_company ?? "";
        $contentArr['affiliation'] = $request->affiliation ?? "";
        $contentArr['title_history'] = $request->title_history ?? "";
        $years = $request->years;
        $intros = $request->intros;
        $company_story = [];
        foreach($years as $key=>$year) {
            $company_story[$year] = $intros[$key];
        }
        //排序
        ksort($company_story);
        $contentArr['company_story'] = $company_story;
        $companyinfo->content = serialize($contentArr);
        $companyinfo->updated_at = time();
        $companyinfo->save();
        toastr()->success('message', 'companyinfo updated successfully.');
        return redirect()->route('admin.companyinfozh.index');
    }
    
}
