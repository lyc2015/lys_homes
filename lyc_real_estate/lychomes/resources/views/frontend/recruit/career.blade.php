@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/recruit/career.css') }}" />
@endsection

@section('content')
<div id="contents" class="outline">
    <div class="main">

        <div class="page_header page_header_design">
            <div class="page_header_parts page_header_bg_img"></div>
            <div class="page_header_parts page_header_catch">
                <div class="inner">
                    <h2 class="page_title">
                        <span class="title-en theme_font">Career</span>
                        <span class="title-ja">キャリア採用</span>
                    </h2>
                </div>
            </div>
        </div>


        <div class="content_block width_full clearfix">
            <div class="block_inner content1">
                <h2 class="content_title">
                    <span class="title-ja">キャリア採用</span>
                    <span class="title-en">Career</span>
                </h2>

				@foreach($list as $career)
                <table class="table-outline">
                    <tbody>
                        <tr>
                            <th class="title" style="padding:0.5em;background-color:#87CEFA" colspan="2">{{$career->name}}</th>
                        </tr>
                        <tr>
                            <th class="title">仕事内容</th>
                            <td>{{$career->intro}}</td>
                        </tr>
                        <tr>
                            <th class="title">応募資格</th>
                            <td>{{$career->requirement}}</td>
                        </tr>
                        <tr>
                            <th class="title">勤務地</th>
                            <td>{{$career->work_place}}</td>
                        </tr>
                        <tr>
                            <th class="title">勤務時間</th>
                            <td>{{$career->work_time}}</td>
                        </tr>
                        <tr>
                            <th class="title">休日休暇</th>
                            <td>{{$career->rest_time}}</td>
                        </tr>
                        <tr>
                            <th class="title">待遇</th>
                            <td>{{$career->salary}}</td>
                        </tr>
                    </tbody>
                </table>
<br/><br/>
				@endforeach



            </div>
        </div>

    </div>
</div>
@endsection
