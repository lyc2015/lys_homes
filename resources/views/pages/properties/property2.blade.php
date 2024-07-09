@extends('frontend.layouts.app2')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/company/business.css') }}" />
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-4.6.2-dist/css/bootstrap.min.css') }}" /> -->
@endsection

<style>
img {
    width: auto;
    height: auto;
    max-width: 100%;
    max-height: 100%;
}

.detail-link {
    background: #484848;
    color: #fff;
    display: block;
    font-size: 12px;
    font-weight: normal;
    letter-spacing: 2px;
    line-height: 30px;
    margin: 6px 0 10px;
    padding: 0;
    text-align: center;
    transition: .2s ease-out;
}

.thumbnail {
    position: relative;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.text {
    color: #fff;
    font-size: 18px;
    text-align: center;
    display: none;
}

.thumbnail:hover .overlay {
    opacity: 1;
}

.thumbnail:hover .text {
    display: block;
}
</style>

@section('content')
<div id="contents" class="business">
    <div class="main">

        <div class="page_header">
            <div class="page_header_parts page_header_bg_img"></div>
            <div class="page_header_parts page_header_catch">
                <div class="inner">
                    <h2 class="page_title">
                        <span class="title-en theme_font">{{ $purpose == "rent" ? "賃貸物件" : "販売物件" }}</span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top:30px">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="background:#dedede">
                <center>
                    <p style="font-size:21px;line-height: 2.7">{{ $purpose == "rent" ? "賃貸物件" : "販売物件" }}</p>
                </center>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="content_block width_full clearfix">
            <div class="block_inner content1">
                <div class="site_content_list_wrap clearfix">
                    <div class="multiple-items flex-row">
                        @foreach($properties as $property)
                        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-6">
                            <div class="thumbnail slick-thumbnail">
                                <a href="{{ route('property.show', ['id' => $property->id,]) }}" target="_blank">
                                    @if (!$property->gallery->isEmpty())
                                    <img src="{{ Storage::url('property/gallery/'.$property->gallery->get(0)->name) }}"
                                        style="height: 200px;" />
                                    @else
                                    <img src="{{ asset('/index2/img/top/list_content_menu-4.jpg') }}"
                                        style="height: 200px;" />
                                    @endif
                                    <div class="caption">
                                        <p class="text-justify" style="font-size: 16px;font-weight: bold">
                                            <!-- 物件名 : {{ $property->title}} -->
                                            <span style="color:red">
                                                {{ $purpose == "rent" ? "賃貸価格" : "販売価格" }}:
                                                {{ $property->price != round($property->price) ? $property->price : number_format($property->price, 0) }}
                                                万円
                                            </span>
                                            <br />
                                            <span style="color:#484848">面积: {{ $property->master_area }} m2</span>
                                        </p>
                                        <p class="text-justify">
                                            間取り : {{ $property->structure}}
                                            <br />
                                            交通 : {{ $property->nearby }}
                                        </p>
                                        <p class="detail-link">物件詳細はこちら</p>
                                    </div>
                                    <div class="overlay">
                                        <div class="text">View More</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <center>{{ $properties->appends(request()->query())->links() }}</center>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
@endsection