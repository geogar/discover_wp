<?php
    get_header();
?>
<div class="container">
  <section>
    <h1 class="title"><?php the_title(); ?></h1>
            <?php
              if (have_posts()){
                ?>
                <h3>
                  <?php
                  while(have_posts()){
                    the_post();
                    the_content();
                  }
                  ?>
                </h3>
                <?php
              }  
            ?>
  </section>
</div>
<?php
    get_footer();
?>
           