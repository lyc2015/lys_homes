<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyInfo;
use App\FileUpload;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class CompanyInfoController extends Controller
{
    public function index(Request $request)
    {
        $list = CompanyInfo::where("status", 1)->latest()->get();
        foreach($list as &$val){
            $val->content = unserialize($val->content);
        }
        return view('admin.companyinfo.index', compact('list'));
    }

    
    public function destroy(CompanyInfo $companyinfo)
    {
        $companyinfo = CompanyInfo::find($companyinfo->id);
        $companyinfo->delete();

        toastr()->success('message', 'companyinfo deleted successfully.');
        return back();
    }

}
