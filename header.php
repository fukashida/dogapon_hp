<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="https://dogapon.com/wp-content/themes/dogapon_theme/src/images/icon/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php
	global $page, $paged;
	if(is_front_page()) : //トップページ
		bloginfo('name');
	elseif(is_home()) : //ブログページ（ブログサイトの場合はトップページ）
		wp_title('|', true, 'right');
		bloginfo('name');
	elseif(is_single()) : //記事ページ
		wp_title('|', true, 'right');
      bloginfo('name');
	elseif(is_page()) : //固定ページ
		wp_title('|', true, 'right');
		bloginfo('name');
	elseif(is_archive()) : //アーカイブページ（カテゴリーページなど）
		wp_title('|', true, 'right');
		bloginfo('name');
	elseif(is_search()) : //検索結果ページ
		wp_title('|', true, 'right');
      bloginfo('name');
	elseif(is_404()): //404ページ
		echo '404|';
		bloginfo('name');
	endif;
	if($paged >= 2 || $page >= 2) : //２ページ目以降の場合
		echo '-' . sprintf('%sページ',
		max($paged,$page));
	endif;
      ?>
  </title>
  
	<?php if(is_front_page()) : //トップページ ?>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
        <meta property="og:title" content="<?php bloginfo('name'); ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo home_url(); ?>">
        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/top/slide1_pc.jpg">
	<?php elseif(is_home()) : //ブログページ（ブログサイトの場合はトップページ） ?>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
        <meta property="og:title" content="<?php the_title(); ?>|<?php bloginfo('name'); ?>">
        <meta property="og:type" content="blog">
        <meta property="og:url" content="<?php echo home_url(); ?>/blog">
        <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/top/slide1_pc.jpg">
	<?php elseif(is_single()) : //記事ページ ?>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:title" content="<?php the_title(); ?>|<?php bloginfo('name'); ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>">
	<?php elseif(is_page()) : //固定ページ ?>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
        <meta property="og:title" content="<?php the_title(); ?>|<?php bloginfo('name'); ?>">
        <meta property="og:type" content="article">
        <meta property="og:url" content="<?php echo get_page_link();?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/top/slide1_pc.jpg">
    
		<?php elseif(is_archive()) : //アーカイブページ（カテゴリーページなど） ?>
    <meta property="og:description" content="よくある質問" />
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
        <meta property="og:title" content="よくある質問">
        <meta property="og:type" content="article">
        <meta property="og:url" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/blog/slide3_pc.jpg">
	
	<?php elseif(is_search()) : //検索結果ページ ?>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
        <meta property="og:title" content="<?php the_title(); ?>|<?php bloginfo('name'); ?>">
        <meta property="og:type" content="article">
        <meta property="og:url" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/top/slide1_pc.jpg">

	<?php elseif(is_404()): //404ページ ?>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
        <meta property="og:title" content="<?php the_title(); ?>|<?php bloginfo('name'); ?>">
        <meta property="og:type" content="article">
        <meta property="og:url" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/top/slide1_pc.jpg">
	<?php endif; ?>
    <meta name="twitter:card" content="summary_large_image">
    
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    
<!-- swiper -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper-bundle.css">
    
<!-- drawer.css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/drawer.css">
<!-- iScroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
 
<!-- slick.js -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  
  <meta name="theme-color" content="#fafafa">
  
  <script type="text/javascript" src="https://js.crossees.com/csslp.js" async></script>
<?php wp_head(); ?>
</head>
    
<body id="top" class="drawer drawer--right" ontouchstart="">
  <div>
    <header>
        <div class="pc">
            <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logoHead.svg" alt="ドガポンマーケティング大学校"></a></h1>
            <nav class="menu">
                <li class="menu__single menu_top <?php if(is_page('reason')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/reason" class="init-bottom">選ばれる理由</a>
                    <ul class="menu__second-level">
                        <li><a href="<?php echo home_url(); ?>/reason#knowhow">最先端の動画ノウハウ</a></li>
                        <li><a href="<?php echo home_url(); ?>/reason#support">結果にフォーカスしたサポート</a></li>
                        <li><a href="<?php echo home_url(); ?>/reason#professional">未経験から動画のプロへ</a></li>
                    </ul>
                </li>
                <li class="menu__single menu_top <?php if(is_page('curriculum')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/curriculum" class="init-bottom">カリキュラム</a>
                    <ul class="menu__second-level price">
                        <li class="<?php if(is_page('price')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/curriculum/price">料金</a></li>
                    </ul>
                </li>
                <li class="menu_top <?php if(is_tag('voice')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/tag/voice">受講生インタビュー</a></li>
                <li class="menu_top <?php if(is_page('limitedcontents')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/limitedcontents">限定コンテンツ</a></li>
                <li class="menu_top <?php if(is_page('blog')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/blog">ドガポンブログ</a></li>
                <li class="menu_top <?php if(is_post_type_archive('faq')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/faq">よくある質問</a></li>
            </nav>
            <div class="menu_right <?php if(is_page('counseling')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/counseling">無料<br>カウンセリング</a></div>
        </div>
        <!-- ハンバーガーボタン -->
        <button type="button" class="drawer-toggle drawer-hamburger tab-sp">
          <span class="sr-only">toggle navigation</span>
          <span class="drawer-hamburger-icon"></span>
        </button>
        <!-- ナビゲーションの中身 -->
        <nav class="drawer-nav tab-sp" role="navigation">
            <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logoHead.svg" alt="ドガポンマーケティング大学校"></a></h1>
          <ul class="drawer-menu">
            <li id="doropmenu_1"><div class="menu_toggle <?php if(is_page('reason')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/reason" class="menu_sp">選ばれる理由</a><span class="toggle"></span></div>
                <ul class="inner child">
                    <li><a href="<?php echo home_url(); ?>/reason#knowhow">最先端の動画ノウハウ</a></li>
                    <li><a href="<?php echo home_url(); ?>/reason#support">結果にフォーカスしたサポート</a></li>
                    <li><a href="<?php echo home_url(); ?>/reason#professional">未経験から動画のプロへ</a></li>
                </ul>
            </li>
              <li id="doropmenu_2"><div class="menu_toggle <?php if(is_page('curriculum')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/curriculum" class="menu_sp">カリキュラム</a><span class="toggle"></span></div>
                <ul class="inner child">
                    <li class="<?php if(is_page('price')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/curriculum/price">料金</a></li>
                </ul>
            </li>
            <li class="menu_top <?php if(is_tag('voice')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/tag/voice">受講生インタビュー</a></li>
            <li class="menu_top <?php if(is_page('limitedcontents')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/limitedcontents">限定コンテンツ</a></li>
            <li class="menu_top <?php if(is_page('blog')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/blog">ドガポンブログ</a></li>
            <li class="menu_top <?php if(is_post_type_archive('faq')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/faq" class="border-none">よくある質問</a></li>
          </ul>
            <div class="btnCSL <?php if(is_page('counseling')) : ?>active<?php endif; ?>"><a href="<?php echo home_url(); ?>/counseling">無料カウンセリング</a></div>
        </nav>
    </header>