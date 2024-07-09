@extends('backend.layouts.app2')

@section('title', "お問合せ・連絡先" )

@push('styles')
<link rel="stylesheet" href="{{asset('backend/plugins/bootstrap-select/css/bootstrap-select.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
@endpush

@section('content')

<style>
.red-star {
  color: red;
}
</style>

<div class="block-header"></div>

<div class="row clearfix">
    <form action="{{route('admin.contact.update', $contact->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>お問合せ・連絡先</h2>
                </div>
                <div class="body">
                    <input type="hidden" name="name" class="form-control" value="contact">
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            Wechat账号二维码
                        </label>
                        <div class="form-line">
                            <input type="file" name="wechat_qcode" class="form-control" value=""/>
{{$content['wechat_image_link']}}
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="wechat_intro" class="form-control" value="{{$content['wechat_intro']}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                Wechat账号说明
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            Line账号二维码
                        </label>
                        <div class="form-line">
                            <input type="file" name="line_qcode" class="form-control" value=""/>
{{$content['line_image_link']}}
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="line_intro" class="form-control" value="{{$content['line_intro']}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                Line账号说明
                            </label>
                        </div>
                    </div>

                </div>
            </div>

            {{-- BUTTON --}}
            <a href="{{route('admin.contact.index')}}" class="btn btn-danger btn-lg m-t-15 waves-effect">
                <i class="material-icons left">arrow_back</i>
                <span>BACK</span>
            </a>

            <button type="submit" class="btn btn-indigo btn-lg m-t-15 waves-effect">
                <i class="material-icons">save</i>
                <span>SAVE</span>
            </button>
        </div>
    </form>
</div>
@endsection


@push('scripts')
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>
<script src="{{ asset('backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
-->
<script src="https://cdn.tiny.cloud/1/yk6vfkrytvy0zzqlj2ev5tp5vr6nwk4cgco1yah7y6gr98qi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
@endpush
