@extends('backend.layouts.app2')

@section('title', "新卒採用")

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
    <form action="{{route('admin.newgraduate.update',$newgraduate->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>新卒採用</h2>
                </div>
                <div class="body">
                    <input type="hidden" name="status" class="form-control" value="1" required>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="type" class="form-control" value="{{$newgraduate->type}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                社員種別
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            初任給
                        </label>
                        <div class="form-line">
                            <textarea name="start_salary" class="form-control" required>{{$newgraduate->start_salary}}</textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            試雇期間
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="trial_period" required>{{$newgraduate->trial_period}}</textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           諸手当
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="hands_on" required>{{$newgraduate->hands_on}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            昇給
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="salary_incr" required>{{$newgraduate->salary_incr}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            賞与
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="bonus" required>{{$newgraduate->bonus}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           勤務地
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="work_place" required>{{$newgraduate->work_place}}</textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           勤務時間 
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="work_time" required>{{$newgraduate->work_time}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           休日休暇 
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="rest_time" required>{{$newgraduate->rest_time}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            福利厚生
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="welfare" required>{{$newgraduate->welfare}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            教育制度
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="training_system" required>{{$newgraduate->training_system}}</textarea>
                        </div>
                    </div>

                    <input type="hidden" class="form-control" name="show_rank" step=1 value="1" required>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    {{-- BUTTON --}}
                    <a href="{{route('admin.newgraduate.index')}}" class="btn btn-danger btn-lg m-t-15 waves-effect">
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
