@extends('backend.layouts.app2')

@section('title', "会社概要" )

@push('styles')


@endpush


@section('content')

<div class="block-header"></div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header bg-red">
                <h2>会社概要(ニュースリリース)</h2>
            </div>
            <div class="body">
                <input type="hidden" name="status" class="form-control" value="1" required>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="title" class="form-control" value="{{$content['title']}}" disabled>
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            标题
                        </label>
                    </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="title_en" class="form-control" value="{{$content['title_en']}}" disabled>
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            标题(英文)
                        </label>
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
                        <input type="file" name="cover_image" class="form-control" disabled/>
{{$content['cover_image_link']}}
                    </div>
                </div>
                <div class="form-group form-float" style="padding-bottom:20px">
                    <div class="form-line">
                        <input type="text" class="form-control" name="cover_image_intro" value="{{$content['cover_image_intro']}}" disabled>
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            封面简介
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="body">
                <a href="{{route('admin.companyinfo.index')}}" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons left">arrow_back</i>
                    <span>BACK</span>
                </a>
                <a href="{{route('admin.release.edit',$companyinfo->id)}}" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons">edit</i>
                    <span>EDIT</span>
                </a>
            </div>
        </div>

    </div>

</div>
@endsection
@push('scripts')

<script src="https://cdn.tiny.cloud/1/yk6vfkrytvy0zzqlj2ev5tp5vr6nwk4cgco1yah7y6gr98qi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endpush
