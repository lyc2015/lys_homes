<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyInfoZh;
use App\FileUpload;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;

class CompanyInfoZhController extends Controller
{
    private $companyInfoArr = [
        'index' =>['name'=>'公司信息首页'],
        'corporate' =>['name'=>'公司概要・沿革'],
        'profile' =>['name'=>'业务指南'],
        'disclaimer' =>['name'=>'免责事项'],
    ];

    public function formatContent($content) {
        if(!is_array($content)) {
            return $content;
        }
        foreach($content as $key=>$val) {
            if(is_array($val)) {
                $content[$key] = $this->formatContent($val);
            }
            $content[$key] = str_replace(array("\r\n", "\n", "\r"), "<br>", $val);
        }
        return $content;
    }
    public function company(Request $request, $subpage = null)
    {
        if (View::exists('frontend.simplified-chinese2.' . $subpage)) {
            $companyinfo = CompanyInfoZh::where("name", $subpage)->first();
            $content = unserialize($companyinfo->content);
            $content = $this->formatContent($content);
            return view('frontend.simplified-chinese2.' . $subpage, compact("companyinfo", "content"));
        }
        return redirect(view('frontend.index2'));
    }
}
