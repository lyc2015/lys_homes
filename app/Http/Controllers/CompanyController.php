<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\FileUpload;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class CompanyController extends Controller
{

    public function index(Request $request)
    {
        $type = 1;
        $list = Company::where("type", $type)->orderBy('id', 'ASC')->get();
        foreach($list as &$info) {
            $cover_image = FileUpload::find($info->cover_image_id);
            $info['cover_image'] = $cover_image;
        }
        return view('frontend.company.index', compact('list'));
    }

    public function show(Company $company)
    {
        $company = Company::find($company->id);
        $company->content = html_entity_decode($company->content);
        return view('frontend.company.show', compact('company'));
    }

}
