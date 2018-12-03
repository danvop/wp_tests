<?php get_header(); ?>
  
    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main border-top">
          
          <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
          <div class="blog-post">
            
              <h2 class="blog-post-title">
              <a href="<?php the_permalink();?>">
                <?php the_title();?>
              </a>
              </h2>
            <p class="blog-post-meta">
              <?php the_time('F j, Y g:i a '); ?> 
              by <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ; ?>">
              <?php the_author();?>
              </a>
            </p>
            <?php if(has_post_thumbnail()) : ?>
              <div class="post-thumb">
                <?php  the_post_thumbnail();  ?>
              </div>
            
            <?php endif; ?>
            <?php the_content(); ?>
            <hr>
            <?php comments_template(); ?>
            
          </div><!-- /.blog-post -->
            <?php endwhile; ?>
            <?php else : ?>
            <p><?php __('No Posts Found') ?></p>
            <?php endif; ?> 
          
            
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

<?php get_footer(); ?>