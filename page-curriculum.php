<?php
/*
Template Name: カリキュラムページ
*/
?>

<?php get_header(); ?>

<h2 class="title">カリキュラム</h2>

<section id="wrapCL" >
    <p><span>ドガポンマーケティング大学校</span>は<br>
    動画制作・マーケティング・案件獲得まで一気通貫で学び<br>
    自立したフリーランスとして活躍できる<br class="tb-sp">スキルを習得する動画ビジネススクール。</p>
    <p class="up"><span class="director">動画制作ディレクター</span><span class="business">YouTube運用代行ビジネス</span><br class="tb-sp">の2つのコースがあり<br>
    現役プロからの直接指導で自立した<br class="tb-sp">フリーランスを目指します。</p>
</section>

<section id="wrapCL1" class="wrapDairisekii">
    <div class="wrap1250">
        <div class="flex director">
            <div class="item">
                <p class="nb">コース<span>1</span></p>
                <h2>動画制作<br>
                    ディレクターコース</h2>
                    <img class="tb-sp" src="<?php echo get_template_directory_uri(); ?>/images/curriculum/director.png" akt="動画制作ディレクターコースの画像">
                <p>高単価案件を獲得できる動画制作者や、<br>
                編集ディレクターを目指すコース。<br>
                動画編集やサムネイル等の制作スキルや、<br>
                数字を伸ばすマーケティングも学べます。</p>
                <a href="<?php echo home_url(); ?>/course_director">コース詳細を見る</a>
            </div>
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/curriculum/director.png" akt="動画制作ディレクターコースの画像">
        </div>
        <div class="flex business">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/curriculum/business.png" akt="YouTube運用代行ビジネスコースの画像">
            <div class="item">
                <p class="nb">コース<span>1</span></p>
                <h2>YouTube運用代行<br>
                ビジネスコース</h2>
                <img class="tb-sp" src="<?php echo get_template_directory_uri(); ?>/images/curriculum/business.png" akt="YouTube運用代行ビジネスコースの画像">
                <p>継続的に売上を立てる業界注目の<br>
                YouTube運用代行ビジネスを学ぶコース。<br>
                制作・マーケ・ディレクション・<br>
                法人営業まで一気通貫で学べます。</p>
                <a href="<?php echo home_url(); ?>/course_business">コース詳細を見る</a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>


</body>
</html>