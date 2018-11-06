<?php echo get_header();?>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        
      <?php while(have_posts()):the_post();?>
        <div class="article">
          <!-- <h2><span><?php the_title();?></span> </h2>
          <p class="infopost">Posted on <span class="date"><?php the_time('j M Y')?></span> by <a href="#"><?php the_author();?></a> &nbsp;&nbsp;&bull;&nbsp;&nbsp; <?php the_tags('Filed under ',',','');?> &nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="#" class="com">Comments <span>(<?php comments_number('0','1','%');?>)</span></a></p> -->
          <div class="clr"></div>
          
          <!-- <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/img1.jpg" width="156" height="221" alt="" class="fl" /></div> -->
          <!-- <div class="img"><img src="<?php echo get_the_post_thumbnail_url();?>" width="156" height="221" alt="" class="fl" /></div> -->
          
            <?php

            the_content(); 
             /*echo wp_trim_words(get_the_content(),'130',' More...');*/
             ?>
            <!-- <p class="spec"><a href="<?php the_permalink();?>" class="rm">Read more</a></p> -->
          
          <div class="clr"></div>
        </div>

        <?php endwhile;?>
        
        <!-- <?php the_posts_pagination(array(
          "next_text" => "&raquo;",
          "prev_text" => "&laquo;",
        ));?> -->
        
      </div>
      
        <?php echo get_sidebar();?>

      <div class="clr"></div>
    </div>
  </div>
  
  <?php echo get_footer();?>