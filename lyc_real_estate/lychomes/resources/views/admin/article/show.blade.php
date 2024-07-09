@extends('backend.layouts.app2')

@section('title', 'Show article')

@push('styles')


@endpush


@section('content')

<div class="block-header"></div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">

            <div class="header bg-red">
                <h2>会社ニュース</h2>
            </div>

            <div class="header">
                <h2>
                    {{$article->title}}
                    <br>
                    <small>Posted At {{$article->created_at->toFormattedDateString()}}</small>
                </h2>
            </div>

            <div class="header">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>封面标题</strong>
                        <span class="left">{{$article->cover_title}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>封面标题(英文) : </strong>
                        <span class="left">{{$article->cover_title_en}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>封面图片 : </strong>
                        <span class="left">{{$article->cover_image}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>封面简介 : </strong>
                        <span class="left">{{$article->cover_intro}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>正文标题 : </strong>
                        <span class="left">{{$article->title}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>正文标题(英文) : </strong>
                        <span class="left">{{$article->title_en}}</span>
                    </li>
<!--
                    <li class="list-group-item">
                        <strong> : </strong>
                        <span class="left">{{$article->show_rank}}</span>
                    </li>
-->
                    <li class="list-group-item">
                        <strong>内容: </strong><br>
                        <div class="form-line">
                            <textarea id ="mytextarea" class="form-control" name="content" rows="10">{{$article->content}}</textarea>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        @if($images)
        <div class="card">
            <div class="header bg-red">
                <h2>封面图片</h2>
            </div>
            <div class="body">
                <div class="row">
                    @foreach($images as $image)
                    <div class="col-md-3" style="height:200px">
                        <img class="img-responsive" src="/{{$image->file_link}}" alt="{{$article->cover_title}}" style="width:auto;height:auto;max-width:100%;max-height:100%">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif


        <div class="card">
            <div class="body">
                <a href="{{route('admin.article.index')}}" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons left">arrow_back</i>
                    <span>BACK</span>
                </a>
                <a href="{{route('admin.article.edit',$article->id)}}" class="btn btn-danger btn-lg waves-effect">
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
<script>
</script>
@endpush
