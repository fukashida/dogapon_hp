      <div class="btnTop is_flow"><a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/images/common/btnPagetop.svg"></a></div>
    <div class="bnrCounseling sp"><a href="<?php echo home_url(); ?>/counseling">無料カウンセリング実施中</a></div>
    <div class="btnCS  pc"><a href="<?php echo home_url(); ?>/counseling">無料カウンセリング実施中</a></div>
</div>
    <footer>
        <div class="bnrCounseling pc">
            <p><span>無料</span>カウンセリング実施中</p>
            <a href="<?php echo home_url(); ?>/counseling">
              詳しくはこちら
            </a>
        </div>
        <div class="footerMenu flex-bw">
            <nav class="menu_foot">
                <li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer/logo.svg" alt="ドガポンマーケティング大学校"></a></li>

                <div>
                  <li class="menu__single_foot fs"><a href="<?php echo home_url(); ?>/curriculum" class="<?php if(is_page('curriculum')) : ?>active2<?php endif; ?>">カリキュラム</a>
                      <ul class="menu__second-level_foot">
                          <li class="<?php if(is_page('price')) : ?>active2<?php endif; ?>"><a href="<?php echo home_url(); ?>/curriculum/price">料金</a></li>
                      </ul>
                  </li>
                      
                  <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/tag/voice" class="<?php if(is_tag('voice')) : ?>active2<?php endif; ?>">受講生の声</a></li>
                  
                  <li class="menu__single_foot ed"><a href="<?php echo home_url(); ?>/faq" class="<?php if(is_post_type_archive('faq')) : ?>active2<?php endif; ?>">よくある質問</a></li>
                </div>
            </nav>
        </div>
        <div class="wrap1250 flex footerIcon">
          <ul class="flex footerIcon">
              <li><a href="https://twitter.com/dogaponsapuri" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon2_on.svg"><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon2_of.svg"></a></li>
          </ul>
          <div class="flex">
            <p class="tab-pc"><small>&copy;ドガポンマーケティング大学校. All Rights Reserved.</small></p>
            <p class="tab-pc"><a href="<?php echo home_url(); ?>/privacy" class="<?php if(is_page('privacy')) : ?>active2<?php endif; ?>">プライバシーポリシー</a><a href="<?php echo home_url(); ?>/transaction" class="<?php if(is_page('transaction')) : ?>active2<?php endif; ?>">特定商取引法について</a></p>
          </div>
        </div>
        <p class="sp"><a href="<?php echo home_url(); ?>/privacy" class="<?php if(is_page('privacy')) : ?>active2<?php endif; ?>">プライバシーポリシー</a><a href="<?php echo home_url(); ?>/transaction" class="<?php if(is_page('transaction')) : ?>active2<?php endif; ?>ed">特定商取引法について</a></p>
        <p class="sp last"><small>&copy;ドガポンマーケティング大学校. All Rights Reserved.</small></p>
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
        $('.bnrCounseling.sp').fadeIn(400);
       } else {
        $('.bnrCounseling.sp').fadeOut(400);
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