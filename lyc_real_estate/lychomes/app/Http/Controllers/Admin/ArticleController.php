<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\FileUpload;
use App\Lib\FileUploadUtil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{

    public function index(Request $request)
    {
        $list = Article::where("status", 1)->latest()->get();
        return view('admin.article.index', compact('list'));
    }

    public function create(Request $request)
    {
        return view('admin.article.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'cover_title'     => 'required',
            'cover_title_en'   => 'required',
            'cover_intro'    => 'required',
            'title'    => 'required',
            'title_en'    => 'required',
            'content'    => 'required',
            'status'    => 'required',
            //'show_rank' => 'required'
        ]);

        $cover_image_id = 0;
        $cover_image = "";
        $images = $request->file('images');
        if ($images) {
            foreach ($images as  $index => $image) {
                $fileUpload = FileUploadUtil::uploadImg($image);
                $cover_image_id = $fileUpload->id;
                $cover_image = $fileUpload->file_link;
                break; //只取一个就ok
            }
        }

        $article = new Article();
        $article->type = 1;
        $article->cover_title = $request->cover_title;
        $article->cover_title_en  = $request->cover_title_en ?? "";
        $article->cover_image_id  = $cover_image_id;
        $article->cover_image  = $cover_image;
        $article->cover_intro  = $request->cover_intro ?? "";
        $article->title = $request->title ?? "";
        $article->title_en = $request->title_en ?? "";
        $article->content = $request->content ?? "";
        $article->status = $request->status ?? 1;
        $article->show_rank= $request->show_rank ?? 1;
        $article->created_at = time();
        $article->save();


        toastr()->success('message', 'Article created successfully.');
        return redirect()->route('admin.article.index');
    }


    public function show(Article $article)
    {
        $article = Article::find($article->id);
        $image = FileUpload::find($article->cover_image_id);
        $images = array($image);
        return view('admin.article.show', compact('article', 'images'));
    }

    public function edit(Article $article)
    {
        $article = Article::find($article->id);
        $article->content = html_entity_decode($article->content);
        $image = FileUpload::find($article->cover_image_id);
        $images = array($image);
        return view('admin.article.edit', compact('article', 'images'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'cover_title'     => 'required',
            'cover_title_en'   => 'required',
            'cover_intro'    => 'required',
            'title'    => 'required',
            'title_en'    => 'required',
            'content'    => 'required',
            //'status'    => 'required',
            //'show_rank' => 'required'
        ]);


        $article = Article::find($article->id);
        $fileUpload  = fileUpload::find($article->cover_image_id);


        $cover_image_id = 0;
        $cover_image = "";
        $images = $request->file('images');
        if ($images) {
            foreach ($images as  $index => $image) {
                $fileUpload = FileUploadUtil::uploadImg($image);
                $cover_image_id = $fileUpload->id;
                $cover_image = $fileUpload->file_link;
                break; //只取一个就ok
            }
        }

        $article->type = 1;
        $article->cover_title = $request->cover_title;
        $article->cover_title_en  = $request->cover_title_en ?? "";
        if($cover_image_id <>0) {
            $article->cover_image_id  = $cover_image_id;
            $article->cover_image  = $cover_image;
        }

        $article->cover_title = $request->cover_title;
        $article->cover_title_en  = $request->cover_title_en ?? "";
        $article->cover_image  = $request->cover_image ?? "";
        $article->cover_intro  = $request->cover_intro ?? "";
        $article->title = $request->title ?? "";
        $article->title_en = $request->title_en ?? "";
        $article->content = $request->content ?? "";
        //$article->status = $request->status ?? 1;
        $article->show_rank= $request->show_rank ?? 1;
        $article->updated_at = time();
        $article->save();

        toastr()->success('message', 'Article updated successfully.');
        return redirect()->route('admin.article.index');
    }
    
    public function destroy(Article $article)
    {
        $article = Article::find($article->id);
        if (Storage::disk('public')->exists('article/' . $article->cover_image)) {
            Storage::disk('public')->delete('article/' . $article->cover_image);
        }
        $article->delete();

        /*
        $galleries = $property->gallery;
        if ($galleries) {
            foreach ($galleries as $key => $gallery) {
                if (Storage::disk('public')->exists('property/gallery/' . $gallery->name)) {
                    Storage::disk('public')->delete('property/gallery/' . $gallery->name);
                }
                PropertyImageGallery::destroy($gallery->id);
            }
        }
         */
        toastr()->success('message', 'Article deleted successfully.');
        return back();
    }


}
