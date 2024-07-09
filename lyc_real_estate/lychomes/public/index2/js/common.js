(function () {
    'use strict';

    // 右クリック禁止・画像のドラッグ禁止
    //------------------------------------------------

    //右クリック禁止
    $(function(){
      $('body').on('contextmenu',function(e){
        return false;
      });
    });

    //ドラッグ禁止
    $(function(){
      $("img").on('mousedown mouseup',function(e){
        return false;
      });
    });


})();

// プレミアムリンクをもっと見るボタン
$(function(){
  $('.js_ft_premium_link_more_button').on('click', function(){
    $tmp_ft_premium_link_area = $(this).parent().prev('.js_ft_premium_link_area');
    $tmp_ft_premium_link_area.children('.js_ft_premium_link_hidden').removeClass('js_ft_premium_link_hidden');
    if ($tmp_ft_premium_link_area.children('.js_ft_premium_link_hidden').length == 0) {
      $(this).fadeOut();
    }
  });
});
