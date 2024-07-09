<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\FileUpload;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{

    public function index(Request $request)
    {
        $type = 1;
        $news = News::where("type", $type)->latest()->get();
        return view('frontend.news.index', compact('news'));
    }

    public function show(News $news)
    {
        $new = News::find($news->id);
        //$new->content = htmlspecialchars_decode(stripslashes($new->content));
        return view('frontend.news.show', compact('new'));
    }

}
