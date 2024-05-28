<?php
/*
Template Name: 料金ページ
*/
?>

<?php get_header(); ?>

<h2 class="title">料金</h2>

<section id="wrapPR0" class="wrapDairisekii">
    <div  class="wrap1250">
        <div class="flex">
            <img src="<?php echo get_template_directory_uri(); ?>/images/price/counseling.png" alt="ドガポンマーケティング大学院カウンセリングの画像">
            <p>「ドガポンマーケティング大学校の受講料は<br>
                　少し高いな…」と感じるかもしれません。<br>
                ですが、その分<span class="orange">ずっと役に立つスキル</span>を<br>
                身につけることができます。
                <span class="up">
                「どうしてもお金が、、」という方に対しては<br>
                分割などの要望も承っておりますので<br>
                <span class="orange">カウンセリング</span>にて担当よりお話いたします。
                </span>
            </p>
        </div>
    </div>
</section>

<section id="wrapPR1" class="wrapDairisekii">
	<div id="contPR1" class="wrap1250 contPR1-1">
            <h2>動画制作ディレクターコース<span><span class="nb">6</span>ヶ月</span></h2>
            <p>一括料金<span>550,000</span><span class="yen">円</span><span class="tax">（税込）</span></p>
            <p class="as">※サービス提供開始は決済完了後の<br class="sp">翌月以降1日からとなります</p>
    </div>
	<div id="contPR1" class="wrap1250 contPR1-2">
            <h2>動画制作ディレクターコース<span><span class="nb">3</span>ヶ月</span></h2>
            <p>一括料金<span>330,000</span><span class="yen">円</span><span class="tax">（税込）</span></p>
            <p class="as">※サービス提供開始は決済完了後の<br class="sp">翌月以降1日からとなります</p>
    </div>

	<div id="contPR1" class="wrap1250 contPR1-3">
            <h2>YouTube運用代行ビジネスコース<span><span class="nb">6</span>ヶ月</span></h2>
            <p>一括料金<span>550,000</span><span class="yen">円</span><span class="tax">（税込）</span></p>
            <p class="as">※サービス提供開始は決済完了後の<br class="sp">翌月以降1日からとなります</p>
    </div>
</section>


<?php get_footer(); ?>

<script>
    /* メインスライダー
/*----------------------------------------------------------*/
    let mySwiper = new Swiper('.swiper-container', {
        // 以下にオプションを設定
        loop: false,
        freeMode: true,
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

    /* モーダルスライダー
    /*----------------------------------------------------------*/
    let modalSwiper = new Swiper('.swiper-container-sub', {
        loop: false,
        freeMode: false,
        spaceBetween: 30,
        slidesPerView: 1,
        draggable: false,
        //ナビゲーションボタン（矢印）表示の設定
        navigation: {
            nextEl: '.swiper-button-next', //「次へボタン」要素の指定
            prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
        },
        breakpoints: {
            767: {
                slidesPerView: 1,
                spaceBetween: 0
            }
        }
    })


    /* アイテムをクリックしたらモーダル立ち上げ・モーダル閉じる
    /*----------------------------------------------------------*/
    $(document).on('click', '.swiper-container .swiper-slide', function() {
        $('body').addClass('is-modal');
        var num = $('.swiper-container .swiper-slide').index(this);
        modalSwiper.slideTo(num);
        $('.swiper-container-sub').addClass('is-visible');
    });

    $('.modal-close').on('click', function() {
        $('body').removeClass('is-modal');
        $('.swiper-container-sub').removeClass('is-visible');
    });
</script>

</body>

</html>