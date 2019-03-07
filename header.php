<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/widget.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/desert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


<?php wp_head(); ?><!-- WordPressに必要なメタ情報、JQUERYのインストールなど -->
</head>
<body <?php body_class(); ?>>
<header>
    <?php if(is_tag() || is_date() || is_search() || is_404()) : ?>
        <meta name="robots" content="noindex"/>
    <?php endif; ?>
    <?php if( is_single() || is_page() ): ?>
        <meta name="description" content="<?php echo strip_tags( get_the_excerpt() ); ?>" />
        <?php if ( has_tag() ): ?>
            <?php $tags = get_the_tags();
            $kwds = array();
            foreach($tags as $tag){
                $kwds[] = $tag->name;
            }	?>
            <meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>">
        <?php endif; ?>
    <?php else: ?><!--個別ページ以外のメタデータ(TOPページ・記事一覧ページなど)-->
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <?php $allcats = get_categories();
        $kwds = array();
        foreach($allcats as $allcat) {
            $kwds[] = $allcat->name;
        } ?>
        <meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>">
    <?php endif; ?>

    <div class="header-inner">
        <a href="<?php echo home_url(); ?>">
        <div class="site-title">
            <h1><?php bloginfo( 'name' ); ?></h1>
        </div>
        <div class="site-discription">
            <?php bloginfo( 'description' ); ?>
        </div>
        </a>

        <!--        <button type="button" id="navbutton">-->
<!--            <i class="fas fa-bars"></i>-->
<!--        </button>-->
    </div>

    <div id="nav-link">
        <a href="/about-me">
            <div class="icon link-about-me">
                <div class="icon-img">
                    <i class="fas fa-user"></i>
                </div>
                <div class="icon-document">
                    About me
                </div>
            </div>
        </a>
        <a href="/work-experience">
            <div class="icon link-work-experience">
                <div class="icon-img">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="icon-document">
                    Work experience
                </div>
            </div>
        </a>
        <div class="icon link-programing-lesson">
            <div class="icon-img">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="icon-document">
                Programming lesson
            </div>
        </div>
        <a href="/contact-me">
        <div class="icon link-contact-me">
            <div class="icon-img">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="icon-document">
                Contact me
            </div>
        </div>
        </a>
    </div>

    <?php /*wp_nav_menu( array(
    'theme_location' => 'header-nav',
    'container' => 'nav',
    'container_class' => 'header-nav',
    'container_id' => 'header-nav',
    'fallback_cb' => ''
  ) ); */?>
</header>
