@extends('backend.layouts.app2')

@section('title', "公司概要・沿革" )

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
        @csrf
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>公司概要・沿革(中文)</h2>
                </div>
                <div class="body">
                    <input type="hidden" name="status" class="form-control" value="1" required>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="name_zh" class="form-control" value="{{$content['name_zh']}}"  disabled="true">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                名称(中文)
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="header bg-red">
                    <h2>公司概要</h2>
                </div>
                <div class="body">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title_outline" class="form-control" value="{{$content['title_outline']}}"  disabled="true">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            公司名称
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="company_name" rows="3" disabled="true" >{{$content['company_name']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                           总公司地址
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="company_adress" rows="3" disabled="true">{{$content['company_adress']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            資本金
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="capital" rows="3" disabled="true">{{$content['capital']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            营业额
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="revenue" rows="3" disabled="true">{{$content['revenue']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            创立
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="establish_time" rows="3" disabled="true">{{$content['establish_time']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            代表人
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="legal_person" rows="3" disabled="true">{{$content['legal_person']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            主要业务
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="business" rows="3" disabled="true">{{$content['business']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            母公司
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="mother_company" rows="3" disabled="true">{{$content['mother_company']}}</textarea>
                        </div>
                    </div>
                   <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            所属团体
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="affiliation" rows="3" disabled="true">{{$content['affiliation']}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="header bg-red">
                    <span class="red-star">&#9733;</span>
                    沿革
                </div>
                <div class="body">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title_history" class="form-control" value="{{$content['title_history']}}"  disabled="true">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>   
                                标题
                            </label>
                        </div>
                    </div>
                </div>
@php
    $cur_year = date('Y');
    $start_year = $cur_year-15;
@endphp
                <div class="body gallary-body story-body">
@if (!empty($content['company_story']))
                @foreach( $content['company_story'] as $year => $val )
                    <div class="row gallary-line story-line">
                        <div class="col-lg-5 image-line">
                           <select name='years[]'  disabled="true">
                           @for ($i = $cur_year; $i >= $start_year; $i--)
                                @if ($i == $year)
                                    <option value="{{$i}}" selected="true">{{ $i }}</option>
                                @else
                                    <option value="{{$i}}">{{ $i }}</option>
                                @endif
                            @endfor
                            </select>&nbsp;年

                            内容：<textarea name="intros[]" rows="2" style="width:300px;"  disabled="true"/>{{$val}}</textarea>
                        </div>

                    </div>
                @endforeach
@endif
                </div>
            </div>

            {{-- BUTTON --}}
            <a href="{{route('admin.companyinfozh.index')}}" class="btn btn-danger btn-lg m-t-15 waves-effect">
                <i class="material-icons left">arrow_back</i>
                <span>BACK</span>
            </a>
            <a href="{{route('admin.corporatezh.edit',$companyinfo->id)}}" class="btn btn-danger btn-lg waves-effect">
                <i class="material-icons">edit</i>
                <span>EDIT</span>
            </a>
        </div>
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
        $(".story-body").append(`<div class="row gallary-line story-line">
                    <div class="col-lg-5 image-line">
                        <select name='years[]' required>` + yearHtml +
                        `</select>&nbsp;年
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
