<?php get_header(); ?>

<style>
    .drawer-hamburger-icon, .drawer-hamburger-icon:before, .drawer-hamburger-icon:after{background-color: #4d4d4d;}
    .wraplineBG{background-size: cover;}
</style>

<div class="swiper-container tab-pc wrapMV toppage">
    <figure class="mbArrow"><a href="#wrapCL2"><img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow_b.svg"></a></figure>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><figure class="slide1"><a href="<?php echo home_url(); ?>/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/top/btnSlider_CSL.svg"></a><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide1bg_pc.jpg"></figure></div>
                <div class="swiper-slide"><figure class="slide2"><a href="<?php echo home_url(); ?>/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/top/btnSlider_CSL.svg"></a><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide2bg_pc.jpg"></figure></div>
                <div class="swiper-slide"><figure class="slide3"><a href="<?php echo home_url(); ?>/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/top/btnSlider_CSL.svg"></a><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide3bg_pc.jpg"></figure></div>
            </div>
    
<!--div class="swiper-wrapper">
    <div class="swiper-slide"><a href="<?php echo home_url(); ?>/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide1_pc.jpg"></a></div>
    <div class="swiper-slide"><a href="<?php echo home_url(); ?>/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide2_pc.jpg"></a></div>
    <div class="swiper-slide"><a href="<?php echo home_url(); ?>/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide3_pc.jpg"></a></div>
</div-->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
</div>

<div class="swiper-container sp wrapMV toppage">
    <figure class="mbArrow"><a href="#wrapCL2"><img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow.svg"></a></figure>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                    <!-- Slides -->
                <div class="swiper-slide"><a href="<?php echo home_url(); ?>/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide1_sp.jpg"></a></div>
                        <div class="swiper-slide"><a href="<?php echo home_url(); ?>/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide2_sp.jpg"></a></div>
                        <div class="swiper-slide"><a href="<?php echo home_url(); ?>/counseling"><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide3_sp.jpg"></a></div>
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
</div>

<section id="wrapCL2" class="wraplineBG toppage">
        <h2><div class="wrap1250"><span class="orange">6</span> ヶ月で自立した<br class="sp"><mark class="mark_orange">動画のプロ</mark>になろう！</div></h2>
        <p class="wrap1250 text-c">今も現役で活躍中の『動画のプロ』集団が未経験からでも<br class="pc">しっかりと収入を得ることにコミットしたサポートをいたします！</p>
        <ul class="wrap1250 flex flex-bw">
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/pointImg1.png" alt="未経験だけど動画編集について学んでみたい！">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/pointImg2.png" alt="動画編集をやってるけど全く収入に繋がらない…">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/pointImg3.png" alt="これから伸びる動画業界に転職したい！">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/pointImg4.png" alt="在宅・フリーランスで自由な働き方がしたい！">
            </li>
        </ul>
</section>


<section id="wrapAbout" class="wrapDairisekii">
    <div class="wrap1250">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/images/top/logoTxt.svg" alt="ドガポンマーケティング大学校とは"></h2>
        <iframe src="https://player.vimeo.com/video/498893414" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>

        <div class="flex flex-bw">
            <div id="about_1">
                <div class="aboutBox">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/aboutImg1.jpg"></figure>
                    <p>現役の動画のプロの<br>ノウハウを全て提供</p>
                </div>
                <p>ドガポンマーケティング大学校を運営している<strong class="orange">ライアートプロモーション</strong>は多くの企業からYouTube チャンネル運営や動画制作を依頼されている現役の<strong class="orange">動画のプロ</strong>集団です。</p>
            </div>

            <div id="about_2">
                <div class="aboutBox">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/aboutImg2.jpg"></figure>
                    <p>スキルの習得だけでなく<br>結果の獲得に<br class="sp">コミットした<br>サポート体制</p>
                </div>
                <p>結果とは、<strong class="orange">収入・実績・生活</strong>など個々人にとって様々ですが、それらを手に入れるためには<strong class="orange">実践・継続</strong>ということが必要不可欠です。そのためにドガポンでは、<strong class="orange">サポーター</strong>と<strong class="orange">チューター</strong>のダブルサポート体制で徹底的に結果にコミットしたサポートを実施しております。</p>
            </div>

            <div id="about_3">
                <div class="aboutBox">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/aboutImg3.jpg"></figure>
                    <p>しっかり収入を<br class="sp">得て自立した<br>動画のプロになることに<br>特化したカリキュラム</p>
                </div>
                <p><strong class="orange">クライアントの利益</strong>を考えた動画制作を行える人は希少価値が高いので高単価が支払われ、継続的に依頼が舞い込みます。ドガポンのカリキュラムは下請け単純労働の動画制作者ではなく、希少な<strong class="orange">動画のプロ</strong>になることに特化したカリキュラムです。</p>
            </div>
        </div>
        <ul class="flex">
            <li id="btnReason" class="btnOrange"><a href="<?php echo home_url(); ?>/reason">選ばれる理由を見る</a></li>
            <li id="btnCurriculum" class="btnOrange"><a href="<?php echo home_url(); ?>/curriculum">カリキュラムを見る</a></li>
        </ul>
    </div>
</section>

<section id="wrapPR2">
        <div id="contPR2" class="wrap1250">
            <div id="contPR2_r">
                <p class="sp"><img src="<?php echo get_template_directory_uri(); ?>/images/price/txt3.svg" alt="受講のお申し込みやお支払いの相談などは、無料カウンセリングで承っておりますのでお気軽にお申し込みください。"></p>
                <p class="tab-pc">受講のお申し込みやお支払いの相談などは、<br>無料カウンセリングで承っておりますので<br>お気軽にお申し込みください。</p>
                <div class="btnCS2"><a href="<?php echo home_url(); ?>/counseling">無料カウンセリングは<br class="sp">こちら</a></div>
            </div>
        </div>
</section>
        
<section id="wrapPR4" class="toppage">
        <h3><div class="wrap1250">受講生の声</div></h3>
        <div id="wrapPR4_1" class="wraplineBG">
            <h4 class="titlePR4 wrap1250">ドガポンマーケティング大学校は、未経験から<mark class="mark_orange">動画のプロ</mark>を目指す多くの方にご受講いただいております。多くの方が卒業後も実績を伸ばし、<mark class="mark_orange">動画のプロ</mark>として収入を得ながら活動されており、卒業生からはたくさんの満足の声をいただいております。</h4>

            <div class="wrap1250">
                <div class="slideTwitter">
                    <div class="slide">
                        <blockquote class="twitter-tweet" data-conversation="none">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/tweet1.jpg"></figure>
                            <p lang="ja" dir="ltr">【スクールに入って良かったこと】<br><br>映像スクールに入る前は、右も左も分からず、どんなソフトで編集をすれば良いかすら分からなかった。<br><br>しかし、今こうして編集ディレクターとして活動できるのは、その第一歩のおかげなんだと確信できる。<br><br>本当に良かった😄<br><a href="https://twitter.com/hashtag/%E5%8B%95%E7%94%BB%E7%B7%A8%E9%9B%86?src=hash&amp;ref_src=twsrc%5Etfw">#動画編集</a> <a href="https://twitter.com/hashtag/%E3%83%89%E3%82%AC%E3%83%9D%E3%83%B3?src=hash&amp;ref_src=twsrc%5Etfw">#ドガポン</a></p>
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/tweet1_foot.jpg"></figure>
                        </blockquote>
                    </div>

                    <div class="slide">
                        <blockquote class="twitter-tweet" data-conversation="none">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/tweet2.jpg"></figure>
                            <p lang="ja" dir="ltr">今日で　<a href="https://twitter.com/hashtag/%E3%83%89%E3%82%AC%E3%83%9D%E3%83%B3?src=hash&amp;ref_src=twsrc%5Etfw">#ドガポン</a> 卒業<br><br>途中だらける事もあったけど、続けられたのは講師陣のおかげ<br><br>環境に助けられた<br><br>特に上米良さんにはちょこちょこ声をかけていただいて、うまくアクセルとブレーキを踏むことができた<br><br>感謝しかない<br><br>今日が節目なだけで何かが変わるわけではないので、引き続き積み木してく😌</p>
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/tweet2_foot.jpg"></figure>
                        </blockquote>
                    </div>
                    
                    <div class="slide">
                        <blockquote class="twitter-tweet" data-conversation="none">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/tweet3.jpg"></figure>
                            <p lang="ja" dir="ltr">今日でドガポン卒業です😭<br><br>半年早っ！<br>ドガポン受講と同時に就職して両立できるか不安だった私が、<br><br>仕事しつつ、夜は沢山ドガポン案件をやっている…<br><br>えらい進歩やで😇<br>ほんとドガポンで良かった！✨<br><br>ここで一旦一区切りだけど、<br>まだまだこれから！<br>でもひとまずお疲れ様でしたー🙌<a href="https://twitter.com/hashtag/%E3%83%89%E3%82%AC%E3%83%9D%E3%83%B3?src=hash&amp;ref_src=twsrc%5Etfw">#ドガポン</a></p>
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/tweet3_foot.jpg"></figure>
                        </blockquote>
                    </div>
                    
                    <div class="slide">
                        <blockquote class="twitter-tweet" data-conversation="none">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/tweet4.jpg"></figure>
                            <p lang="ja" dir="ltr">ドガポンでたった半年でメンタルがこんなに変われたのは完璧な講師陣と完璧なチューターさんのおかげだなぁ…。<br>こんな所ないよ？私も予想外だったもん。講師陣のおかげで技術も勿論凄く磨けるしチューターさんは寄り添ってくれる感じ。<br><br>だから頑張れる。素敵だ✨<a href="https://twitter.com/hashtag/%E3%83%89%E3%82%AC%E3%83%9D%E3%83%B3?src=hash&amp;ref_src=twsrc%5Etfw">#ドガポン</a></p>
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/tweet4_foot.jpg"></figure>
                        </blockquote>
                    </div>
                    
                    <div class="slide">
                        <blockquote class="twitter-tweet" data-conversation="none">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/tweet5.jpg"></figure>
                            <p lang="ja" dir="ltr">おはようございます！<a href="https://twitter.com/hashtag/%E4%BB%8A%E6%97%A5%E3%81%AE%E7%A9%8D%E3%81%BF%E4%B8%8A%E3%81%92?src=hash&amp;ref_src=twsrc%5Etfw">#今日の積み上げ</a> はサムネ・動画編集の課題課題課題です<br>(ここ最近毎回なので重ねてみました)<br><a href="https://twitter.com/hashtag/%E3%83%89%E3%82%AC%E3%83%9D%E3%83%B3?src=hash&amp;ref_src=twsrc%5Etfw">#ドガポン</a> にはセミナー動画を受講生なら誰でも見られるのですが、これが役にしか立たない！<br><br>教わったのは【サムネはモデリング命】という名言。<br><br>あと【サムネなめたらあかん！】です😆</p>
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/tweet5_foot.jpg"></figure>
                        </blockquote>
                    </div>
                    
                    <div class="slide">
                        <blockquote class="twitter-tweet" data-conversation="none">
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/tweet6.jpg"></figure>
                            <p lang="ja" dir="ltr">13時間で60万回再生…<br>僕自身、いままでの人生でそれだけの人に会ったことがあるのかな？<br>たぶんかすりもしないな🙄笑<br><br>それだけの人に影響を与えることができる。驚異的な威力だ！<br><br>もっともっと多くの人に見てもらえるものを生み出していきたいです✨<br><a href="https://twitter.com/hashtag/%E3%83%89%E3%82%AC%E3%83%9D%E3%83%B3?src=hash&amp;ref_src=twsrc%5Etfw">#ドガポン</a> <a href="https://twitter.com/hashtag/%E5%8B%95%E7%94%BB%E7%B7%A8%E9%9B%86?src=hash&amp;ref_src=twsrc%5Etfw">#動画編集</a></p>
                            <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/tweet6_foot.jpg"></figure>
                        </blockquote>
                    </div>
                </div>
                <p>※掲載している内容はあくまでも個人の感想であり、効果を保証するものではありません</p>
            </div>
        </div>
</section>

<div id="contBlog_bottom" class="toppage">    
<section id="wrapComent">
    <h3>受講生インタビュー</h3>
    <section class="contBlog_temp wraplineBG">
        <h4 class="titlePR4 wrap1250">ドガポンを受講して転職された方や収入アップに成功された方などキャリアアップを果たし、今も業界で活躍されているドガポン卒業生のインタビューをご紹介！</h4>
        <div id="wrapArticleBG">
        <div class="flex wrapArticle wrap1250">
            <?php query_posts( array(
                    'post_type' => 'post',
                     'tag' => 'voice',
                     'posts_per_page' => 6,
                     'no_found_rows' => true,
            )); ?>
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>

		<article>
                <a href="<?php the_permalink();?>"><div>
                   <figure>
                       <?php the_post_thumbnail( 'medium', array('class' => 'skip-lazy') ); ?>
                    </figure>
                  <p class="date"><?php the_time('Y.m.d'); ?></p>
                  <h4>
                      
                          <?php
                          if(mb_strlen($post->post_title, 'UTF-8')>27){
                              $title= mb_substr($post->post_title, 0, 27, 'UTF-8');
                              echo $title.'...';
                          }else{
                              echo $post->post_title;
                          }
                          ?>
                       </h4>
                  </div></a>
            </article>

		<?php
		endwhile;
		endif;
        wp_reset_query()
		?>
            
        </div>
            <p id="btnMore"><a href="<?php echo home_url(); ?>/tag/voice"><img src="<?php echo get_template_directory_uri(); ?>/images/top/btnMore.svg"></a></p>
        </div>
    </section>
</section>
</div>

<section id="wrapTP" class="toppage">
        <h3><div class="wrap1250">限定コンテンツを一部無料で公開</div></h3>
        <div id="wrapTP_1">
            <div class="wrap1250">
                <p>ドガポンマーケティング大学校は、動画業界で活動している方や、これから活動したいと思っている方を応援しています。その気持ちから、<span class="colorYL">独自に制作している限定コンテンツを一部無料でプレゼント</span>しております。</p>
                <div class="flex">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/book.png"></figure>
                    <p>動画業界で<span class="colorYL">収入を得て自立していくため</span>の限定コンテンツを無料でダウンロードいただけます。「動画制作に興味がある」「どんなものか見てみたい」といった方は下記ページからお気軽にお受け取りください。</p>
                </div>
                <div class="btnOrange"><a href="<?php echo home_url(); ?>/limitedcontents">限定コンテンツを受け取る</a></div>
            </div>
        </div>
</section>

<?php get_footer(); ?>

<script>
/* メインスライダー
/*----------------------------------------------------------*/
let mySwiper = new Swiper ('.swiper-container', {
  // 以下にオプションを設定
    loop: true,
    autoplay: {
        delay: 4000,
    },
    freeMode: false,
    draggable: true,
  //ページネーション表示の設定
  pagination: { 
    el: '.swiper-pagination', //ページネーションの要素
    type: 'bullets', //ページネーションの種類
    clickable: true, //クリックに反応させる
  },
 
  //ナビゲーションボタン（矢印）表示の設定
  navigation: { 
    nextEl: '.swiper-button-next', //「次へボタン」要素の指定
    prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
  },
 
  //スクロールバー表示の設定
  scrollbar: { 
    el: '.swiper-scrollbar', //要素の指定
  },
})
</script>


<script type="text/javascript">
 $('.slideTwitter').slick({
  slidesToShow: 4,
  slidesToScroll:1,
  autoplay: true,
  autoplaySpeed: 6000,
  prevArrow: '<div class="slick-button-prev"></div>',
    nextArrow: '<div class="slick-button-next"></div>',
  dots:true,
     //レスポンシブでの動作を指定
    responsive: [{

      breakpoint: 1024,
      settings: {
        slidesToShow: 3
      }

    }, {

      breakpoint: 640,
      settings: {
        slidesToShow: 1
      }

    }]
});
  </script>

</body>  
</html>