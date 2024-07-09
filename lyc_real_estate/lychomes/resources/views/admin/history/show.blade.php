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
                <h2>会社概要(沿革)</h2>
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

                <div class="form-group form-float">
                    <label class="form-label">
                        <span class="red-star">&#9733;</span>
                        中间标题
                    </label>
                    <div class="form-line">
                        <textarea class="form-control" name="middle_title" rows="3" readonly>{{$content['middle_title']}}</textarea>
                    </div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" name="bottom_content" class="form-control" value="{{$content['bottom_content']}}" disabled>
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
@if (!empty($content['company_story']))
            @foreach( $content['company_story'] as $year => $val )
            @foreach( $val as $month => $val2 )
            @foreach( $val2 as $key => $val3 )
                <div class="row gallary-line story-line">
                    <div class="col-lg-5 image-line">
                       <select name='years[]' disabled>
                        @for ($i = $cur_year; $i >= $start_year; $i--)
                            @if ($i == $year)
                                <option value="{{$i}}" selected="true">{{ $i }}</option>
                            @else
                                <option value="{{$i}}">{{ $i }}</option>
                            @endif
                        @endfor
                        </select>&nbsp;年
                        &nbsp;<select name='months[]' disabled>
                        @for ($j = 1; $j <= 12; $j++)
                            @if ($j == $month)
                            <option value="{{$j}}" selected="true">{{ $j }}</option>
                            @else
                            <option value="{{$j}}">{{ $j }}</option>
                            @endif
                        @endfor
                        </select>&nbsp;月
                        内容：<textarea name="intros[]" rows="2" style="width:300px;" readonly />{{$val3}}</textarea>
                    </div>
                </div>
            @endforeach
            @endforeach
            @endforeach
@endif
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
                <a href="{{route('admin.history.edit',$companyinfo->id)}}" class="btn btn-danger btn-lg waves-effect">
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
