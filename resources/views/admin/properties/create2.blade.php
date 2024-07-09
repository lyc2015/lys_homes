@extends('backend.layouts.app2')

@section('title', $purpose == "rent" ? "賃貸物件" : "販売物件")

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
    <form action="{{route('admin.properties.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" class="form-control" name="purpose" value="{{ $purpose }}">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-red">
                    <h2>{{ $purpose == "rent" ? "賃貸物件" : "販売物件" }}</h2>
                </div>
                <div class="body">

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="title" class="form-control" value="{{old('title')}}" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                物件名
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="price" step="0.01" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                {{ $purpose == "rent" ? "賃貸価格" : "販売価格" }}
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="address" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                所在地
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nearby" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                交通
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="structure" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>    
                                構造・階数
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="master_area" step=".01" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                専有面積
                            </label>
                        </div>
                    </div>

                    <!-- <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="balconies_area" step=".01" required>
                            <label class="form-label">バルコニー面積</label>
                        </div>
                    </div> -->

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="direction" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                向き
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="house_layout" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                間取り
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="completion_time" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                築年月
                            </label>
                        </div>
                    </div>

                    @if ($purpose == 'rent')
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="deposit" step="0.1" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                敷金
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="key_money" step="0.1" required>
                            <label class="form-label">
                                <span class="red-star">&#9733;</span>
                                礼金
                            </label>
                        </div>
                    </div>
                    @endif

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="balconies_area" step="0.01">
                            <label class="form-label">バルコニー面積</label>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="number" class="form-control" name="household">
                            <label class="form-label">総戸数</label>
                        </div>
                    </div>

                    @if ($purpose == 'rent')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="moving_into">
                                <label class="form-label">入居</label>
                            </div>
                        </div>
                    @else
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="management_mode">
                                <label class="form-label">管理方式</label>
                            </div>
                        </div>
                    @endif


                    <!-- <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="land_rights" required>
                            <label class="form-label">土地権利</label>
                        </div>
                    </div> -->

                    @if ($purpose == 'rent')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="trade_style">
                                <label class="form-label">取引態様</label>
                            </div>
                        </div>
                    @else
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="equipment">
                                <label class="form-label">設備</label>
                            </div>
                        </div>
                    @endif


                    @if ($purpose == 'rent')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="condition">
                                <label class="form-label">条件</label>
                            </div>
                        </div>
                    @else
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="other_equipment">
                                <label class="form-label">その他設備</label>
                            </div>
                        </div>
                    @endif



                    <div class="form-group">
                        <input type="checkbox" id="pet" name="pet" class="filled-in" value="1" />
                        <label for="pet">ペット</label>
                    </div>

                    <!-- <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="communication_environment" required>
                            <label class="form-label">通信環境</label>
                        </div>
                    </div> -->

                    @if ($purpose == 'rent')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="guarantee_company">
                                <label class="form-label">保証会社</label>
                            </div>
                        </div>
                    @else
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="common_equipment">
                                <label class="form-label">共用施設</label>
                            </div>
                        </div>
                    @endif

                    @if ($purpose == 'rent')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="update_year_month_day">
                                <label class="form-label">更新年月日</label>
                            </div>
                        </div>
                    @else
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="monthly_management_price">
                                <label class="form-label">管理費</label>
                            </div>
                        </div>
                    @endif

                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="fitment">
                            <label class="form-label">リフォーム</label>
                        </div>
                    </div>

                    @if ($purpose == 'rent')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="remark">
                                <label class="form-label">備考</label>
                            </div>
                        </div>
                    @else
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="monthly_others_price">
                                <label class="form-label">その他月次費用</label>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2>GALLERY IMAGE</h2>
                </div>
                <div class="body gallary-body">
                    <!-- <input id="input-id" type="file" name="gallaryimage[]" class="file" data-preview-file-type="text" multiple> -->
                    <div class="row gallary-line">
                        <div class="col-lg-5 image-line">
                            <input type="file" name="gallaryimage[]" class="form-control" required />
                        </div>
                        <div class="col-lg-5 text-line">
                            <input type="text" name="discriptions[]" class="form-control" required />
                        </div>
                        <div class="col-lg-2">
                            <div class="col-lg-6 add-next-line">
                                <span class="glyphicon glyphicon-plus"></span>
                            </div>
                            <div class="col-lg-6 delete-current-line">
                                <span class="glyphicon glyphicon-minus"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- BUTTON --}}
            <a href="{{route('admin.'.$purpose)}}" class="btn btn-danger btn-lg m-t-15 waves-effect">
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
<script>
    $(document).on("click", ".add-next-line", function() {
        let gallaryLines = $(".gallary-line");
        if (gallaryLines.length < 10) {
            $(".gallary-body").append(`<div class="row gallary-line">
                        <div class="col-lg-5 image-line">
                            <input type="file" name="gallaryimage[]" class="form-control" required />
                        </div>
                        <div class="col-lg-5 text-line">
                            <input type="text" name="discriptions[]" class="form-control" required />
                        </div>
                        <div class="col-lg-2">
                            <div class="col-lg-6 add-next-line">
                                <span class="glyphicon glyphicon-plus"></span>
                            </div>
                            <div class="col-lg-6 delete-current-line">
                                <span class="glyphicon glyphicon-minus"></span>
                            </div>
                        </div>
                    </div>`);
        }
    });
    $(document).on("click", ".delete-current-line", function() {
        let gallaryLines = $(".gallary-line");
        if (gallaryLines.length > 1) {
            $(this).parent().parent().remove();
        }
    });
</script>
@endpush