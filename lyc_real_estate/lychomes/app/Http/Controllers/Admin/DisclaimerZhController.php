<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyInfoZh;
use App\DisclaimerZh;
use App\FileUpload;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class DisclaimerZhController extends Controller
{
    public function create(Request $request)
    {
        return view('admin.companyinfozh.disclaimer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'name_zh'     => 'required',
            'title'     => 'required',
            'middle_content'    => 'required',
            'status'    => 'required',
        ]);

        $contentArr = [
            'name_zh'     => $request->name_zh ?? "",
            'title'     => $request->title ?? "",
            'middle_content'    => $request->middle_content ?? "",
        ];
        $companyinfo = new CompanyInfoZh();
        $companyinfo->name = 'disclaimerzh';
        $companyinfo->content= serialize($contentArr);
        $companyinfo->status = $request->status ?? 1;
        $companyinfo->created_at = time();
        $companyinfo->save();

        toastr()->success('message', 'companyinfo created successfully.');
        return redirect()->route('admin.companyinfozh.index');
    }

    public function show(DisclaimerZh $disclaimerzh)
    {
        $companyinfo = DisclaimerZh::find($disclaimerzh->id);
        $content = unserialize($companyinfo->content);
        return view('admin.companyinfozh.disclaimer.show', compact('companyinfo', 'content'));
    }

    public function edit(DisclaimerZh $disclaimerzh)
    {
        $companyinfo = DisclaimerZh::find($disclaimerzh->id);
        $content = unserialize($companyinfo->content);
        return view('admin.companyinfozh.disclaimer.edit', compact('companyinfo', 'content'));
    }

    public function update(Request $request, DisclaimerZh $disclaimerzh)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'name_zh'     => 'required',
            'title'     => 'required',
            'middle_content'    => 'required',
            'status'    => 'required',
        ]);
        $companyinfo = DisclaimerZh::find($disclaimerzh->id);
        $contentArr = unserialize($companyinfo->content);
        $contentArr['name_zh'] = $request->name_zh ?? "";
        $contentArr['title'] = $request->title ?? "";
        $contentArr['middle_content'] = $request->middle_content ?? "";
        $companyinfo->content= serialize($contentArr);
        $companyinfo->updated_at = time();
        $companyinfo->save();
        toastr()->success('message', 'companyinfo updated successfully.');
        return redirect()->route('admin.companyinfozh.index');
    }
    
}
