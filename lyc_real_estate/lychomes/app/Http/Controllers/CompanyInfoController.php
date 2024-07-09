<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CompanyInfo;
use App\News;
use App\FileUpload;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;

class CompanyInfoController extends Controller
{
    private $companyInfoArr = [
        'philosophy' =>['cover_title'=>'content / 01', 'cover_name'=>'PHILOSOPHY'],
        'outline' =>['cover_title'=>'content / 02', 'cover_name'=>'OUTLINE'],
        'history' =>['cover_title'=>'content / 03', 'cover_name'=>'HISTORY'],
        'organization' =>['cover_title'=>'content / 04', 'cover_name'=>'ORGANIZATION'],
        'release' =>['cover_title'=>'content / 05', 'cover_name'=>'NEWS RELEASE'],
        'business' =>['cover_title'=>'content / 06', 'cover_name'=>'BUSINESS'],

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
        if (empty($subpage)) {
            $result = CompanyInfo::where("status", 1)->latest()->get();
            $list = $this->companyInfoArr;
            foreach($result as &$val) {
                $val->content = unserialize($val->content);
                $list[$val->name]['companyinfo'] = $val;
            }
            return view('frontend.company2', compact("list"));
        }
        if (View::exists('frontend.company2.' . $subpage)) {
            $companyinfo = CompanyInfo::where("name", $subpage)->first();
            $content = unserialize($companyinfo->content);
            $content = $this->formatContent($content);
            if($subpage == 'history') {
                $year_counter = [];
                foreach($content['company_story'] as $year=>$val) {
                   $num = 0;
                   foreach($val as $month=>$val2) {
                       $num += count($val2);
                   }
                   $year_counter[$year] = $num;
                }
                return view('frontend.company2.' . $subpage, compact("companyinfo", "content", "year_counter"));
            } elseif($subpage == 'release') {
                $type = 1;
                $news = News::where("type", $type)->latest()->get();
                return view('frontend.company2.' . $subpage, compact("companyinfo", "content", "news"));
            } else {
                return view('frontend.company2.' . $subpage, compact("companyinfo", "content"));
            }
        }
        return redirect(route('company3'));
    }

    public function companyBusiness(Request $request, $subpage)
    {
        if (View::exists('frontend.company2.business.' . $subpage)) {
            return view('frontend.company2.business.' . $subpage);
        }
        return redirect(route('company', ["subpage" => "business",]));
    }

}
