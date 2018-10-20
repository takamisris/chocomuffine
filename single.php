<?php get_header(); ?>
<div class="main">
  <div class="contents">
    <?php if(have_posts()): the_post(); ?>
    <article <?php post_class( 'article' ); ?>>
      <div class="article-info">
        <!--投稿日を取得-->
        <span class="article-date">
          <i class="fas fa-pencil-alt"></i>
          <time
          datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
          <?php echo get_the_date(); ?>
          </time>
        </span>
        <!--カテゴリ取得-->
        <?php if(has_category() ): ?>
        <span class="article-category">
          <?php echo get_the_category_list( ' ' ); ?>
        </span>
        <?php endif; ?>
      </div>
      <!--タイトル-->
      <h1><?php the_title(); ?></h1>
      <!--アイキャッチ取得-->
      <?php if( has_post_thumbnail() ): ?>
      <div class="article-image">
        <?php the_post_thumbnail( 'large' ); ?>
      </div>
      <?php endif; ?>
      <!--本文取得-->
      <div class="article-content">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endif; ?>
 
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
