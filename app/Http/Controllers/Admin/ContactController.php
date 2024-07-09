<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use App\FileUpload;
use App\Lib\FileUploadUtil;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $list = Contact::where("status", 1)->latest()->get();
        return view('admin.contact.index', compact('list'));
    }

    public function create(Request $request)
    {
        return view('admin.contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'name'     => 'required',
            'wechat_qcode'     => 'required',
            'wechat_intro'     => 'required',
            'line_qcode'   => 'required',
            'line_intro'     => 'required',
            'status'    => 'required',
        ]);

        $wechat_image_id = 0;
        $wechat_image_link = '';
        $image = $request->file('wechat_qcode');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $wechat_image_id = $fileUpload->id;
            $wechat_image_link = $fileUpload->file_link;
        }
        $line_image_id = 0;
        $line_image_link = '';
        $image = $request->file('line_qcode');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $line_image_id = $fileUpload->id;
            $line_image_link = $fileUpload->file_link;
        }

 
        $contentArr = [
            'wechat_image_id'    => $wechat_image_id,
            'wechat_image_link'    => $wechat_image_link,
            'wechat_intro'    => $request->wechat_intro ?? "",
            'line_image_id'    => $line_image_id,
            'line_image_link'    => $line_image_link,
            'line_intro'    => $request->line_intro ?? "",
        ];
        $contact = new Contact();
        $contact->name = 'contact';
        $contact->content= serialize($contentArr);
        $contact->status = $request->status ?? 1;
        $contact->created_at = time();
        $contact->save();

        toastr()->success('message', 'contact created successfully.');
        return redirect()->route('admin.contact.index');
    }

    public function show(Contact $contact)
    {
        $contact = Contact::find($contact->id);
        $content = unserialize($contact->content);
        return view('admin.contact.show', compact('contact', 'content'));
    }

    public function edit(Contact $contact)
    {
        $contact = Contact::find($contact->id);
        $content = unserialize($contact->content);
        return view('admin.contact.edit', compact('contact', 'content'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'wechat_intro'     => 'required',
            'line_intro'     => 'required',
        ]);

        $wechat_image_id = 0;
        $wechat_image_link = '';
        $image = $request->file('wechat_qcode');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $wechat_image_id = $fileUpload->id;
            $wechat_image_link = $fileUpload->file_link;
        }
        $line_image_id = 0;
        $line_image_link = '';
        $image = $request->file('line_qcode');
        if ($image) {
            $fileUpload = FileUploadUtil::uploadImg($image);
            $line_image_id = $fileUpload->id;
            $line_image_link = $fileUpload->file_link;
        }
        $contact = Contact::find($contact->id);
        $contentArr = unserialize($contact->content);
 
        $contentArr['wechat_intro'] = $request->wechat_intro ?? "";
        $contentArr['line_intro'] = $request->line_intro ?? "";
        if($wechat_image_id <> 0) {
            $contentArr['wechat_image_id'] = $wechat_image_id;
            $contentArr['wechat_image_link'] = $wechat_image_link;
        }
        if($line_image_id <> 0) {
            $contentArr['line_image_id'] = $line_image_id;
            $contentArr['line_image_link'] = $line_image_link;
        }

        $contact->content= serialize($contentArr);
        $contact->updated_at = time();
        $contact->save();

        toastr()->success('message', 'contact created successfully.');
        return redirect()->route('admin.contact.index');
    }
    
    public function destroy(Contact $contact)
    {
        $contact = Contact::find($contact->id);
        $contact->delete();

        toastr()->success('message', 'contact deleted successfully.');
        return back();
    }
}
