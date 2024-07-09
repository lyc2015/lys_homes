<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use App\Property;
use App\Service;
use App\Slider;
use App\Post;
use App\Job;
use App\Career;
use App\Newgraduate;
use App\HomePage;
use App\FileUpload;
use App\CompanyInfoZh;
use App\Article;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\View;
use Mockery;

class FrontpageController extends Controller
{
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
 

    public function index()
    {
        /**
        $sliders        = Slider::latest()->get();
        $properties     = Property::latest()->where('featured', 1)->with('rating')->withCount('comments')->take(6)->get();
        $services       = Service::orderBy('service_order')->get();
        $testimonials   = Testimonial::latest()->get();
        $posts          = Post::latest()->where('status', 1)->take(6)->get();
         **/
        
        $rents = Property::with("gallery")->where("purpose", "rent")->latest()->limit(10)->get();
        $sells = Property::with("gallery")->where("purpose", "sale")->latest()->limit(10)->get();

        $hm = HomePage::find(1);
        $hm_back_image_file = FileUpload::find($hm->bk_image);
        //$new_ids_arr = explode(",", $hm->news_ids);
        //$hm_news = Article::whereIn("id", $new_ids_arr)->get();
        $hm_news = Article::where("status", 1)->orderBy('id', 'DESC')->get();;

        // return view('frontend.index', compact('sliders','properties','services','testimonials','posts'));
        return view('frontend.index2', compact("rents", "sells", "hm_back_image_file", "hm_news"));
    }

    public function company(Request $request, $subpage = null)
    {
        if (empty($subpage)) {
            return view('frontend.company');
        }
        if (View::exists('frontend.company.' . $subpage)) {
            return view('frontend.company.' . $subpage);
        }
        return redirect(route('company'));
    }

    public function companyBusiness(Request $request, $subpage)
    {
        if (View::exists('frontend.company.business.' . $subpage)) {
            return view('frontend.company.business.' . $subpage);
        }
        return redirect(route('company', ["subpage" => "business",]));
    }

    public function simplifiedChinese(Request $request, $subpage = null)
    {
        empty($subpage) && $subpage = "index";
        if (View::exists('frontend.simplified-chinese.' . $subpage)) {
            $companyinfo = CompanyInfoZh::where("name", $subpage.'zh')->first();
            $content = unserialize($companyinfo->content);
            $content = $this->formatContent($content);
            return view('frontend.simplified-chinese.' . $subpage, compact("companyinfo", "content"));
        }
        return redirect(route('home'));
    }

    public function simplifiedChinese2(Request $request, $subpage = null)
    {
        empty($subpage) && $subpage = "index";
        if (View::exists('frontend.simplified-chinese2.' . $subpage)) {
            return view('frontend.simplified-chinese2.' . $subpage, );
        }
        return redirect(route('home'));
    }

    public function recruit(Request $request, $subpage = null)
    {
        empty($subpage) && $subpage = "index";
        $list = [];
        if($subpage == 'newgraduate') {
            $list = Newgraduate::where("status", 1)->orderBy('id', 'DESC')->get();
        } elseif($subpage == 'career') {
            $list = Career::where("status", 1)->orderBy('id', 'DESC')->get();
        }
        foreach($list as &$val) {
            $val->work_time = str_replace("\n", "<br>", $val->work_time);
            //$val->work_time = nl2br($val->work_time);
        }
        if (View::exists('frontend.recruit.' . $subpage)) {
            return view('frontend.recruit.' . $subpage, compact("list"));
        }
        return redirect(route('home'));
    }

    public function search(Request $request)
    {
        $city     = strtolower($request->city);
        $type     = $request->type;
        $purpose  = $request->purpose;
        $bedroom  = $request->bedroom;
        $bathroom = $request->bathroom;
        $minprice = $request->minprice;
        $maxprice = $request->maxprice;
        $minarea  = $request->minarea;
        $maxarea  = $request->maxarea;
        $featured = $request->featured;

        $properties = Property::latest()->withCount('comments')
            ->when($city, function ($query, $city) {
                return $query->where('city', '=', $city);
            })
            ->when($type, function ($query, $type) {
                return $query->where('type', '=', $type);
            })
            ->when($purpose, function ($query, $purpose) {
                return $query->where('purpose', '=', $purpose);
            })
            ->when($bedroom, function ($query, $bedroom) {
                return $query->where('bedroom', '=', $bedroom);
            })
            ->when($bathroom, function ($query, $bathroom) {
                return $query->where('bathroom', '=', $bathroom);
            })
            ->when($minprice, function ($query, $minprice) {
                return $query->where('price', '>=', $minprice);
            })
            ->when($maxprice, function ($query, $maxprice) {
                return $query->where('price', '<=', $maxprice);
            })
            ->when($minarea, function ($query, $minarea) {
                return $query->where('area', '>=', $minarea);
            })
            ->when($maxarea, function ($query, $maxarea) {
                return $query->where('area', '<=', $maxarea);
            })
            ->when($featured, function ($query, $featured) {
                return $query->where('featured', '=', 1);
            })
            ->paginate(10);

        return view('pages.search', compact('properties'));
    }
}
