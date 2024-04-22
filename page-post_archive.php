<?php
/**
 * Template Name: 最新記事 */
?>

<?php get_header(); ?>

<style>
    .drawer-hamburger-icon, .drawer-hamburger-icon:before, .drawer-hamburger-icon:after{background-color: #4d4d4d;}
</style>

<div id="wrapBlog" class="wraplineBG">

    <div id="contBlog" class="archive flex flex-bw wrap1250">
        <main id="contBlog_l">
            <section class="contBlog_temp">
                <div class="flex flex-bw">
                    <h2>最新記事</h2>
                    <p class="btnMore"><a href="<?php echo home_url(); ?>/blog"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/btnBack.svg" alt="トップに戻る"></a></p>
                </div>
                <div class="flex flex-bw wrapArticle">

                <?php
                    $paged = (int) get_query_var('paged');
                    $args = array(
                        'paged' => $paged,
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'post_status' => 'publish'
                    );
                    $the_query = new WP_Query($args);
                    if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
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
                </div>
            </section>
            
            <div class="wrapPager flex">
                <?php
                if ($the_query->max_num_pages > 1) {
                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => 'page/%#%/',
                        'current' => max(1, $paged),
                        'prev_text' => '<',
                        'next_text' => '>',
                        'total' => $the_query->max_num_pages
                    ));
                }
                ?>
            </div>
            <?php wp_reset_query(); ?>
        </main>
        
        <div id="contBlog_r">
            <div class="posSy">
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
</div>
<?php get_footer(); ?>

</body>  
</html>