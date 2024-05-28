<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'id' => 'sidebar-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class="widget_title">',
		'after_title' => '</h2>',
	));
}

//カスタム投稿用post_typeセット
add_filter('template_include','custom_search_template');
function custom_search_template($template){
  if ( is_search() ){
    $post_types = get_query_var('post_type');
    foreach ( (array) $post_types as $post_type )
      $templates[] = "search-{$post_type}.php";
    $templates[] = 'search.php';
    $template = get_query_template('search',$templates);
  }
  return $template;
}

function set_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
 
  if ( wp_is_mobile() ) {
        $query->set( 'posts_per_page', '10' ); // スマホの際の表示件数

  } else {
    // get_option('posts_per_page')
  }
}
add_action( 'pre_get_posts', 'set_posts_per_page' );
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'post-thumbnails' );

//------------------------------------------------------------------



