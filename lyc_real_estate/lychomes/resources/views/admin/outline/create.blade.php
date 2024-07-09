@extends('backend.layouts.app2')

@section('title', "会社概要" )

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
    <form action="{{route('admin.outline.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>会社概要(会社概要)</h2>
                </div>
                <div class="body">
                    <input type="hidden" name="status" class="form-control" value="1" required>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title_en" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                标题(英文)
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-label">
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                会社名
                            </label>
                        </div>
                        <div class="form-line">
                            <textarea class="form-control" name="company_name" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            本社所在地
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="company_adress" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="legal_person_code" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                法人番号
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="login_code" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                適格請求書発行事業者登録番号
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="tel" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                電話番号 
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="register_capital" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                資本金
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="establish_time" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                創立
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="employee_count" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                従業員数 
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="legal_person" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                代表者
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="license_number" class="form-control" value="" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                免許番号
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>    
                            事業内容
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="business_content" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <label class="form-label">
                            <span class="red-star">&#9733;</span>
                            所属団体
                        </label>
                        <div class="form-line">
                            <textarea class="form-control" name="membership" rows="5"></textarea>
                        </div>
                    </div>
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
                            <input type="file" name="cover_image" class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group form-float" style="padding-bottom:20px">
                        <div class="form-line">
                            <input type="text" class="form-control" name="cover_image_intro" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                封面简介
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            {{-- BUTTON --}}
            <a href="{{route('admin.companyinfo.index')}}" class="btn btn-danger btn-lg m-t-15 waves-effect">
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
