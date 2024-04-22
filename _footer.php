      <div class="btnTop is_flow"><a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/images/common/btnPagetop.svg"></a></div>
    <div class="bnrCounseling tab-sp"><a href="/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnrCounseling_sp.png" alt="無料カウンセリング実施中　詳しくはこちら" ></a></div>
    <div class="btnCS pc btnCS_hide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/common/btnCounseling.png" alt="無料カウンセリング実施中！"></a></div>
</div>
    <footer>
        <div class="bnrCounseling pc">
            <a href="/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnrCounseling_txt.svg" alt="無料カウンセリング実施中　詳しくはこちら"></a>
        </div>
        <div class="footerMenu flex-bw">
            <nav class="menu_foot">
                <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/reason">選ばれる理由</a><span class="init-bottom"></span>
                        <ul class="menu__second-level_foot">
                            <li><a href="<?php echo home_url(); ?>/reason#knowhow">最先端の動画ノウハウ</a></li>
                            <li><a href="<?php echo home_url(); ?>/reason#support">結果にフォーカスしたサポート</a></li>
                            <li><a href="<?php echo home_url(); ?>/reason#professional">未経験から動画のプロへ</a></li>
                        </ul>
                    </li>
                    
                <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/curriculum">カリキュラム</a><span class="init-bottom"></span>
                        <ul class="menu__second-level_foot">
                            <li><a href="<?php echo home_url(); ?>/curriculum/price">料金</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/voice">受講生インタビュー</a></li>
                    
                    <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/limitedcontents">限定コンテンツ</a></li>
                    
                    <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/blog">ドガポンブログ</a></li>
                    
                    <li class="menu__single_foot"><a href="<?php echo home_url(); ?>/faq">よくある質問</a></li>
                    <li class="menu__single_foot"><a href="">お問い合わせ</a><li>
            </nav>
            <p class="tab-pc"><small>&copy;ドガポンマーケティング大学校. All Rights Reserved.</small></p>
        </div>
        <div class="wrap1250 flex footerIcon">
            <p class="tab-pc"><a href="#">プライバシーポリシー</a>　|　<a href="#">特定商取引法について</a></p>
            <ul class="flex footerIcon">
                <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon1_on.svg"><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon1_of.svg"></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon2_on.svg"><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon2_of.svg"></a></li>
                <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon3_on.svg"><img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_icon3_of.svg"></a></li>
            </ul>
        </div>
        <p class="sp"><a href="#">プライバシーポリシー</a>　|　<a href="#">特定商取引法について</a></p>
        <p class="sp"><small>&copy;ドガポンマーケティング大学校. All Rights Reserved.</small></p>
    </footer>


<?php // 現在使用しているテンプレートファイルを表示
  if (is_user_logged_in()){ // ログイン中なら以下を表示
    global $template; // テンプレートファイルのパスを取得
    $temp_name = basename($template); // パスの最後の名前（ファイル名）を取得
    echo '現在使用しているテンプレートファイル：'.$temp_name; // ファイル名の表示
  }
?>

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
  //無料カウンセリングボタン一定位置で非表示
  var winWidth = $('body').outerWidth(true);
    
    //画面下位置を取得
    var bottomPos = $(document).height() - $(window).height() - 200;
    //var bottomPos = $(document).height() - 100;
    var bottomPos2 = $(".footerIcon").offset().top
    var showFlug = false;
    
     // ウィンドウより小さかったら開く
     panelClose();
    
    $(window).scroll(function () {
        panelClose();
    });
    
    //ウィンドウリサイズしたらwidth変更
    $(window).resize(function(){
        winWidth = $('body').outerWidth(true);
        var bottomPos = $(document).height() - $(window).height() - 200;
        //var bottomPos = $(document).height() - 100;
    });
    
     function panelClose() {
        if ($(this).scrollTop() >= bottomPos) {
            if (showFlug == false) {
                showFlug = true;
                $('.btnCS').fadeOut();
            }
        } else if ($(this).scrollTop() > bottomPos2) {
            if (showFlug == false) {
                showFlug = true;
                $('.btnCS').fadeOut();
            }
        } else {
            if (showFlug) {
                showFlug = false;
                $('.btnCS').fadeIn();
            }
        }
    }
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