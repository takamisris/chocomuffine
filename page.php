<?php get_header(); ?>
<div class="main">
    <div class="contents">
        <?php if(have_posts()): the_post(); ?>
            <article <?php post_class('article'); ?>>
                <div class="page">
                    <!--タイトル-->
                    <h1><?php the_title(); ?></h1>
                    <div class="article-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
