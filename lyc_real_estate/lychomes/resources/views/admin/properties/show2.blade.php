@extends('backend.layouts.app2')

@section('title', 'Show Property')

@push('styles')


@endpush


@section('content')

<div class="block-header"></div>

<div class="row clearfix">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">

            <div class="header bg-red">
                <h2>{{ $property->purpose == "rent" ? "賃貸物件" : "販売物件" }}</h2>
            </div>

            <div class="header">
                <h2>
                    {{$property->title}}
                    <br>
                    <small>Posted By <strong>{{$property->user->name}}</strong> on {{$property->created_at->toFormattedDateString()}}</small>
                </h2>
            </div>

            <div class="header">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>{{ $property->purpose == "rent" ? "賃貸価格" : "販売価格" }} : </strong>
                        <span class="left"> &dollar;;{{$property->price}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>所在地 : </strong>
                        <span class="left">{{$property->address}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>交通 : </strong>
                        <span class="left">{{$property->nearby}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>構造・階数 : </strong>
                        <span class="left">{{$property->structure}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>専有面積 : </strong>
                        <span class="left">{{$property->master_area}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>バルコニー面積 : </strong>
                        <span class="left">{{$property->balconies_area}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>向き : </strong>
                        <span class="left">{{$property->direction}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>間取り : </strong>
                        <span class="left">{{$property->house_layout}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>築年月 : </strong>
                        <span class="left">{{$property->completion_time}}</span>
                    </li>

                    @if ($property->purpose == 'rent')
                    <li class="list-group-item">
                        <strong>敷金 : </strong>
                        <span class="left">{{$property->deposit}}</span>
                    </li>
                    <li class="list-group-item">
                        <strong>礼金 : </strong>
                        <span class="left">{{$property->key_money}}</span>
                    </li>
                    @endif

                    <li class="list-group-item">
                        <strong>総戸数 : </strong>
                        <span class="left">{{$property->household}}</span>
                    </li>

                    @if ($property->purpose == 'rent')
                        <li class="list-group-item">
                            <strong>入居 : </strong>
                            <span class="left">{{$property->moving_into}}</span>
                        </li>
                    @else
                        <li class="list-group-item">
                            <strong>管理方式 : </strong>
                            <span class="left">{{$property->management_mode}}</span>
                        </li>
                    @endif

                    <!-- <li class="list-group-item">
                        <strong>土地権利 : </strong>
                        <span class="left">{{$property->land_rights}}</span>
                    </li> -->

                    @if ($property->purpose == 'rent')
                        <li class="list-group-item">
                            <strong>取引態様 : </strong>
                            <span class="left">{{$property->trade_style}}</span>
                        </li>
                    @else
                        <li class="list-group-item">
                            <strong>設備 : </strong>
                            <span class="left">{{$property->equipment}}</span>
                        </li>
                    @endif

                    @if ($property->purpose == 'rent')
                        <li class="list-group-item">
                            <strong>条件 : </strong>
                            <span class="left">{{$property->condition}}</span>
                        </li>
                    @else
                        <li class="list-group-item">
                            <strong>その他設備 : </strong>
                            <span class="left">{{$property->other_equipment}}</span>
                        </li>
                    @endif

                    <li class="list-group-item">
                        <strong>ペット : </strong>
                        <span class="left">{{$property->pet}}</span>
                    </li>
                    <!-- <li class="list-group-item">
                        <strong>通信環境 : </strong>
                        <span class="left">{{$property->communication_environment}}</span>
                    </li> -->

                    @if ($property->purpose == 'rent')
                        <li class="list-group-item">
                            <strong>保証会社 : </strong>
                            <span class="left">{{$property->guarantee_company}}</span>
                        </li>
                    @else
                        <li class="list-group-item">
                            <strong>共用施設 : </strong>
                            <span class="left">{{$property->common_equipment}}</span>
                        </li>
                    @endif

                    @if ($property->purpose == 'rent')
                        <li class="list-group-item">
                            <strong>更新年月日 : </strong>
                            <span class="left">{{$property->update_year_month_day}}</span>
                        </li>
                    @else
                        <li class="list-group-item">
                            <strong>管理費 : </strong>
                            <span class="left">{{$property->monthly_management_price}}</span>
                        </li>
                    @endif

                    <!-- <li class="list-group-item">
                        <strong>修繕積立金 : </strong>
                        <span class="left">{{$property->monthly_maintenance_price}}</span>
                    </li> -->

                    @if ($property->purpose == 'rent')
                        <li class="list-group-item">
                            <strong>備考 : </strong>
                            <span class="left">{{$property->remark}}</span>
                        </li>
                    @else
                        <li class="list-group-item">
                            <strong>その他月次費用 : </strong>
                            <span class="left">{{$property->monthly_others_price}}</span>
                        </li>
                    @endif
                </ul>
            </div>

        </div>

        @if(!$property->gallery->isEmpty())
        <div class="card">
            <div class="header bg-red">
                <h2>GALLERY IMAGE</h2>
            </div>
            <div class="body">
                <div class="row">
                    @foreach($property->gallery as $gallery)
                    <div class="col-md-3" style="height:200px">
                        <img class="img-responsive" src="{{Storage::url('property/gallery/'.$gallery->name)}}" alt="{{$property->title}}" style="width:auto;height:auto;max-width:100%;max-height:100%">
                        <div class="card-content">
                            {{ $gallery->description }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <div class="card">
            <div class="body">
                <a href="{{route('admin.'.$property->purpose)}}" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons left">arrow_back</i>
                    <span>BACK</span>
                </a>
                <a href="{{route('admin.properties.edit',$property->id)}}" class="btn btn-danger btn-lg waves-effect">
                    <i class="material-icons">edit</i>
                    <span>EDIT</span>
                </a>
            </div>
        </div>

    </div>

</div>
@endsection