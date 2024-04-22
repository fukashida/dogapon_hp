<?php get_header(); ?>

<style>
    .drawer-hamburger-icon, .drawer-hamburger-icon:before, .drawer-hamburger-icon:after{background-color: #4d4d4d;}
    @media screen and (max-width: 599px) {
    .wraplineBG {background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/SP_lineBG.svg); background-size: contain;}
    }
</style>

<div id="contBlogSingle" class="wraplineBG blog">
<main class="wrap1250">
   <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    
            <div id="wrapTitle" class="flex flex-bw">
                    <h2 id="contTitle"><?php the_title(); ?></h2>
                    <p class="btnMore"><a href="<?php echo home_url(); ?>/blog"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/btnBacklatest.svg" alt="一覧に戻る"></a></p>
            </div>
            
            <div id="wrapDateTag" class="flex flex-bw">
                <p class="date"><?php the_time('Y.m.d'); ?></p>
                <?php
                $posttags = get_the_tags();
                if ( $posttags ) {
                    echo '<ul class="wrapTag">';
                    foreach ( $posttags as $tag ) {
                        echo '<li class="'.$tag->slug.'"><a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a></li>';
                    }
                    echo '</ul>';
                }
                ?>
            </div>
            <div class="wrapBlogContent">
            <?php the_content(); ?>
                
            <div id="wrapSNS" class="flex">
                <?php echo do_shortcode("[wp_ulike]"); ?>
                <figure class="btnTw">
                    <a href="https://twitter.com/share?url=<?php the_permalink();?>&text=<?php the_title(); ?>" rel="nofollow" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/btnTw.svg"></a></figure>
                <figure class="btnFb">
                    <a href="http://www.facebook.com/share.php?u=<?php the_permalink();?>" rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/btnFb.svg"></a>
                </figure>
            </div>
                
            </div>
    <?php
    endwhile;
    endif;
    ?>
</main>
    
<section id="wrapPR2">
        <div id="contPR2" class="wrap1250">
            <div id="contPR2_r">
                <p class="sp"><img src="<?php echo get_template_directory_uri(); ?>/images/price/txt3.svg" alt="受講のお申し込みやお支払いの相談などは、無料カウンセリングで承っておりますのでお気軽にお申し込みください。"></p>
                <p class="tab-pc">受講のお申し込みやお支払いの相談などは、<br>無料カウンセリングで承っておりますので<br>お気軽にお申し込みください。</p>
                <div class="btnCS2"><a href="<?php echo home_url(); ?>/counseling">無料カウンセリングは<br class="sp">こちら</a></div>
            </div>
        </div>
    </section>
    
<div id="contBlog_bottom" class="wrap1250">    
<?php if(has_tag()==true) : ?>        
     <section class="contBlog_temp tag">
                <div class="flex flex-bw">
                    <h2>関連記事</h2>
                    <p class="btnMore"><a href="<?php echo home_url(); ?>/blog/latest"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/btnMore.svg" alt="もっとみる"></a></p>
                </div>
                <div class="flex wrapArticle">
                    <?php 
                    //タグ情報から関連記事をランダムに呼び出す
                    $tags = wp_get_post_tags($post->ID);
                    $tag_ids = array();
                    foreach($tags as $tag):
                    array_push( $tag_ids, $tag -> term_id);
                    endforeach ;
                    $args = array(
                        'post__not_in' => array($post -> ID),
                        'posts_per_page'=> 4,
                        'tag__in' => $tag_ids,
                        'orderby' => 'rand',
                    );
                    $query = new WP_Query($args); ?>
                    <?php if( $query -> have_posts() && !empty($tag_ids) ): ?>
                    <?php while ($query -> have_posts()) : $query -> the_post(); ?>
                    <article>
                      <a href="<?php the_permalink();?>">
                      <div>
                      <figure><?php the_post_thumbnail( 'medium', array('class' => 'skip-lazy') ); ?></figure>
                      <p class="date"><?php the_time('Y.m.d'); ?></p>
                      <h3>
                              <?php
                              if(mb_strlen($post->post_title, 'UTF-8')>27){
                                  $title= mb_substr($post->post_title, 0, 27, 'UTF-8');
                                  echo $title.'...';
                              }else{
                                  echo $post->post_title;
                              }
                              ?>

                           </h3>
                      </div>
                    </a>
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
                    <?php endwhile;?>
                    <?php else:?>
                    <p>関連記事はありませんでした</p>
                    <?php
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </section>
        <?php else : ?>
 <?php endif ; ?>
        
    <section class="contBlog_temp latest">
                <div class="flex flex-bw">
                    <h2>最新記事</h2>
                    <p class="btnMore"><a href="<?php echo home_url(); ?>/blog/latest"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/btnMore.svg" alt="もっとみる"></a></p>
                </div>
                <div class="flex wrapArticle">
            <?php query_posts( array(
                    'post_type' => 'post',
                     'posts_per_page' => 4,
                     'no_found_rows' => true,
            )); ?>
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                <article>
                    <a href="<?php the_permalink();?>">
                   <div>
                   <figure><?php the_post_thumbnail( 'medium', array('class' => 'skip-lazy') ); ?></figure>
                  <p class="date"><?php the_time('Y.m.d'); ?></p>
                  <h3>
                          <?php
                          if(mb_strlen($post->post_title, 'UTF-8')>27){
                              $title= mb_substr($post->post_title, 0, 27, 'UTF-8');
                              echo $title.'...';
                          }else{
                              echo $post->post_title;
                          }
                          ?>
                       </h3>
                  </div>
                </a>
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
        </div>
</div>

<?php get_footer(); ?>
</body>  
</html>