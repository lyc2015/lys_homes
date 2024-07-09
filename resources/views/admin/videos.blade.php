@extends('backend.layouts.app2')

@section('title', 'Edit Property')

@push('styles')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery.js@1.4.0/dist/css/lightgallery.min.css">
<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">

@endpush


@section('content')

<div class="block-header"></div>

<div class="row clearfix">
    <form action="{{route('admin.video.set')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12 video-container">
            @foreach ($videos as $video)
            <div style="display:none;" id="{{ $video }}">
                <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                    <source src="{{ asset('/index2/img/videos/'.$video) }}" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>
            @endforeach
            <ul id="video-gallery">
                @foreach ($videos as $video)
                <li data-poster="video-poster1.jpg data-sub-html=" video caption1" data-html="#{{ $video }}">
                    <video width="20%">
                        <source src="{{ asset('/index2/img/videos/'.$video) }}" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </li>
                @endforeach
            </ul>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    {{-- BUTTON --}}
                    <button type="submit" class="btn btn-danger btn-lg m-t-15 waves-effect">
                        <i class="material-icons">save</i>
                        <span>SAVE</span>
                    </button>

                </div>
            </div>

        </div>
    </form>
</div>


@endsection


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/lightgallery.js@1.4.0/dist/js/lightgallery.min.js"></script>
<script src="http://vjs.zencdn.net/4.12/video.js"></script>
<script>
    lightGallery(document.getElementById('video-gallery'), {
        videojs: true
    });
</script>
@endpush