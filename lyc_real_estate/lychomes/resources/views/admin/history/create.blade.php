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
    <form action="{{route('admin.history.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>会社概要(沿革)</h2>
                </div>
                <div class="body">
                    <input type="hidden" name="status" class="form-control" value="1" required>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title_en" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题(英文)
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            中间标题
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="middle_title" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="bottom_content" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                底部内容
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="header bg-red">
                    <span class="red-star">&#9733;</span>
                    企业故事
                </div>
@php
    $cur_year = date('Y');
    $start_year = $cur_year-15;
@endphp
                <div class="body gallary-body story-body">
                    <div class="row gallary-line story-line">
                        <div class="col-lg-5 image-line">
                           <select name='years[]' required>
                            @for ($i = $cur_year; $i >= $start_year; $i--)
                                <option value="{{$i}}">{{ $i }}</option>
                            @endfor
                            </select>&nbsp;年

                            &nbsp;<select name='months[]' required>
                            @for ($j = 1; $j <= 12; $j++)
                                <option value="{{$j}}">{{ $j }}</option>
                            @endfor
                            </select>&nbsp;月
                            内容：<textarea name="intros[]" rows="2" style="width:300px;" required /></textarea>
                        </div>

                        <div class="col-lg-2">
                            <div class="col-lg-6 add-next-line">
                                <span class="glyphicon glyphicon-plus"></span>
                            </div>
                            <div class="col-lg-6 delete-current-line">
                                <span class="glyphicon glyphicon-minus"></span>
                            </div>
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
                            <input type="file" name="cover_image" class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group form-float" style="padding-bottom:20px">
                        <div class="form-line">
                            <input type="text" class="form-control" name="cover_image_intro" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                封面简介
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            {{-- BUTTON --}}
            <a href="{{route('admin.companyinfo.index')}}" class="btn btn-danger btn-lg m-t-15 waves-effect">
                <i class="material-icons left">arrow_back</i>
                <span>BACK</span>
            </a>

            <button type="submit" class="btn btn-indigo btn-lg m-t-15 waves-effect">
                <i class="material-icons">save</i>
                <span>SAVE</span>
            </button>
        </div>
    </form>
</div>
@endsection


@push('scripts')
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>
<script src="{{ asset('backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
-->
<script src="https://cdn.tiny.cloud/1/yk6vfkrytvy0zzqlj2ev5tp5vr6nwk4cgco1yah7y6gr98qi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on("click", ".add-next-line", function() {
        let gallaryLines = $(".story-line");
        var yearHtml = monthHtml = '';
        var cur_year = {{$cur_year}};
        var start_year = {{$start_year}};
        for(i = cur_year; i >= start_year; i--) {
            yearHtml += '<option value="'+i+'">'+i+'</option>';
        }
        for(j = 1; j <= 12; j++) {
            monthHtml += '<option value="'+j+'">'+j+'</option>';
        }
        $(".story-body").append(`<div class="row gallary-line story-line">
                    <div class="col-lg-5 image-line">
                        <select name='years[]' required>` + yearHtml +
                        `</select>&nbsp;年

                        &nbsp;<select name='months[]' required>` + monthHtml +
                        `</select>&nbsp;月
                        内容：<textarea name="intros[]" rows="2" style="width:300px;" required/></textarea>
                    </div>
                    <div class="col-lg-2">
                        <div class="col-lg-6 add-next-line">
                            <span class="glyphicon glyphicon-plus"></span>
                        </div>
                        <div class="col-lg-6 delete-current-line">
                            <span class="glyphicon glyphicon-minus"></span>
                        </div>
                    </div>
                </div>`);
    });
    $(document).on("click", ".delete-current-line", function() {
        let gallaryLines = $(".story-line");
        if (gallaryLines.length > 1) {
            $(this).parent().parent().remove();
        }
    });


</script>
@endpush
