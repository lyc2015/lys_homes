// ページトップに戻るボタン
//-----------------------------------------------------
$(function(){
	var topBtn = $('.js-pagetop');

	topBtn.click(function(){
		$('body,html').animate({
			scrollTop: 0}, 500);
		return false;
	});
});

// js_header_gnav liをホバーしたらclass="hover"を追加
// 後ほどdiv要素とかに変わるかも？
//-----------------------------------------------------
$(document).ready(function () {
	$('.js_header_gnav > li').hover(function () {
		$(this).addClass('hover');
	}, function () {
		$(this).removeClass('hover');
	});
});


// スクロールしたら薄いヘッダーを固定する
//-----------------------------------------------------
$(function(){
	var _window = $(window),
		_header = $('.js_header_init'),
		headerChange = $('.js_header_change'),
		heroBottom;

	_window.on('scroll',function(){
		heroBottom = $('.js_header_init').height();
		if(_window.scrollTop() > heroBottom){
			headerChange.addClass('show');
		}
		else{
			headerChange.removeClass('show');
		}
	});

	_window.trigger('scroll');
});

// js_light_gnav liをホバーしたらclass="hover"を追加
//-----------------------------------------------------
$(document).ready(function () {
	$('.js_light_gnav > li').hover(function () {
		$(this).addClass('hover');
	}, function () {
		$(this).removeClass('hover');
	});
});

// ページ内スクロール調整
//-----------------------------------------------------
$(function() {
	$('.js_link_in_page').click(function() {
		event.preventDefault();
		var target = $(this.hash);
		if (!target.length) return;
		var nav = $('.js_fixed_header');
		var navHeight = nav.height();
		var fixedNavHeight= nav.outerHeight();

		//自分分引いてる
		var position = target.offset().top - (navHeight * 2) ;
		var positionFixed = target.offset().top - fixedNavHeight;

		if(nav.hasClass('fixed')){
			position = positionFixed;
		}
		$("html, body").animate({
			scrollTop: position
		}, 550, "swing");
		return false;
	});
});

