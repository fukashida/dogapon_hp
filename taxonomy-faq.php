<?php get_header(); ?>

<div id="wrapFAQ" class="wrapMV">
    <h2><img src="<?php echo get_template_directory_uri(); ?>/images/faq/txtMV.svg" alt="よくある質問"></h2>
    <div class="wrap1250 text-c">
        <form method="get" action="http://www.google.co.jp/search" target="_blank">
            <input type="text" name="q" size="31" maxlength="255" value="">
            <input type="submit" name="btng" value="検索">
            <input type="hidden" name="hl" value="ja">
            <input type="hidden" name="sitesearch" value="https://dogapon.com/faq/">
        </form>
    </div>
</div>
    
    <div id="wrapFAQ_tab">
        <div class="area wrap1250">
            <input type="radio" name="tab_name" id="tab1" checked>
            <label class="tab_class" for="tab1" id="tab1_title">学校・受講<br class="sp">条件について</label>
            <div id="tab1" class="content_class">
                
                <?php
                // まずはカテゴリーを取得（カスタムタクソノミーでもOK）
                $catargs = array(
                    'taxonomy' => '学校・受講条件について'
                );
                $catlists = get_categories( $catargs );
                foreach($catlists as $cat) : // 取得したカテゴリの配列でループを回す
                $args = array(
                    '学校・受講条件について' => $cat->slug
                );
                $my_posts = get_posts( $args );
                global $post; // テンプレートファイル内なら書かなくても良い
                if ( $my_posts ) { // 該当する投稿があったら
                    foreach ( $my_posts as $post ) :
                    setup_postdata( $post );
                    
                    echo '<details><summary>' . the_title() . '</summary>' . '<p>'  . the_content() .
                        
                    endforeach; // 投稿のループ終わり
                } else {
                    // 投稿がなかった場合
                }
                wp_reset_postdata();
                endforeach; // カテゴリのループ終わり
                ?>
            </div>
            <input type="radio" name="tab_name" id="tab2" >
            <label class="tab_class" for="tab2" id="tab2_title">受講方法に<br class="sp">ついて</label>
            <div id="tab2" class="content_class">
              <details>
                  <summary>他のスクールとの違いは何ですか？</summary>
                  <p>ドガポンマーケティング大学校は動画制作・マーケティング企業である株式会社ライアートプロモーション全面バックアップの元、企画 / 撮影 / 編集を網羅した動画制作・グラフィックデザイン・動画広告 /Youtube チャンネル運用をはじめとした動画マーケティングなどの分野において、超実践型指導でプロフェッショナルを育成する動画のスクールです。スキルの習得はもちろんのこと、卒業後に活躍することに重点をおいた超実践型指導を提供します。</p>
                </details>
                
                <details>
                  <summary>他のスクールとの違いは何ですか？</summary>
                  <p>ドガポンマーケティング大学校は動画制作・マーケティング企業である株式会社ライアートプロモーション全面バックアップの元、企画 / 撮影 / 編集を網羅した動画制作・グラフィックデザイン・動画広告 /Youtube チャンネル運用をはじめとした動画マーケティングなどの分野において、超実践型指導でプロフェッショナルを育成する動画のスクールです。スキルの習得はもちろんのこと、卒業後に活躍することに重点をおいた超実践型指導を提供します。</p>
                </details>
                
                <details>
                  <summary>他のスクールとの違いは何ですか？</summary>
                  <p>ドガポンマーケティング大学校は動画制作・マーケティング企業である株式会社ライアートプロモーション全面バックアップの元、企画 / 撮影 / 編集を網羅した動画制作・グラフィックデザイン・動画広告 /Youtube チャンネル運用をはじめとした動画マーケティングなどの分野において、超実践型指導でプロフェッショナルを育成する動画のスクールです。スキルの習得はもちろんのこと、卒業後に活躍することに重点をおいた超実践型指導を提供します。</p>
                </details>
                <details>
                  <summary>他のスクールとの違いは何ですか？</summary>
                  <p>ドガポンマーケティング大学校は動画制作・マーケティング企業である株式会社ライアートプロモーション全面バックアップの元、企画 / 撮影 / 編集を網羅した動画制作・グラフィックデザイン・動画広告 /Youtube チャンネル運用をはじめとした動画マーケティングなどの分野において、超実践型指導でプロフェッショナルを育成する動画のスクールです。スキルの習得はもちろんのこと、卒業後に活躍することに重点をおいた超実践型指導を提供します。</p>
                </details>
                
                <details>
                  <summary>他のスクールとの違いは何ですか？</summary>
                  <p>ドガポンマーケティング大学校は動画制作・マーケティング企業である株式会社ライアートプロモーション全面バックアップの元、企画 / 撮影 / 編集を網羅した動画制作・グラフィックデザイン・動画広告 /Youtube チャンネル運用をはじめとした動画マーケティングなどの分野において、超実践型指導でプロフェッショナルを育成する動画のスクールです。スキルの習得はもちろんのこと、卒業後に活躍することに重点をおいた超実践型指導を提供します。</p>
                </details>
            </div>
            <input type="radio" name="tab_name" id="tab3" >
            <label class="tab_class" for="tab3" id="tab3_title">サポート<br class="sp">について</label>
            <div id="tab3" class="content_class">
              <details>
                  <summary>他のスクールとの違いは何ですか？</summary>
                  <p>ドガポンマーケティング大学校は動画制作・マーケティング企業である株式会社ライアートプロモーション全面バックアップの元、企画 / 撮影 / 編集を網羅した動画制作・グラフィックデザイン・動画広告 /Youtube チャンネル運用をはじめとした動画マーケティングなどの分野において、超実践型指導でプロフェッショナルを育成する動画のスクールです。スキルの習得はもちろんのこと、卒業後に活躍することに重点をおいた超実践型指導を提供します。</p>
                </details>
                <details>
                  <summary>他のスクールとの違いは何ですか？</summary>
                  <p>ドガポンマーケティング大学校は動画制作・マーケティング企業である株式会社ライアートプロモーション全面バックアップの元、企画 / 撮影 / 編集を網羅した動画制作・グラフィックデザイン・動画広告 /Youtube チャンネル運用をはじめとした動画マーケティングなどの分野において、超実践型指導でプロフェッショナルを育成する動画のスクールです。スキルの習得はもちろんのこと、卒業後に活躍することに重点をおいた超実践型指導を提供します。</p>
                </details>
                
                <details>
                  <summary>他のスクールとの違いは何ですか？</summary>
                  <p>ドガポンマーケティング大学校は動画制作・マーケティング企業である株式会社ライアートプロモーション全面バックアップの元、企画 / 撮影 / 編集を網羅した動画制作・グラフィックデザイン・動画広告 /Youtube チャンネル運用をはじめとした動画マーケティングなどの分野において、超実践型指導でプロフェッショナルを育成する動画のスクールです。スキルの習得はもちろんのこと、卒業後に活躍することに重点をおいた超実践型指導を提供します。</p>
                </details>
            </div>
            <input type="radio" name="tab_name" id="tab4" >
            <label class="tab_class" for="tab4" id="tab4_title">お支払い<br class="sp">について</label>
            <div id="tab4" class="content_class">
              <details>
                  <summary>他のスクールとの違いは何ですか？</summary>
                  <p>ドガポンマーケティング大学校は動画制作・マーケティング企業である株式会社ライアートプロモーション全面バックアップの元、企画 / 撮影 / 編集を網羅した動画制作・グラフィックデザイン・動画広告 /Youtube チャンネル運用をはじめとした動画マーケティングなどの分野において、超実践型指導でプロフェッショナルを育成する動画のスクールです。スキルの習得はもちろんのこと、卒業後に活躍することに重点をおいた超実践型指導を提供します。</p>
                </details>
            </div>
            <input type="radio" name="tab_name" id="tab5" >
            <label class="tab_class" for="tab5" id="tab5_title">卒業後<br class="sp">について</label>
            <div id="tab5" class="content_class">
              <details>
                  <summary>他のスクールとの違いは何ですか？</summary>
                  <p>ドガポンマーケティング大学校は動画制作・マーケティング企業である株式会社ライアートプロモーション全面バックアップの元、企画 / 撮影 / 編集を網羅した動画制作・グラフィックデザイン・動画広告 /Youtube チャンネル運用をはじめとした動画マーケティングなどの分野において、超実践型指導でプロフェッショナルを育成する動画のスクールです。スキルの習得はもちろんのこと、卒業後に活躍することに重点をおいた超実践型指導を提供します。</p>
                </details>
                <details>
                  <summary>他のスクールとの違いは何ですか？</summary>
                  <p>ドガポンマーケティング大学校は動画制作・マーケティング企業である株式会社ライアートプロモーション全面バックアップの元、企画 / 撮影 / 編集を網羅した動画制作・グラフィックデザイン・動画広告 /Youtube チャンネル運用をはじめとした動画マーケティングなどの分野において、超実践型指導でプロフェッショナルを育成する動画のスクールです。スキルの習得はもちろんのこと、卒業後に活躍することに重点をおいた超実践型指導を提供します。</p>
                </details>
                
                <details>
                  <summary>他のスクールとの違いは何ですか？</summary>
                  <p>ドガポンマーケティング大学校は動画制作・マーケティング企業である株式会社ライアートプロモーション全面バックアップの元、企画 / 撮影 / 編集を網羅した動画制作・グラフィックデザイン・動画広告 /Youtube チャンネル運用をはじめとした動画マーケティングなどの分野において、超実践型指導でプロフェッショナルを育成する動画のスクールです。スキルの習得はもちろんのこと、卒業後に活躍することに重点をおいた超実践型指導を提供します。</p>
                </details>
            </div>
      </div>
        
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>