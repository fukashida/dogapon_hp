<?php get_header(); ?>

<div id="contSRC" class="wraplineBG blog">
    <style>
        .btnCS_hide{display: none;}
        .drawer-hamburger-icon, .drawer-hamburger-icon:before, .drawer-hamburger-icon:after{background-color: #4d4d4d;}
    </style>
    <div id="contBlog" class="flex flex-bw wrap1250">
    <main id="contBlog_l">
        <?php
    global $wp_query;
    $total_results = $wp_query->found_posts;
    $search_query = get_search_query();
    ?>
    <section class="contBlog_temp">
    <h2>検索結果：<?php echo $search_query; ?><span>（<?php echo $total_results; ?>件）</span></h2>
        <?php if(have_posts()): ?>
            <div class="flex flex-bw wrapArticle">
                <?php while(have_posts()):the_post(); ?>
                <article>
                    <a href="<?php the_permalink();?>">
                    <div>
                    <figure><?php the_post_thumbnail('medium'); ?></figure>
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
                <?php endwhile; ?>
                </div>
            <?php else: ?>
            <p class="txtNotmach" class="text-c">検索されたキーワードにマッチする記事はありませんでした</p>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        
        <p id="btnMore_SRC" class="text-c"><a href="<?php echo home_url(); ?>/blog">一覧に戻る</a></p>
        </section>
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

<?php get_footer(); ?>
</body>  
</html>