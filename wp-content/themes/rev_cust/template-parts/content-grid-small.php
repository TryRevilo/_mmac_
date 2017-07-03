<?php
   /**
    * Template part for displaying posts.
    *
    * @link    https://codex.wordpress.org/Template_Hierarchy
    *
    * @package Shapely
    */
   
   ?>
   <article id="post-<?php the_ID(); ?>" <?php post_class('post-content post-grid-small col-md-6'); ?> >
     <div class="hb-info">
      <div class="hb-thumb">
       <img src="<?= catch_that_image(); ?>" class="img-responsive" alt=""/>
       <div class="date-meta">
        <?php echo get_the_date('F j, Y'); ?>
      </div>
    </div>
    <h4 style="font-size: 15px;"><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo wp_trim_words( get_the_title(), 9 ); ?></a></h4>
    <p>
     <?= the_excerpt(); ?>
   </p>
 </div>
</article>