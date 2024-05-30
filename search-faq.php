<?php get_header(); ?>

<h2 class="title">よくある質問</h2>


<section>
    
    <div id="wrapFAQ" class="wrapMV">
        <div class="wrap1250 text-c">
            <form id="form" method="get" action="<?php echo home_url('/'); ?>" >
                <input id="sbox" name="s" type="text" placeholder="検索キーワードをご入力ください">
                <input type="hidden" name="post_type" value="faq">
                <input id="sbtn" type="image" src="<?php bloginfo('template_url'); ?>/images/common/search.svg">
            </form>
        </div>
    </div>
    
<div id="contSRC">
    <style>
        .btnCS_hide{display: none;}
    </style>
    
    <div class="wrap1250">
    <?php
    global $wp_query;
    $total_results = $wp_query->found_posts;
    $search_query = get_search_query();
    ?>
        
    <div>
        <h2>検索結果：<?php echo $search_query; ?><span>（<?php echo $total_results; ?>件）</span></h2>
    </div>
        
    <?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
    <?php $terms = get_the_terms($post -> ID, 'cat_faq');
    foreach((array)$terms as $term){
        $term_slug = $term -> slug;
    } ?>
            <details class="<?php echo esc_html($term_slug); ?>" open>
              <summary><?php the_title(); ?></summary>
              <?php the_content(); ?>
            </details>
            <?php endwhile; else: ?>
        <p class="txtNotmach" class="text-c">検索されたキーワードにマッチする記事はありませんでした</p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    </div>
    <p id="btnMore_SRC" class="text-c"><a href="<?php echo home_url(); ?>/faq">よくある質問トップにもどる</a></p>
</div>

</section>

<?php get_footer(); ?>
</body>  
</html>