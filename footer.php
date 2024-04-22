      <div class="btnTop is_flow"><a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/images/common/btnPagetop.svg"></a></div>
    <div class="bnrCounseling tab-sp"><a href="<?php echo home_url(); ?>/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnrCounseling_sp.png" alt="無料カウンセリング実施中　詳しくはこちら" ></a></div>
    <div class="btnCS pc btnCS_hide"><a href="<?php echo home_url(); ?>/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/common/btnCounseling.png" alt="無料カウンセリング実施中！"></a></div>
</div>
    <footer>
        <div class="bnrCounseling pc">
            <a href="<?php echo home_url(); ?>/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnrCounseling_txt.svg" alt="無料カウンセリング実施中　詳しくはこちら"></a>
        </div>
        <div class="footerMenu flex-bw">
            <nav class="menu_foot">
                <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/reason" class="<?php if(is_page('reason')) : ?>active2<?php endif; ?>">選ばれる理由</a><span class="init-bottom"></span>
                        <ul class="menu__second-level_foot">
                            <li><a href="<?php echo home_url(); ?>/reason#knowhow">最先端の動画ノウハウ</a></li>
                            <li><a href="<?php echo home_url(); ?>/reason#support">結果にフォーカスしたサポート</a></li>
                            <li><a href="<?php echo home_url(); ?>/reason#professional">未経験から動画のプロへ</a></li>
                        </ul>
                    </li>
                    
                <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/curriculum" class="<?php if(is_page('curriculum')) : ?>active2<?php endif; ?>">カリキュラム</a><span class="init-bottom"></span>
                        <ul class="menu__second-level_foot">
                            <li class="<?php if(is_page('price')) : ?>active2<?php endif; ?>"><a href="<?php echo home_url(); ?>/curriculum/price">料金</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/tag/voice" class="<?php if(is_tag('voice')) : ?>active2<?php endif; ?>">受講生インタビュー</a></li>
                    
                    <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/limitedcontents" class="<?php if(is_page('limitedcontents')) : ?>active2<?php endif; ?>">限定コンテンツ</a></li>
                    
                    <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/blog" class="<?php if(is_page('blog')) : ?>active2<?php endif; ?>">ドガポンブログ</a></li>
                    
                    <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/faq" class="<?php if(is_post_type_archive('faq')) : ?>active2<?php endif; ?>">よくある質問</a></li>
                    <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/contact" class="<?php if(is_page('contact')) : ?>active2<?php endif; ?>">お問い合わせ</a><li>
            </nav>
            <p class="tab-pc"><small>&copy;ドガポンマーケティング大学校. All Rights Reserved.</small></p>
        </div>
        <div class="wrap1250 flex footerIcon">
            <p class="tab-pc"><a href="<?php echo home_url(); ?>/privacy" class="<?php if(is_page('privacy')) : ?>active2<?php endif; ?>">プライバシーポリシー</a>　|　<a href="<?php echo home_url(); ?>/transaction" class="<?php if(is_page('transaction')) : ?>active2<?php endif; ?>">特定商取引法について</a></p>
            <ul class="flex footerIcon">
                <li><a href="https://twitter.com/dogaponkun" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon1_on.svg"><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon1_of.svg"></a></li>
                <li><a href="https://twitter.com/dogaponsapuri" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon2_on.svg"><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon2_of.svg"></a></li>
                <li><a href="https://landing.lineml.jp/r/1654942304-oMXM9Bwg?lp=q8UXyc" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon3_on.svg"><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon3_of.svg"></a></li>
            </ul>
        </div>
        <p class="sp"><a href="<?php echo home_url(); ?>/privacy" class="<?php if(is_page('privacy')) : ?>active2<?php endif; ?>">プライバシーポリシー</a>　|　<a href="<?php echo home_url(); ?>/transaction" class="<?php if(is_page('transaction')) : ?>active2<?php endif; ?>">特定商取引法について</a></p>
        <p class="sp"><small>&copy;ドガポンマーケティング大学校. All Rights Reserved.</small></p>
    </footer>

<?php wp_footer(); ?>


<!-- スムーズスクロール部分の記述 -->
<script>
$(function(){
        // #で始まるリンクをクリックしたら実行されます
        $('a[href^="#"]').click(function() {
          // スクロールの速度
          var speed = 400; // ミリ秒で記述
          var href= $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'html' : href);
          var position = target.offset().top;
          $('body,html').animate({scrollTop:position}, speed, 'swing');
          return false;
        });
      });
</script>
    
<script>
$(function(){
  // 無料カウンセリングボタン表示対応
  $(window).scroll(function (){
    $(".bnrCounseling.pc").each(function(){
      var imgPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > imgPos - windowHeight + windowHeight/5){
        $('.btnCS').fadeOut();
      } else {
        $('.btnCS').fadeIn();
      }
    });
  });
});
</script>
    
<script>
$(function(){
  var pos = 0;
  var header = $('header .pc');
  
  $(window).on('scroll', function(){
    if($(this).scrollTop() < pos ){
      //上スクロール時の処理
      header.removeClass('hide');
    }else{
      //下スクロール時の処理
      header.addClass('hide');
    }
    pos = $(this).scrollTop();
  });
});
</script>
<script>
    //ページトップボタンスクロール表示
    $(window).on('load scroll', function(){
      if ($(window).scrollTop() > 200) {
        $('.is_flow').fadeIn(400);
       } else {
        $('.is_flow').fadeOut(400);
       }
    });
        
    //SP用無料カウンセリングボタンスクロール表示
    $(window).on('load scroll', function(){
      if ($(window).scrollTop() > 200) {
        $('.bnrCounseling.tab-sp').fadeIn(400);
       } else {
        $('.bnrCounseling.tab-sp').fadeOut(400);
       }
    });
</script>
    
<script>
// メニュークリックでメニュー閉じる
$(document).ready(function() {
    $('.drawer').drawer();
    $('.drawer-nav ul.child li a').on('click', function() {
        $('.drawer').drawer('close');
    });
});
</script>
<script>
//$('.toggle').click(function() {
//    $(this).toggleClass("active").next().slideToggle(300);
//});
    
$('#doropmenu_1 .toggle').click(function() {
    $('#doropmenu_1 .toggle').toggleClass("active");
    $('#doropmenu_1 ul').slideToggle(300);
});   

$('#doropmenu_2 .toggle').click(function() {
    $('#doropmenu_2 .toggle').toggleClass("active");
    $('#doropmenu_2 ul').slideToggle(300);
}); 
    
$('.init-bottom').click(function() {
    $(this).toggleClass("active").next().slideToggle(300);
});
</script>
    
<script>
$(function() {
    var $elem = $(".js-image-replace");
    var sp = "_sp.";
    var pc = "_pc.";
    var replaceWidth = 768;

    function imageReplace() {
      var windowWidth = parseInt(window.innerWidth);
      $elem.each(function() {
        var $this = $(this);
        if (windowWidth >= replaceWidth) {
          $this.attr("src", $this.attr("src").replace(sp, pc));
        } else {
          $this.attr("src", $this.attr("src").replace(pc, sp));
        }
      });
    }
    imageReplace();
});      
      
</script>