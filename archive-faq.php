<?php get_header(); ?>
<h2 class="title">よくある質問</h2>

<section>

    <div id="wrapFAQ">
        <div class="wrap1250">
            <form id="form" method="get" action="<?php echo home_url('/'); ?>" >
                <input id="sbox" name="s" type="text" placeholder="検索キーワードをご入力ください">
                <input type="hidden" name="post_type" value="faq">
                <input id="sbtn" type="image" src="<?php bloginfo('template_url'); ?>/images/common/search.svg">
            </form>
        </div>
    </div>
    
    <div id="wrapFAQ_tab">
        <div class="area wrap1250">
            <input type="radio" name="tab_name" id="tab1" checked>
            <label class="tab_class" for="tab1" id="tab1_title">学校・<br class="sp">受講条件<br class="tb">について</label>
            <div id="tab1" class="content_class">
              <?php query_posts( array(
                    'post_type' => 'faq',
                     'taxonomy' => 'cat_faq',
                     'term' => 'conditions',
                     //'term' => $term->slug,
                     'posts_per_page' => -1,
                     'no_found_rows' => true,'order' => 'ASC',
    
            )); ?>
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                <details>
                  <summary><?php the_title(); ?></summary>
                  <div class="item">
                    <?php the_content(); ?>
                  </div>
                </details>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <input type="radio" name="tab_name" id="tab2" >
            <label class="tab_class" for="tab2" id="tab2_title">受講方法に<br class="sp">ついて</label>
            <div id="tab2" class="content_class">
              <?php query_posts( array(
                    'post_type' => 'faq',
                     'taxonomy' => 'cat_faq',
                     'term' => 'howto',
                     //'term' => $term->slug,
                     'posts_per_page' => -1,
                     'no_found_rows' => true,'order' => 'ASC',
            )); ?>
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                <details>
                  <summary><?php the_title(); ?></summary>
                  <div class="item">
                    <?php the_content(); ?>
                  </div>
                </details>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <input type="radio" name="tab_name" id="tab3" >
            <label class="tab_class" for="tab3" id="tab3_title">サポート<br class="sp">について</label>
            <div id="tab3" class="content_class">
              <?php query_posts( array(
                    'post_type' => 'faq',
                     'taxonomy' => 'cat_faq',
                     'term' => 'support',
                     //'term' => $term->slug,
                     'posts_per_page' => -1,
                     'no_found_rows' => true,'order' => 'ASC',
            )); ?>
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                <details>
                  <summary><?php the_title(); ?></summary>
                  <div class="item">
                    <?php the_content(); ?>
                  </div>
                </details>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <input type="radio" name="tab_name" id="tab4" >
            <label class="tab_class" for="tab4" id="tab4_title">お支払い<br class="sp">について</label>
            <div id="tab4" class="content_class">
              <?php query_posts( array(
                    'post_type' => 'faq',
                     'taxonomy' => 'cat_faq',
                     'term' => 'payment',
                     //'term' => $term->slug,
                     'posts_per_page' => -1,
                     'no_found_rows' => true,'order' => 'ASC',
            )); ?>
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                <details>
                  <summary><?php the_title(); ?></summary>
                  <div class="item">
                    <?php the_content(); ?>
                  </div>
                </details>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <input type="radio" name="tab_name" id="tab5" >
            <label class="tab_class" for="tab5" id="tab5_title">卒業後<br class="sp">について</label>
            <div id="tab5" class="content_class">
              <?php query_posts( array(
                    'post_type' => 'faq',
                     'taxonomy' => 'cat_faq',
                     'term' => 'graduation',
                     //'term' => $term->slug,
                     'posts_per_page' => -1,
                     'no_found_rows' => true,'order' => 'ASC',
            )); ?>
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                <details>
                  <summary><?php the_title(); ?></summary>
                  <div class="item">
                    <?php the_content(); ?>
                  </div>
                </details>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
      </div>
        
    </div>

  </section>

<?php get_footer(); ?>
</body>  
</html>