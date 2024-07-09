(function () {
	'use strict';

	// “地域から探す”タブの切り替え動作
	//------------------------------------------------

	$('.tabs-head a').on('click', function () {
		var $this = $(this);
		var href = $this.attr('href');
		var $target = $this.parent().add($(href));

		$target.addClass('active').siblings().removeClass('active');

		return false;
	});


	// slick - carousel Slider
	//------------------------------------------------

	// slick for PC
	$('.multiple-items').slick({
		dots: true,
		infinite: true,
		autoplay: true,
		slidesToShow: 4,
		arrows: true,
		autoplaySpeed: 2000,
		slidesToScroll: 1
	});

	// 各物件ボックスに付随する売出中物件の一覧のホバー挙動
	if ($('.mansion-one-wrap.sbtn.js-boxtop')[0]) {
		$('.area-wrap .box li')
			.on({
				touchstart: function () {
					$(this).addClass("js-hover");
				}
			})
			.on({
				touchend: function () {
					$(this).removeClass("js-hover");
				}
			});
	}

})();
