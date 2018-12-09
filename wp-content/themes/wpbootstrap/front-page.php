<!doctype html>
<html <?php language_attributes(); ?>>
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
  </head>

  <body>

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
<div role="main" class="container">

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Pricing</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
</div>
<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
            <h4 class="my-0 font-weight-normal">Free</h4>
            </div>
            <div class="card-body">
            <i class="fas fa-dollar-sign"></i>
            <ul class="list-unstyled mt-3 mb-4">
                <li>10 users included</li>
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
            </ul>
            
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
            <h4 class="my-0 font-weight-normal">Pro</h4>
            </div>
            <div class="card-body">
            <i class="fas fa-adjust"></i>
            <ul class="list-unstyled mt-3 mb-4">
                <li>20 users included</li>
                <li>10 GB of storage</li>
                <li>Priority email support</li>
                <li>Help center access</li>
            </ul>
            
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
            <h4 class="my-0 font-weight-normal">Enterprise</h4>
            </div>
            <div class="card-body">
            <i class="fas fa-wrench"></i>
            <ul class="list-unstyled mt-3 mb-4">
                <li>30 users included</li>
                <li>15 GB of storage</li>
                <li>Phone and email support</li>
                <li>Help center access</li>
            </ul>
            
            </div>
        </div>
    </div>
</div>
</div>


</div><!-- /.container -->
<footer class="blog-footer">
      
<p>
<a href="#">Back to top</a>
</p>

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