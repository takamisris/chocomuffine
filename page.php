<?php get_header(); ?>
<div class="main">
  <div class="contents">
    <?php if(have_posts()): the_post(); ?>
    <article <?php post_class('article'); ?>>
      <!--タイトル-->
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
