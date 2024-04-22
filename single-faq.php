<?php get_header(); ?>
<div id="contSRC2" class="wraplineBG">
    <style>
        .btnCS_hide{display: none;}
    </style>
    <main class="wrap1250">
       <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>

            <article class="content">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>
        <p class="btnMore"><a href="<?php echo home_url(); ?>/faq"><img src="<?php echo get_template_directory_uri(); ?>/images/blog/btnMore.svg" alt="もっとみる"></a></p>

        <?php
        endwhile;
        endif;
        ?>
    </main>
</div>
<?php get_footer(); ?>
</body>  
</html>