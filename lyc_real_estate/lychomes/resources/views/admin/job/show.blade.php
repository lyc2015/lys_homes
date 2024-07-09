@extends('backend.layouts.app2')

@section('title', 'Show Job')

@push('styles')


@endpush


@section('content')

<div class="block-header"></div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">

            <div class="header bg-red">
                <h2>{{ $job->type == 1 ? "新卒採用" : "キャリア採用" }}</h2>
            </div>

            <div class="header">
                <h2>
                    {{$job->name}}
                    <br>
                    <small>Posted At {{$job->created_at->toFormattedDateString()}}</small>
                </h2>
            </div>

            <div class="header">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>採用形態・募集職種</strong>
                        <span class="left">{{$job->name}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>詳細情報 : </strong>
                        <textarea class="left" disabled="true">{{$job->intro}}</textarea>
                    </li>
                    <li class="list-group-item">
                        <strong>募集対象: </strong>
                        <textarea class="left"  disabled="true">{{$job->requirement}}</textarea>
                    </li>
                    <li class="list-group-item">
                        <strong>勤務地: </strong>
                        <textarea class="left" disabled="true">{{$job->work_place}}</textarea>
                    </li>
                    </li>
                    <li class="list-group-item">
                        <strong>勤務時間: </strong>
                        <textarea class="left" disabled="true">{{$job->work_time}}</textarea>
                    </li>
                    <li class="list-group-item">
                        <strong>休日休暇: </strong>
                        <textarea class="left" disabled="true">{{$job->rest_time}}</textarea>
                    </li>
                    <li class="list-group-item">
                        <strong>給与: </strong>
                        <textarea class="left" disabled="true">{{$job->salary}}</textarea>
                    </li>
<!--
                    <li class="list-group-item">
                        <strong>show_rank : </strong>
                        <span class="left">{{$job->show_rank}}</span>
                    </li>
-->
                </ul>
            </div>

        </div>

        <div class="card">
            <div class="body">
                <a href="{{route('admin.job.index', ['type' => $job->type,])}}" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons left">arrow_back</i>
                    <span>BACK</span>
                </a>
                <a href="{{route('admin.job.edit',$job->id)}}" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons">edit</i>
                    <span>EDIT</span>
                </a>
            </div>
        </div>

    </div>

</div>
@endsection
