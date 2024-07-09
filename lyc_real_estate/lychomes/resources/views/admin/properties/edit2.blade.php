@extends('backend.layouts.app2')

@section('title', 'Edit Property')

@push('styles')

<link rel="stylesheet" href="{{asset('backend/plugins/bootstrap-select/css/bootstrap-select.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

@endpush


@section('content')

<style>
.red-star {
  color: red;
}
</style>

<div class="block-header"></div>

<div class="row clearfix">
    <form action="{{route('admin.properties.update',$property->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>Edit PROPERTY {{ $property->purpose == "rent" ? "賃貸物件" : "販売物件" }}</h2>
                </div>
                <div class="body">

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title" class="form-control" value="{{$property->title}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                物件名
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" name="price" class="form-control" value="{{$property->price}}" step="0.01" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                販売価格
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="address" value="{{$property->address}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>   
                                所在地
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" 
                                name="nearby" 
                                value="{{$property->nearby}}" 
                                required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                交通
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input 
                                type="text" 
                                class="form-control" 
                                name="structure" 
                                value="{{$property->structure}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                構造・階数
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input 
                                type="number" 
                                class="form-control" 
                                name="master_area" 
                                value="{{$property->master_area}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                専有面積
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="direction" value="{{$property->direction}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                向き
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="house_layout" value="{{$property->house_layout}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                間取り
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="completion_time" value="{{$property->completion_time}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                築年月
                            </label>
                        </div>
                    </div>

                    @if ($property->purpose == 'rent')
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="deposit" value="{{$property->deposit}}" step="0.1" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                敷金
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="key_money" value="{{$property->key_money}}" step="0.1" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                礼金
                            </label>
                        </div>
                    </div>
                    @endif

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="balconies_area" value="{{$property->balconies_area}}" step="0.01">
                            <label class="form-label">バルコニー面積</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="household" value="{{$property->household}}">
                            <label class="form-label">総戸数</label>
                        </div>
                    </div>

                    @if ($property->purpose == 'rent')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" 
                                    name="moving_into" 
                                    value="{{$property->moving_into}}">
                                <label class="form-label">入居</label>
                            </div>
                        </div>
                    @else
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="management_mode" value="{{$property->management_mode}}">
                                <label class="form-label">管理方式</label>
                            </div>
                        </div>
                    @endif

                    <!-- <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="land_rights" value="{{$property->land_rights}}" required>
                            <label class="form-label">土地権利</label>
                        </div>
                    </div> -->

                    @if ($property->purpose == 'rent')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" 
                                    name="trade_style" 
                                    value="{{$property->trade_style}}">
                                <label class="form-label">取引態様</label>
                            </div>
                        </div>
                    @else
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="equipment" value="{{$property->equipment}}">
                                <label class="form-label">設備</label>
                            </div>
                        </div>
                    @endif


                    @if ($property->purpose == 'rent')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" 
                                    name="condition" 
                                    value="{{$property->condition}}">
                                <label class="form-label">条件</label>
                            </div>
                        </div>
                    @else
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="other_equipment" value="{{$property->other_equipment}}">
                                <label class="form-label">その他設備</label>
                            </div>
                        </div>
                    @endif


                    <div class="form-group form-float">
                        <div class="form-line">
                            <input 
                                type="checkbox" 
                                id="pet"
                                name="pet"
                                class="filled-in" 
                                value="0">
                            <label for="pet">ペット</label>
                        </div>
                    </div>

                    <!-- <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" 
                                name="communication_environment" 
                                value="{{$property->communication_environment}}" 
                                required>
                            <label class="form-label">通信環境</label>
                        </div>
                    </div> -->


                    @if ($property->purpose == 'rent')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" 
                                    class="form-control" 
                                    name="guarantee_company" 
                                    value="{{$property->guarantee_company}}">
                                <label class="form-label">保証会社</label>
                            </div>
                        </div>
                    @else
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" 
                                    class="form-control" 
                                    name="common_equipment" 
                                    value="{{$property->common_equipment}}">
                                <label class="form-label">共用施設</label>
                            </div>
                        </div>
                    @endif

                    @if ($property->purpose == 'rent')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" 
                                    name="update_year_month_day" 
                                    value="{{$property->update_year_month_day}}" 
                                >
                                <label class="form-label">更新年月日</label>
                            </div>
                        </div>
                    @else
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" 
                                    name="monthly_management_price" 
                                    value="{{$property->monthly_management_price}}" 
                                >
                                <label class="form-label">管理費</label>
                            </div>
                        </div>
                    @endif

                    <!-- <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" 
                                name="monthly_maintenance_price" 
                                value="{{$property->monthly_maintenance_price}}" 
                                required>
                            <label class="form-label">修繕積立金</label>
                        </div>
                    </div> -->

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" 
                                name="fitment" 
                                value="{{$property->fitment}}" 
                                >
                            <label class="form-label">リフォーム</label>
                        </div>
                    </div>

                    @if ($property->purpose == 'rent')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" 
                                    name="remark" 
                                    value="{{$property->remark}}">
                                <label class="form-label">備考</label>
                            </div>
                        </div>
                    @else
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" 
                                    name="monthly_others_price" 
                                    value="{{$property->monthly_others_price}}">
                                <label class="form-label">その他月次費用</label>
                            </div>
                        </div>
                    @endif

                    <hr>
                    <!-- <div class="form-group">
                        <label for="tinymce-nearby">Nearby</label>
                        <textarea name="nearby" id="tinymce-nearby">{{$property->nearby}}</textarea>
                    </div> -->
                </div>
            </div>

            <div class="card">
                <div class="header bg-red">
                    <h2>GALLERY IMAGE</h2>
                </div>
                <div class="body">
                    <div class="gallery-box" id="gallerybox">
                        @foreach($property->gallery as $gallery)
                        <div class="gallery-image-edit" id="gallery-{{$gallery->id}}">
                            <button type="button" data-id="{{$gallery->id}}" class="btn btn-danger btn-sm"><i class="material-icons">delete_forever</i></button>
                            <img class="img-responsive" src="{{Storage::url('property/gallery/'.$gallery->name)}}" alt="{{$gallery->name}}">
                        </div>
                        @endforeach
                    </div>
                    <div class="gallery-box">
                        <hr>
                        <input type="file" name="gallaryimage[]" value="UPLOAD" id="gallaryimageupload" multiple>
                        <button type="button" class="btn btn-info btn-lg right" id="galleryuploadbutton">UPLOAD GALLERY IMAGE</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    {{-- BUTTON --}}
                    <a href="{{route('admin.'.$property->purpose)}}" class="btn btn-danger btn-lg m-t-15 waves-effect">
                        <i class="material-icons left">arrow_back</i>
                        <span>BACK</span>
                    </a>

                    <button type="submit" class="btn btn-danger btn-lg m-t-15 waves-effect">
                        <i class="material-icons">save</i>
                        <span>SAVE</span>
                    </button>

                </div>
            </div>

        </div>
    </form>
</div>


@endsection


@push('scripts')

<script src="{{ asset('backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // DELETE PROPERTY GALLERY IMAGE
    $('.gallery-image-edit button').on('click', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var image = $('#gallery-' + id + ' img').attr('alt');
        $.post("{{route('admin.gallery-delete')}}", {
            id: id,
            image: image
        }, function(data) {
            if (data.msg == true) {
                $('#gallery-' + id).remove();
            }
        });
    });

    $(function() {
        // Multiple images preview in browser
        var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {

                        $('<div class="gallery-image-edit" id="gallery-perview-' + i + '"><img src="' + event.target.result + '" height="106" width="173"/></div>').appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#gallaryimageupload').on('change', function() {
            imagesPreview(this, 'div#gallerybox');
        });
    });

    $(document).on('click', '#galleryuploadbutton', function(e) {
        e.preventDefault();
        $('#gallaryimageupload').click();
    })
</script>
@endpush