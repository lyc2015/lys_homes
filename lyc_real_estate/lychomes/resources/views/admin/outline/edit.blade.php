@extends('backend.layouts.app2')

@section('title', "会社概要" )

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
    <form action="{{route('admin.outline.update',$companyinfo->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>会社概要(会社概要)</h2>
                </div>
                <div class="body">
                    <input type="hidden" name="status" class="form-control" value="1" required>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title" class="form-control" value="{{$content['title']}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title_en" class="form-control" value="{{$content['title_en']}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题(英文)
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-label">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                会社名
                            </label>
                        </div>
                        <div class="form-line">
                            <textarea class="form-control" name="company_name" rows="3">{{$content['company_name']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            本社所在地
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="company_adress" rows="3">{{$content['company_adress']}}</textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="legal_person_code" class="form-control" value="{{$content['legal_person_code']}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                法人番号
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="login_code" class="form-control" value="{{$content['login_code']}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                適格請求書発行事業者登録番号
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="tel" class="form-control" value="{{$content['tel']}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                電話番号 
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="register_capital" class="form-control" value="{{$content['register_capital']}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                資本金
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="establish_time" class="form-control" value="{{$content['establish_time']}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                創立
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="employee_count" class="form-control" value="{{$content['employee_count']}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                従業員数 
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="legal_person" class="form-control" value="{{$content['legal_person']}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                代表者
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="license_number" class="form-control" value="{{$content['license_number']}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                免許番号
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            事業内容
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="business_content" rows="5">{{$content['business_content']}}</textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            所属団体
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="membership" rows="5">{{$content['membership']}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="header bg-red">
                    <span class="red-star">&#9733;</span>
                    封面图片
                </div>
                <div class="body gallary-body">
                    <div class="row gallary-line">
                        <div class="col-lg-5 image-line">
                            <input type="file" name="cover_image" class="form-control"/>
{{$content['cover_image_link']}}
                        </div>
                    </div>
                    <div class="form-group form-float" style="padding-bottom:20px">
                        <div class="form-line">
                            <input type="text" class="form-control" name="cover_image_intro" value="{{$content['cover_image_intro']}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                封面简介
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    {{-- BUTTON --}}
                    <a href="{{route('admin.companyinfo.index')}}" class="btn btn-danger btn-lg m-t-15 waves-effect">
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
<script src="https://cdn.tiny.cloud/1/yk6vfkrytvy0zzqlj2ev5tp5vr6nwk4cgco1yah7y6gr98qi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>

    function genID(length){
       return Number(Math.random().toString().substr(3,length) + Date.now()).toString(36);
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on("click", ".add-next-line", function() {
        let gallaryLines = $(".gallary-line");
        if (gallaryLines.length < 10) {
            uniqId = genID();
            $(".gallary-body").append(`<div class="row gallary-line">
                        <div class="col-lg-5 image-line">
                            <input type="file" name="images[]" class="form-control" required  onchange="fileInputChange(event.target, '${uniqId}')"/>
                        </div>
                        <div class="col-lg-5 text-line">
                            <input type="text" name="discriptions[]" class="form-control" required />
                        </div>
                        <div class="col-lg-2">
                            <div class="col-lg-6 add-next-line">
                                <span class="glyphicon glyphicon-plus"></span>
                            </div>
                            <div class="col-lg-6 delete-current-line" data-id="gallery-perview-${uniqId}">
                                <span class="glyphicon glyphicon-minus"></span>
                            </div>
                        </div>
                    </div>`);
        }
    });
    $(document).on("click", ".delete-current-line", function() {
        let gallaryLines = $(".gallary-line");
        if (gallaryLines.length > 1) {
            $(this).parent().parent().remove();
        }
        var id = $(this).attr('data-id');
        $('#'+id).remove();

    });

    // DELETE GALLERY IMAGE
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

    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview, uniqId) {
        $('#gallerybox').html(''); //一个图片的时候，清空
        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $('<div class="gallery-image-edit" id="gallery-perview-' + uniqId + '"><img src="' + event.target.result + '" height="106" width="173" alt=""/></div>').appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }
    };
    
    function fileInputChange(es, uniqId) {
        imagesPreview(es, 'div#gallerybox', uniqId);
    }
    
</script>
@endpush
