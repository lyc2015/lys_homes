@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/recruit/newgraduate.css') }}" />
@endsection

@section('content')
<div id="contents" class="outline">
    <div class="main">

        <div class="page_header page_header_design">
            <div class="page_header_parts page_header_bg_img"></div>
            <div class="page_header_parts page_header_catch">
                <div class="inner">
                    <h2 class="page_title">
                        <span class="title-en theme_font">Newgraduate</span>
                        <span class="title-ja">新卒採用</span>
                    </h2>
                </div>
            </div>
        </div>


        <div class="content_block width_full clearfix">
            <div class="block_inner content1">
                <h2 class="content_title">
                    <span class="title-ja">新卒採用</span>
                    <span class="title-en">Newgraduate</span>
                </h2>
				@foreach($list as $newgraduate)
                <table class="table-outline">
                    <tbody>
                        <tr>
                            <th class="title" style="padding:0.5em;background-color:#87CEFA">社員種別</th>
                            <td style="padding:0.5em;background-color:#87CEFA">{{$newgraduate->type}}</td>
                        </tr>
                        <tr>
                            <th class="title">初任給</th>
                            <td>{{$newgraduate->start_salary}}</td>
                        </tr>
                        <tr>
                            <th class="title">試雇期間</th>
                            <td>{{$newgraduate->trial_period}}</td>
                        </tr>
                        <tr>
                            <th class="title">諸手当</th>
                            <td>{{$newgraduate->hands_on}}</td>
                        </tr>
                        <tr>
                            <th class="title">昇給</th>
                            <td>{{$newgraduate->salary_incr}}</td>
                        </tr>
                        <tr>
                            <th class="title">賞与</th>
                            <td>{{$newgraduate->bonus}}</td>
                        </tr>
                        <tr>
                            <th class="title">勤務地</th>
                            <td>{{$newgraduate->work_place}}</td>
                        </tr>
                        <tr>
                            <th class="title">勤務時間</th>
                            <td>{!!$newgraduate->work_time!!}</td>
                        </tr>
                        <tr>
                            <th class="title">休日休暇</th>
                            <td>{{$newgraduate->rest_time}}</td>
                        </tr>
                        <tr>
                            <th class="title">福利厚生</th>
                            <td>{{$newgraduate->welfare}}</td>
                        </tr>
                        <tr>
                            <th class="title">教育制度</th>
                            <td>{{$newgraduate->training_system}}</td>
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
