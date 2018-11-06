<?php 
	add_action('after_setup_theme','theme_start');

	function theme_start(){
		add_theme_support('custom-header');
		add_theme_support('post-thumbnails');
		add_theme_support('custom-background');
		register_nav_menus(array(
			"main-menu" => "Main Menu",
			));
		register_post_type('slider',array(
			'labels'=>array(
				'name' =>"Slider",
				'add_new_item'=>"Add new image",
				),
			'public' =>true,
			'menu_icon' =>'dashicons-images-alt',
			'supports' =>array('title','thumbnail'),
			));
	}

	/*add a hook for sidebar or widgets*/

	add_action('widgets_init',function(){
			register_sidebar(array(
					'id'=>'left-sidebar',
					'name'=>'Left Sidebar',
					'before_title'=>'<h2 class="star"><span>',
					'after_title'=>'</span></h2>',
					'before_widget'=>'<div class="gadget">',
					'after_widget'=>'</div>',
				));

			register_widget('pages');
	});

	class pages extends WP_Widget{
		public function __construct(){
			parent::__construct('pagesid', 'Custom pages');
		}

		public function form($ftitle){
			?>

			<p>
				<label for="<?php echo $this->get_field_id('title');?>">Title:</label>
				<input id="<?php echo $this->get_field_id('title');?>" type="text" class="widefat" name="<?php echo $this->get_field_name('name');?>" value="<?php echo $ftitle['name'];?>">
			</p>

			<?php
		}
	}
	add_action('wp_enqueue_scripts','style_and_script');

	function style_and_script(){
		wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
		wp_enqueue_style('coin-slider', get_template_directory_uri().'/css/coin-slider.css');

		wp_enqueue_script('cufon-yui', get_template_directory_uri().'/js/cufon-yui.js', array('jquery'));
		wp_enqueue_script('cufon-aller.js', get_template_directory_uri().'/js/cufon-aller.js', array('jquery'));
		wp_enqueue_script('script',get_template_directory_uri().'/js/script.js', array('jquery'));
		wp_enqueue_script('coin-slider.min',get_template_directory_uri().'/js/coin-slider.min.js', array('jquery'));
	}
	// For addons start

	add_action('init', 'your_init', 99 );
	 
	function your_init() {
	 
		if (function_exists('kc_add_map')) 
		{ 
		    kc_add_map(
		        array(
	 
		            'NewTeam' => array(
		                'name' => 'new team',
		                'description' => __('Display single icon', 'KingComposer'),
		                'icon' => 'sl-paper-plane',
		                'category' => 'Luckyrs',
		                'params' => array(
		                    
		                    array(
		                        'name' => 'teamname',
		                        'label' => 'Name',
		                        'type' => 'text',  // USAGE TEXT TYPE
		                        'description' => 'Write new team name here',
		                    ),
		                    array(
		                        'name' => 'desg',
		                        'label' => 'Designation',
		                        'type' => 'text',  // USAGE TEXT TYPE
		                        'description' => 'Write new team designation here',
		                    ),
		                    array(
		                        'name' => 'btn_text',
		                        'label' => 'Button Text',
		                        'type' => 'text',  // USAGE TEXT TYPE
		                        'description' => 'Write new team button text here',
		                    ),
		                    array(
		                        'name' => 'btn_color',
		                        'label' => 'Button Color',
		                        'type' => 'color_picker',  // USAGE TEXT TYPE
		                        'description' => 'Write new team button color here',
		                    ),
		                    array(
								'name' => 'btn_link',
								'label' => 'Button Link',
								'type' => 'link',
								
							),
							array(
								'name' => 'image',
								'label' => 'Image',

								'type' => 'attach_image',  // USAGE ATTACH_IMAGE TYPE
							),
		                    
		                )
		            ),  // End of elemnt kc_icon 
	 
		        )
		    ); // End add map
		
		} // End if
	 
	}

	add_shortcode('NewTeam','newteam_shortcode_function');
	function newteam_shortcode_function($first,$second){
		$output = shortcode_atts(array(
			'teamname'=>'',
			'desg'=>'',
			'btn_text'=>'',
			'btn_color'=>'',
			'btn_link'=>'',
			'image'=>'',
		),$first);
		extract($output);

		?>
		<div class="column">
    <div class="card">
      <?php
      	$img_src = wp_get_attachment_image_src($image,'large');
      	// print_r($img_src);
      ?>
      <img src="<?php echo  $img_src[0];?>" alt="Jane" style="width:100%">
      <div class="container">
        <h2><?php echo  $teamname;?></h2>
        <p class="title"><?php echo  $desg;?></p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <?php
        $btn_link_func = kc_parse_link($btn_link);
        // print_r($btn_link_func);
        ?>
        <p><a target="<?php echo  $btn_link_func['target'];?>" href="<?php echo  $btn_link_func['url'];?>"><button class="button" style="background-color: <?php echo  $btn_color;?>"><?php echo  $btn_text;?></button></a></p>
      </div>
    </div>
    <?php
	}

	// For addons end

?>