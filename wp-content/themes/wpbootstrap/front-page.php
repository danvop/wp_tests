<!doctype html>
<html class="h-100" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>
      <?php bloginfo('name') ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url')?>/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
        .showcase {
            background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg'); ?>) no-repeat center center;
        }
    </style>
  </head>

  <body class="h-100 d-flex flex-column">

<div class="container">
    <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
        </div>
        <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
        </div>
    </div>
    </header>

    <nav class="navbar navbar-expand-md navbar-light bg-white">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
   
        <?php
        wp_nav_menu( array(
        'theme_location'  => 'primary',
        'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbarNavDropdown',
        'menu_class'      => 'navbar-nav mr-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
        ) );      
        ?>
        
    </div>
    </nav>
</div>
<section class="showcase">
    <div class="container">
    <h1><?php echo get_theme_mod('showcase_heading','Custom Bootstrap Wordpress Theme'); ?></h1>
    <p><?php echo get_theme_mod('showcase_text','Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
    <a class="btn btn-primary btn-lg" href="<?php echo get_theme_mod('btn_url',get_permalink( get_option( 'page_for_posts' ))); ?>"><?php echo get_theme_mod('btn_text','Get Started'); ?></a>
    </div>
</section>

<div class="container">
    <div class="card-deck mb-3 text-center">
        <!-- Pricing plans -->
        <?php if(is_active_sidebar('box1')) : ?>
            <?php dynamic_sidebar('box1'); ?>
        <?php endif; ?>
        <?php if(is_active_sidebar('box2')) : ?>
                <?php dynamic_sidebar('box2'); ?>
        <?php endif; ?>
        <?php if(is_active_sidebar('box3')) : ?>
                <?php dynamic_sidebar('box3'); ?>
        <?php endif; ?>
    </div>
</div>
</div>


</div><!-- /.container -->
<footer class="blog-footer mt-auto">
      
<p>
<a href="#">Back to top</a>
</p>

<a class="blog-footer-link" href="#"><i class="fab fa-twitter"></i></a>
<a class="blog-footer-link" href="#"><i class="fab fa-facebook"></i></a>
<a class="blog-footer-link" href="#"><i class="fab fa-instagram"></i></a>
<?php if(is_active_sidebar('facebook_link')) : ?>
    <?php dynamic_sidebar('facebook_link'); ?>
<?php endif; ?>

</footer>
<!-- wordpress adminBar -->
<?php wp_footer(); ?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url')?>/js/jquery-slim.min.js"><\/script>')</script>
<script src="<?php bloginfo('template_url')?>/js/popper.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_url')?>/js/holder.min.js"></script>
 </body>
</html>