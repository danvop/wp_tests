<?php if(!is_front_page()) : ?>
  <aside class="col-md-4 blog-sidebar">
    <?php 
    if(is_active_sidebar('sidebar')) : 
      dynamic_sidebar('sidebar');
    endif; 
    ?>
  </aside><!-- /.blog-sidebar -->
<?php endif; ?>
  </div><!-- /.row -->

</main><!-- /.container -->
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
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>