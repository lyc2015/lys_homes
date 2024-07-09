@extends('backend.layouts.app2')

@section('title', 'Show career')

@push('styles')


@endpush


@section('content')

<div class="block-header"></div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">

            <div class="header bg-red">
                <h2>キャリア採用</h2>
            </div>

            <div class="header">
                <h2>
                    {{$career->name}}
                    <br>
                    <small>Posted At {{$career->created_at->toFormattedDateString()}}</small>
                </h2>
            </div>

            <div class="header">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>仕事名前</strong>
                        <span class="left">{{$career->name}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>仕事内容 : </strong>
                        <textarea class="left" disabled="true">{{$career->intro}}</textarea>
                    </li>
                    <li class="list-group-item">
                        <strong>応募資格: </strong>
                        <textarea class="left"  disabled="true">{{$career->requirement}}</textarea>
                    </li>
                    <li class="list-group-item">
                        <strong>勤務地: </strong>
                        <textarea class="left" disabled="true">{{$career->work_place}}</textarea>
                    </li>
                    </li>
                    <li class="list-group-item">
                        <strong>勤務時間: </strong>
                        <textarea class="left" disabled="true">{{$career->work_time}}</textarea>
                    </li>
                    <li class="list-group-item">
                        <strong>休日休暇: </strong>
                        <textarea class="left" disabled="true">{{$career->rest_time}}</textarea>
                    </li>
                    <li class="list-group-item">
                        <strong>待遇: </strong>
                        <textarea class="left" disabled="true">{{$career->salary}}</textarea>
                    </li>
<!--
                    <li class="list-group-item">
                        <strong>show_rank : </strong>
                        <span class="left">{{$career->show_rank}}</span>
                    </li>
-->
                </ul>
            </div>

        </div>

        <div class="card">
            <div class="body">
                <a href="{{route('admin.career.index')}}" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons left">arrow_back</i>
                    <span>BACK</span>
                </a>
                <a href="{{route('admin.career.edit',$career->id)}}" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons">edit</i>
                    <span>EDIT</span>
                </a>
            </div>
        </div>

    </div>

</div>
@endsection
