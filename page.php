<?php
/*
Template Name: デフォルトテンプレート
*/
?>

<?php get_header(); ?>

<style>
    .btnCS_hide{display: none;}
    .drawer-hamburger-icon, .drawer-hamburger-icon:before, .drawer-hamburger-icon:after{background-color: #4d4d4d;}
</style>

<div id="wrapPage">
    
<?php $page = get_post( get_the_ID() ); $slug = $page->post_name;?>
<div id="wrapPageTitle" class="<?php echo $slug; ?>">
    <h2><?php the_title(); ?></h2>
</div>
    
<main class="wrap1250">
<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <?php the_content(); ?>
<?php endwhile; endif; ?>
</main>
    
</div>

<?php get_footer(); ?>

</body>  
</html>