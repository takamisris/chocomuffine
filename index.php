<?php get_header(); ?>
<div class="main">
  <div class="contents">
    <?php if (is_category() || is_tag()): ?>
      <h1><?php single_cat_title() ?>の記事</h1>
    <?php endif; ?>

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article <?php post_class('post-list'); ?>>
        <a href="<?php the_permalink(); ?>">

          <!-- サムネイル -->
          <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('medium'); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" alt="no-img"/>
          <?php endif; ?>

          <div class="text">
            <!-- タイトル -->
            <h2><?php the_title(); ?></h2>

            <!-- 投稿日時 -->
            <span class="post-date">
              <!-- <i class="fas fa&#45;pencil&#45;alt"</i> -->
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date(); ?>
              </time>
            </span>

            <!-- カテゴリ -->
            <?php if (!is_category()): ?>
              <?php if (has_category()): ?>
                <span class="post-category">
                  <?php $post_category=get_the_category(); echo $post_category[0]->name; ?>
                </span>
              <?php endif; ?>
            <?php endif; ?>

            <!-- 抜粋 -->
            <?php the_excerpt(); ?>
          </div>
        </a>
      </article>
    <?php endwhile; endif; ?>

    <!-- ページネーション -->
    <div class="pagination">
        <?php echo paginate_links( array(
          'type' => 'list',
          'mid_size' => '1',
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;'
          ) ); ?>
    </div>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
