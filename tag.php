<?php get_header(); ?>

<style>
    .btnCS_hide{display: none;}
    .drawer-hamburger-icon, .drawer-hamburger-icon:before, .drawer-hamburger-icon:after{background-color: #4d4d4d;}
</style>

<section>
<div id="wrapBlog" class="wraplineBG tag">

    <div id="contBlog" class="archive flex flex-bw wrap1250">
        <main id="contBlog_l"
              class="<?php $tag = get_queried_object(); echo $tag->slug ?>"
              >
            <section class="contBlog_temp">
                <div class="flex flex-bw wrapArticle">

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
                </div>
            </section>
            
            <div class="wrapPager flex">
                <!-- <?php
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
                ?> -->
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
</section>
<?php get_footer(); ?>
</body>  
</html>