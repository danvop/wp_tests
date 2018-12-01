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

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

<?php get_footer(); ?>