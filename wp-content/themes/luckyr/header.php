<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php bloginfo('name');?>Luckyr</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/coin-slider.css" /> 
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/cufon-aller.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/coin-slider.min.js"></script>  -->
<?php wp_head();?>
</head>
<body <?php body_class();?> >
<div class="main">
  <div class="header">
    <div class="header_resize">

    <?php wp_nav_menu(array(
      'theme_location'=> 'main-menu',
      'container_class' => 'menu_nav',
     ));?>
      
      <div class="logo">
        <h1><a href="<?php echo home_url('/');?>"><small><?php bloginfo('description');?></small> <span><?php bloginfo('title');?></span></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider">
        <?php 
            $query = new WP_Query(array(
              "post_type"=>'slider',
              'post_per_page'=> -1,
              'order'=>'ASC',
            ));
        ?>
      <?php while($query->have_posts()):$query->the_post();?>

         <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" width="970" height="305" alt="" /> </a>
           <?php endwhile;?>
           </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>