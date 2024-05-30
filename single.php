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
                
 
                
            </div>
    <?php
    endwhile;
    endif;
    ?>
</main>
    
    
<div id="contBlog_bottom" class="wrap1250">    
<?php if(has_tag()==true) : ?>        
     <section class="contBlog_temp tag">
                <div class="flex flex-bw">
                    <h2>関連記事</h2>
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