@extends('frontend.layouts.app2')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('index2/css/contact.css') }}" />
@endsection

<style>
label.radio-inline {
  position: relative;
  padding-left: 0px;
  margin-right: 30px;
}

label.radio-inline input[type="radio"] {
  width: 20px;
  height: 20px;
  position: absolute;
  left: -10;
  top: 50%;
  transform: translateY(-50%);
}

div.form-group.well.well-lg {
    background-color: #F5F5F5;
    border: none;
}
input.form-control {
  height: 35px;
  font-size: 15px;
}
textarea.form-control{
  font-size: 15px;  
}
.small-well {
  padding: 5px;
  border-radius: 3px;
  /* 其他样式属性 */
}

.lyc-well {
    min-height: 20px;
    padding:5px;
    margin-bottom: 20px;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
}
</style>

@section('content')

<div id="contents" class="history">
    <div class="main">

        <div class="page_header page_header_design">
            <div class="page_header_parts page_header_bg_img"></div>
            <div class="page_header_parts page_header_catch">
                <div class="inner">
                    <h2 class="page_title">
                        <span class="title-en theme_font">お問合せ・連絡先</span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="content_block width_full clearfix">
        <div class="block_inner content1" style="width:800px;margin-bottom:40px">
                <table class="table-social">
                    <tbody>
                        <tr>
                            <td class="no-border">
                                <div class="wc-btn top-sns-bnr-main u-cup copy-1" data-toggle="modal" data-target="#wechatModal">
                                    <img class="wc-bnr-img" src="/{{$content['wechat_image_link']}}" alt="WeChat">
                                    <p><span class="wc-bnr-ttl-lg">微信公众号</span><br><span>{{$content['wechat_intro']}}</span></p>
                                </div>
                            </td>
                            <td class="no-border">
                                <div class="line-btn top-sns-bnr-main u-cup copy-1" data-toggle="modal" data-target="#lineModal">
                                    <img class="line-bnr-img" src="/{{$content['line_image_link']}}" alt="Line">
                                    <p><span class="line-bnr-ttl-lg">微信公众号</span><br><span>{{$content['line_intro']}}</span></p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="center-block">
            <div class="col-xs-4 col-xs-offset-4">
                <p style="font-size:22px;text-align:center">問合せ内容</p><br/>
                <form id="contact-us" action="" method="POST" class="form-horizontal">
                    <div class="card" style="margin-bottom:20px;padding:0px 25px;border:1px solid #DDD">
                        <div class="body">
                            @csrf
                            <!--<input type="hidden" name="mailto" value="mafd@lyc.co.jp">-->
                            <input type="hidden" name="mailto" value="yanbao.com@gmail.com">
                            <div class="form-group lyc-well">
                                <div class="form-line">
                                    <label class="form-label" for="name">お名前</label>
                                    <input id="name" name="name" type="text" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group lyc-well">
                                <div class="form-line">
                                    <label class="form-label" for="furigana">お名前(フリガナ)</label>
                                    <input id="furigana" name="furigana" type="text" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group lyc-well">
                                <div class="form-line">
                                    <label class="form-label" for="email">メールアドレス</label>
                                    <input id="email" name="email" type="email" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group lyc-well">
                                <div class="form-line">
                                    <label class="form-label" for="phone">電話番号</label>
                                    <input id="phone" name="phone" type="number" class="form-control">
                                </div>
                            </div>

                            <div class="form-group lyc-well">
                                <div class="form-line">
                                    <label class="form-label" for="type">お問合せの種類</label>
                                </div>
                                <div style="text-align:center">
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="物件購入" required> 物件購入
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="物件賃貸" required> 物件賃貸
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="採用" required> 採用
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="その他" required> その他
                                    </label>
                                </div>    
                            </div>
                        </div>

                        <div class="form-group lyc-well">
                            <div class="form-line">
                                <label class="form-label" for="message">お問合せ内容</label>
                                <textarea id="message" name="message" class="materialize-textarea form-control" rows="6" required></textarea>
                            </div>
                        </div>

                        <div class="form-group lyc-well"  style="text-align: center;">
                            <button id="msgsubmitbtn" class="btn btn-primary btn-lg" type="submit" style="padding:0px;font-size:16px">
                                <span style="padding:10px;">送信する</span>
                            </button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="wechatModal" tabindex="-1" role="dialog" aria-labelledby="wechatModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header no-border">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center row form-group">
                        <h1 style="color:#333;"><span class="wc-modal-mainTtl">微信公众号</span><br><span class="wc-modal-subTtl">{{$content['wechat_intro']}}</span></h1>
                    </div>
                    <div class="text-center row form-group">
                        <img src="/{{$content['wechat_image_link']}}" alt="weChat QR code">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="lineModal" tabindex="-1" role="dialog" aria-labelledby="lineModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header no-border">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center row form-group">
                        <h1 style="color:#333;"><span class="wc-modal-mainTtl">微信公众号</span><br><span class="wc-modal-subTtl">{{$content['line_intro']}}</span></h1>
                    </div>
                    <div class="text-center row form-group">
                        <img src="/{{$content['line_image_link']}}" alt="weChat QR code" height="80%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.col -->
</div>

@endsection

@section('scripts')
<script>
    $('textarea#message').characterCounter();

    $(function() {
        /**
        $(document).on('submit', '#contact-us', function(e) {
            e.preventDefault();

            var data = $(this).serialize();
            var url = "{{ route('contact.message') }}";
            var btn = $('#msgsubmitbtn');

            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                beforeSend: function() {
                    $(btn).addClass('disabled');
                    $(btn).empty().append('<span>LOADING...</span><i class="material-icons right">rotate_right</i>');
                },
                success: function(data) {
                    if (data.message) {
                        M.toast({
                            html: data.message,
                            classes: 'green darken-4'
                        })
                    }
                },
                error: function(xhr) {
                    M.toast({
                        html: 'ERROR: Failed to send message!',
                        classes: 'red darken-4'
                    })
                },
                complete: function() {
                    $('form#contact-us')[0].reset();
                    $(btn).removeClass('disabled');
                    $(btn).empty().append('<span>SEND</span><i class="material-icons right">send</i>');
                },
                dataType: 'json'
            });

        })
        **/
    })
</script>
@endsection
