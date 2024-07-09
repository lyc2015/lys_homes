@extends('backend.layouts.app2')

@section('title', "业务指南" )

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
                    <h2>业务指南</h2>
                </div>
                <div class="body">
                    <input type="hidden" name="status" class="form-control" value="1" required>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="name_zh" class="form-control" value="{{$content['name_zh']}}" disabled="true">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                名称(中文)
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title" class="form-control" value="{{$content['title']}}"  disabled="true">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            中间内容
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="middle_content" rows="10"  disabled="true">{{$content['middle_content']}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
@foreach( $content['business'] as $index => $val )
            <div class="card">
                <div class="header bg-red">
                    <h2>业务和强项{{$index+1}}</h2>
                </div>
                <div class="body">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="business_names[]" class="form-control" value="{{$val['name']}}"  disabled="true">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                名称
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="business_titles[]" class="form-control" value="{{$val['title']}}"  disabled="true">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            内容
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="business_contents[]" rows="3"  disabled="true">{{$val['content']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            图片
                        </label>
                        <div class="form-line">
                            <input type="file" class="form-control" name="business_images[]"  disabled="true"/>
{{$val['image_link']}}
                        </div>
                    </div>
                </div>
            </div>
@endforeach

            {{-- BUTTON --}}
            <a href="{{route('admin.companyinfozh.index')}}" class="btn btn-danger btn-lg m-t-15 waves-effect">
                <i class="material-icons left">arrow_back</i>
                <span>BACK</span>
            </a>
            <a href="{{route('admin.profilezh.edit',$companyinfo->id)}}" class="btn btn-danger btn-lg waves-effect">
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

</script>
@endpush
