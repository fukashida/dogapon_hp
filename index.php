<?php get_header(); ?>

<div id="wrapBlog" class="wraplineBG">
    <div class="swiper-container pc wrapMV">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide1_pc.png"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide2_pc.jpg"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide3_pc.jpg"></div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
    </div>

    <div class="swiper-container tab-sp wrapMV">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide1_sp.png"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide2_sp.jpg"></div>
                    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/top/slide3_sp.jpg"></div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
    </div>

    <div id="contBlog" class="flex flex-bw wrap1250">
        <main id="contBlog_l">
            <section id="wrapPoplar" class="contBlog_temp">
                <div class="flex flex-bw">
                    <h2>人気記事</h2>
                    <p class="btnMore"><a href="<?php echo home_url(); ?>/tag/popular"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/btnMore.svg" alt="もっとみる"></a></p>
                </div>
                <div class="flex flex-bw wrapArticle">
            <?php query_posts( array(
                    'post_type' => 'post',
                     'tag' => 'popular',
                     'posts_per_page' => 4,
                     'no_found_rows' => true,
            )); ?>
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                <article>
                    <div>
                    <figure><a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium'); ?></a></figure>
                    <p class="date"><?php the_time('Y.m.d'); ?></p>
                    <h3>
                      <a href="<?php the_permalink();?>">
                          <?php
                          if(mb_strlen($post->post_title, 'UTF-8')>27){
                              $title= mb_substr($post->post_title, 0, 27, 'UTF-8');
                              echo $title.'...';
                          }else{
                              echo $post->post_title;
                          }
                          ?>
                      </a>
                       </h3>
                    </div>
                    <?php
                $posttags = get_the_tags();
                if ( $posttags ) {
                    echo '<ul class="wrapTag flex">';
                    foreach ( $posttags as $tag ) {
                        echo '<li class="'.$tag->slug.'"><a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a></li>';
                    }
                    echo '</ul>';
                }
                ?>
                </article>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                </div>
            </section>
            
            <section id="wrapVoice" class="contBlog_temp">
                <div id="voice"></div>
                <div class="flex flex-bw">
                    <h2>受講生インタビュー</h2>
                    <p class="btnMore"><a href="<?php echo home_url(); ?>/tag/voice"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/btnMore.svg" alt="もっとみる"></a></p>
                </div>
                <div class="flex flex-bw wrapArticle">
            <?php query_posts( array(
                    'post_type' => 'post',
                     'tag' => 'voice',
                     'posts_per_page' => 4,
                     'no_found_rows' => true,
            )); ?>
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                <article>
                    <div>
                    <figure><a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium'); ?></a></figure>
                    <p class="date"><?php the_time('Y.m.d'); ?></p>
                    <h3>
                      <a href="<?php the_permalink();?>">
                          <?php
                          if(mb_strlen($post->post_title, 'UTF-8')>27){
                              $title= mb_substr($post->post_title, 0, 27, 'UTF-8');
                              echo $title.'...';
                          }else{
                              echo $post->post_title;
                          }
                          ?>
                      </a>
                       </h3>
                    </div>
                    <?php
                $posttags = get_the_tags();
                if ( $posttags ) {
                    echo '<ul class="wrapTag flex">';
                    foreach ( $posttags as $tag ) {
                        echo '<li class="'.$tag->slug.'"><a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a></li>';
                    }
                    echo '</ul>';
                }
                ?>
                </article>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                </div>
            </section>
            
            <section id="wrapPost" class="contBlog_temp">
                <div class="flex flex-bw">
                    <h2>最新記事</h2>
                    <p class="btnMore"><a href="<?php echo home_url(); ?>/bloglatest"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/btnMore.svg" alt="もっとみる"></a></p>
                </div>
                <div class="flex flex-bw wrapArticle">
            <?php query_posts( array(
                    'post_type' => 'post',
                     'posts_per_page' => 4,
                     'no_found_rows' => true,
            )); ?>
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                <article>
                   <div>
                   <figure><a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium'); ?></a></figure>
                  <p class="date"><?php the_time('Y.m.d'); ?></p>
                  <h3>
                      <a href="<?php the_permalink();?>">
                          <?php
                          if(mb_strlen($post->post_title, 'UTF-8')>27){
                              $title= mb_substr($post->post_title, 0, 27, 'UTF-8');
                              echo $title.'...';
                          }else{
                              echo $post->post_title;
                          }
                          ?>
                      </a>
                       </h3>
                  </div>
                  <?php
                $posttags = get_the_tags();
                if ( $posttags ) {
                    echo '<ul class="wrapTag flex">';
                    foreach ( $posttags as $tag ) {
                        echo '<li class="'.$tag->slug.'"><a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a></li>';
                    }
                    echo '</ul>';
                }
                ?>
                </article>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                </div>
            </section>
        </main>
        
        <div id="contBlog_r">
            <div class="search_form">
                <form id="form" method="get" action="<?php echo home_url('/'); ?>" >
                    <input id="sbox" name="s" type="text" placeholder="検索キーワードをご入力ください">
                    <input type="hidden" name="post_type" value="post">
                    <input id="sbtn" type="image" src="<?php bloginfo('template_url'); ?>/images/common/search.svg">
                </form>
            </div>
            
            <div id="wrapBlog_tag">
                <p>タグ検索</p>
                <?php
                $posttags = get_tags();
                if ( $posttags ) {
                    echo '<ul class="wrapTag">';
                    foreach ( $posttags as $tag ) {
                        echo '<li class="'.$tag->slug.'"><a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a></li>';
                    }
                    echo '</ul>';
                }
                ?>
            </div>
        </div>
        
    </div>
</div>
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
</script>
</body>  
</html>