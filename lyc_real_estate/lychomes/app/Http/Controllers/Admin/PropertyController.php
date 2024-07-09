<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Property;
use App\Feature;
use App\PropertyImageGallery;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Log;

class PropertyController extends Controller
{

    public function index()
    {
        $properties = Property::latest()->withCount('comments')->get();

        return view('admin.properties.index2', compact('properties'));
    }

    public function sales()
    {
        $purpose = "sale";
        $properties = Property::where("purpose", $purpose)->latest()->get();
        return view('admin.properties.index2', compact('properties', "purpose"));
    }

    public function rents()
    {
        $purpose = "rent";
        $properties = Property::where("purpose", $purpose)->latest()->get();
        return view('admin.properties.index2', compact('properties', "purpose"));
    }


    public function create(Request $request)
    {
        $purpose = $request->get("purpose");
        return view('admin.properties.create2', compact("purpose"));
    }


    public function store(Request $request)
    {
        $request->validate([
            // TODO 这里的校验不全 目前仅前端校验 包括 修改
            'title'     => 'required|unique:properties|max:255',
            'price'     => 'required',
            'purpose'   => 'required',
            'address'   => 'required',
            'nearby'    => 'required',
            'structure'    => 'required',
            'master_area'    => 'required',
            'direction'    => 'required',
            'house_layout'    => 'required',
            'completion_time' => 'required'
        ]);

        $property = new Property();
        $property->title    = $request->title;
        $property->price    = $request->price;
        $property->address  = $request->address ?? "";
        $property->nearby  = $request->nearby ?? "";
        $property->structure  = $request->structure ?? "";
        $property->master_area     = $request->master_area ?? 0;
        $property->balconies_area     = $request->balconies_area ?? 0;
        $property->direction     = $request->direction ?? "";
        $property->house_layout     = $request->house_layout ?? "";
        $property->completion_time     = $request->completion_time ?? "";
        $property->household     = $request->household ?? 0;
        $property->management_mode     = $request->management_mode ?? "";
        $property->land_rights     = $request->land_rights ?? "";
        $property->equipment     = $request->equipment ?? "";
        $property->other_equipment     = $request->other_equipment ?? "";
        $property->pet     = $request->pet ?? 0;
        $property->communication_environment     = $request->communication_environment ?? "";
        $property->common_equipment     = $request->common_equipment ?? "";
        $property->monthly_management_price     = $request->monthly_management_price ?? 0;
        $property->monthly_maintenance_price     = $request->monthly_maintenance_price ?? 0;
        $property->monthly_others_price     = $request->monthly_others_price ?? 0;
        $property->purpose  = $request->purpose;
        $property->agent_id = Auth::id();

        $property->fitment  = $request->fitment ?? "";

        $property->moving_into  = $request->moving_into ?? "";
        $property->trade_style  = $request->trade_style ?? "";
        $property->condition  = $request->condition ?? "";
        $property->guarantee_company  = $request->guarantee_company ?? "";
        $property->update_year_month_day  = $request->update_year_month_day ?? "";
        $property->remark  = $request->remark ?? "";

        $property->deposit     = $request->deposit ?? 0;
        $property->key_money     = $request->key_money ?? 0;

        $property->save();

        $gallary = $request->file('gallaryimage');

        if ($gallary) {
            foreach ($gallary as  $index => $images) {
                $currentDate = Carbon::now()->toDateString();
                $galimage['name'] = 'gallary-' . $currentDate . '-' . uniqid() . '.' . $images->getClientOriginalExtension();
                $galimage['description'] = empty($request->discriptions[$index])?"":$request->discriptions[$index];
                $galimage['size'] = $images->getClientSize();
                $galimage['property_id'] = $property->id;

                if (!Storage::disk('public')->exists('property/gallery')) {
                    Storage::disk('public')->makeDirectory('property/gallery');
                }
                $propertyimage = Image::make($images)->stream();
                Storage::disk('public')->put('property/gallery/' . $galimage['name'], $propertyimage);

                $property->gallery()->create($galimage);
            }
        }

        toastr()->success('message', 'Property created successfully.');
        return redirect()->route('admin.' . $request->purpose);
    }


    public function show(Property $property)
    {
        $property = Property::find($property->id);
        return view('admin.properties.show2', compact('property'));
    }


    public function edit(Property $property)
    {
        $property = Property::find($property->id);
        return view('admin.properties.edit2', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $request->validate([
            'price'     => 'required',
            // 'purpose'   => 'required',
            'address'   => 'required',
        ]);        
    
        $property = Property::find($property->id);
    
        $property->title    = $request->title;
        $property->price    = $request->price;
        $property->address  = $request->address ?? "";
        $property->nearby  = $request->nearby ?? "";
        $property->structure  = $request->structure ?? "";
        $property->master_area     = $request->master_area ?? 0;
        $property->balconies_area     = $request->balconies_area ?? 0;
        $property->direction     = $request->direction ?? "";
        $property->house_layout     = $request->house_layout ?? "";
        $property->completion_time     = $request->completion_time ?? "";
        $property->household     = $request->household ?? 0;
        $property->management_mode     = $request->management_mode ?? "";
        $property->land_rights     = $request->land_rights ?? "";
        $property->equipment     = $request->equipment ?? "";
        $property->other_equipment     = $request->other_equipment ?? "";
        $property->pet     = $request->pet ?? 0;
        $property->communication_environment     = $request->communication_environment ?? "";
        $property->common_equipment     = $request->common_equipment ?? "";
        $property->monthly_management_price     = $request->monthly_management_price ?? 0;
        $property->monthly_maintenance_price     = $request->monthly_maintenance_price ?? 0;
        $property->monthly_others_price     = $request->monthly_others_price ?? 0;
        // $property->purpose  = $request->purpose;
        $property->agent_id = Auth::id();
    
        $property->fitment  = $request->fitment ?? "";

        $property->moving_into  = $request->moving_into ?? "";
        $property->trade_style  = $request->trade_style ?? "";
        $property->condition  = $request->condition ?? "";
        $property->guarantee_company  = $request->guarantee_company ?? "";
        $property->update_year_month_day  = $request->update_year_month_day ?? "";
        $property->remark  = $request->remark ?? "";
        
        $property->deposit     = $request->deposit ?? 0;
        $property->key_money     = $request->key_money ?? 0;
        
        $property->save();

    
        $gallary = $request->file('gallaryimage');
    
        if ($gallary) {
            foreach ($gallary as  $index => $images) {
                $currentDate = Carbon::now()->toDateString();
                $galimage['name'] = 'gallary-' . $currentDate . '-' . uniqid() . '.' . $images->getClientOriginalExtension();
                $galimage['description'] = empty($request->discriptions[$index])?"":$request->discriptions[$index];
                $galimage['size'] = $images->getClientSize();
                $galimage['property_id'] = $property->id;
    
                if (!Storage::disk('public')->exists('property/gallery')) {
                    Storage::disk('public')->makeDirectory('property/gallery');
                }
                $propertyimage = Image::make($images)->stream();
                Storage::disk('public')->put('property/gallery/' . $galimage['name'], $propertyimage);
    
                $property->gallery()->create($galimage);
            }
        }
    
        toastr()->success('message', 'Property updated successfully.');
        return redirect()->route('admin.sale');
    }
    

    // public function update(Request $request, $property)
    // {
    //     $request->validate([
    //         'title'     => 'required|max:255',
    //         'price'     => 'required',
    //         'purpose'   => 'required',
    //         'type'      => 'required',
    //         'bedroom'   => 'required',
    //         'bathroom'  => 'required',
    //         'city'      => 'required',
    //         'address'   => 'required',
    //         'area'      => 'required',
    //         'image'     => 'image|mimes:jpeg,jpg,png',
    //         'floor_plan' => 'image|mimes:jpeg,jpg,png',
    //         'description'        => 'required',
    //         'location_latitude'  => 'required',
    //         'location_longitude' => 'required'
    //     ]);

    //     $image = $request->file('image');
    //     $slug  = str_slug($request->title);

    //     $property = Property::find($property->id);

    //     if (isset($image)) {
    //         $currentDate = Carbon::now()->toDateString();
    //         $imagename = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

    //         if (!Storage::disk('public')->exists('property')) {
    //             Storage::disk('public')->makeDirectory('property');
    //         }
    //         if (Storage::disk('public')->exists('property/' . $property->image)) {
    //             Storage::disk('public')->delete('property/' . $property->image);
    //         }
    //         $propertyimage = Image::make($image)->stream();
    //         Storage::disk('public')->put('property/' . $imagename, $propertyimage);
    //     } else {
    //         $imagename = $property->image;
    //     }


    //     $floor_plan = $request->file('floor_plan');
    //     if (isset($floor_plan)) {
    //         $currentDate = Carbon::now()->toDateString();
    //         $imagefloorplan = 'floor-plan-' . $currentDate . '-' . uniqid() . '.' . $floor_plan->getClientOriginalExtension();

    //         if (!Storage::disk('public')->exists('property')) {
    //             Storage::disk('public')->makeDirectory('property');
    //         }
    //         if (Storage::disk('public')->exists('property/' . $property->floor_plan)) {
    //             Storage::disk('public')->delete('property/' . $property->floor_plan);
    //         }

    //         $propertyfloorplan = Image::make($floor_plan)->stream();
    //         Storage::disk('public')->put('property/' . $imagefloorplan, $propertyfloorplan);
    //     } else {
    //         $imagefloorplan = $property->floor_plan;
    //     }

    //     $property->title        = $request->title;
    //     $property->slug         = $slug;
    //     $property->price        = $request->price;
    //     $property->purpose      = $request->purpose;
    //     $property->type         = $request->type;
    //     $property->image        = $imagename;
    //     $property->bedroom      = $request->bedroom;
    //     $property->bathroom     = $request->bathroom;
    //     $property->city         = $request->city;
    //     $property->city_slug    = str_slug($request->city);
    //     $property->address      = $request->address;
    //     $property->area         = $request->area;

    //     if (isset($request->featured)) {
    //         $property->featured = true;
    //     } else {
    //         $property->featured = false;
    //     }

    //     $property->description  = $request->description;
    //     $property->video        = $request->video;
    //     $property->floor_plan   = $imagefloorplan;
    //     $property->location_latitude  = $request->location_latitude;
    //     $property->location_longitude = $request->location_longitude;
    //     $property->nearby             = $request->nearby;
    //     $property->save();

    //     $property->features()->sync($request->features);

    //     $gallary = $request->file('gallaryimage');
    //     if ($gallary) {
    //         foreach ($gallary as $images) {
    //             if (isset($images)) {
    //                 $currentDate = Carbon::now()->toDateString();
    //                 $galimage['name'] = 'gallary-' . $currentDate . '-' . uniqid() . '.' . $images->getClientOriginalExtension();
    //                 $galimage['size'] = $images->getClientSize();
    //                 $galimage['property_id'] = $property->id;

    //                 if (!Storage::disk('public')->exists('property/gallery')) {
    //                     Storage::disk('public')->makeDirectory('property/gallery');
    //                 }
    //                 $propertyimage = Image::make($images)->stream();
    //                 Storage::disk('public')->put('property/gallery/' . $galimage['name'], $propertyimage);

    //                 $property->gallery()->create($galimage);
    //             }
    //         }
    //     }

    //     toastr()->success('message', 'Property updated successfully.');
    //     return redirect()->route('admin.' . $request->purpose);
    // }


    public function destroy(Property $property)
    {
        $property = Property::find($property->id);

        if (Storage::disk('public')->exists('property/' . $property->image)) {
            Storage::disk('public')->delete('property/' . $property->image);
        }
        if (Storage::disk('public')->exists('property/' . $property->floor_plan)) {
            Storage::disk('public')->delete('property/' . $property->floor_plan);
        }

        $property->delete();

        $galleries = $property->gallery;
        if ($galleries) {
            foreach ($galleries as $key => $gallery) {
                if (Storage::disk('public')->exists('property/gallery/' . $gallery->name)) {
                    Storage::disk('public')->delete('property/gallery/' . $gallery->name);
                }
                PropertyImageGallery::destroy($gallery->id);
            }
        }

        $property->features()->detach();
        $property->comments()->delete();

        toastr()->success('message', 'Property deleted successfully.');
        return back();
    }


    public function galleryImageDelete(Request $request)
    {

        $gallaryimg = PropertyImageGallery::find($request->id)->delete();

        if (Storage::disk('public')->exists('property/gallery/' . $request->image)) {
            Storage::disk('public')->delete('property/gallery/' . $request->image);
        }

        if ($request->ajax()) {

            return response()->json(['msg' => $gallaryimg]);
        }
    }

    // YOUTUBE LINK TO EMBED CODE
    private function convertYoutube($youtubelink, $w = 250, $h = 140)
    {
        return preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "<iframe width=\"$w\" height=\"$h\" src=\"//www.youtube.com/embed/$2\" frameborder=\"0\" allowfullscreen></iframe>",
            $youtubelink
        );
    }
}
