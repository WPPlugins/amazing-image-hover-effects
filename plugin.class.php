<?php 
	/**
	* Plugin Main Class 
	*/
	class WDO_Amazing_Hover 
	{
		
		function __construct()
		{
			add_action(  'admin_menu',array($this,'amazing_hover_admin_options') );
			add_action( 'admin_enqueue_scripts', array($this,'amazing_hover_add_scripts'));
			add_action('wp_ajax_la_save_amazing_hover_options', array($this, 'save_amazing_hover_options'));
			add_shortcode( 'amazing-image-hover-effects', array($this,'amazing_hover_render_shortcode') );
		}

		function amazing_hover_admin_options(){
			add_menu_page( 'Amazing Image Hover Effects', 'Amazing Image Hover Effects', 'manage_options', 'wdo_amazing_hover', array($this,'amazing_hover_option_page'), 'dashicons-format-image', '65.404' );
		}

		function amazing_hover_add_scripts($slug){
			if($slug=='toplevel_page_wdo_amazing_hover'){
				wp_enqueue_media();
				wp_enqueue_style( 'wp-color-picker' );
				wp_enqueue_script( 'admin-js', plugins_url( 'admin/admin.js', __FILE__ ), array('jquery', 'jquery-ui-accordion','wp-color-picker','jquery-ui-sortable'));
				wp_enqueue_style( 'ui-css', plugins_url( 'admin/jquery-ui.min.css', __FILE__ ));
				wp_enqueue_script( 'spectrum-js', plugins_url( 'admin/spectrum.js', __FILE__ ),array('jquery'));
				wp_enqueue_style( 'spectrum-css', plugins_url( 'admin/spectrum.css', __FILE__ ));
				wp_enqueue_style( 'style-css', plugins_url( 'admin/style.css', __FILE__ ));
				wp_localize_script( 'admin-js', 'laAjax', array( 'url' => admin_url( 'admin-ajax.php' )));
			}
		}

		function save_amazing_hover_options(){
			if (isset($_REQUEST)) {
				update_option( 'wdo_amazing_hover_effect', $_REQUEST );
			}
		}

		function amazing_hover_option_page(){ 
			$saved_options = get_option( 'wdo_amazing_hover_effect' );
			include 'settings.php';
 		}
		
		function amazing_hover_render_shortcode($atts){
			$saved_options = get_option( 'wdo_amazing_hover_effect' );
			if (isset($saved_options['posts'])) {
			ob_start(); ?>
				<div class="amazing-hover-page-container row">
				<?php foreach ($saved_options['posts'] as $key => $data) {  
					foreach ($data['allcapImages'] as $key => $data2) {  
						if ($atts['id']== $data2['shortcode']) {
							wp_enqueue_style( 'hover-css', plugins_url( 'css/grid.css',__FILE__ ));
							wp_enqueue_style( 'grid-css', plugins_url( 'css/amazinghover.css',__FILE__ ));
							// wp_enqueue_script( 'front-js', plugins_url( 'js/front.js',__FILE__ ),array('jquery'));
						?>
						<div class="col-sm-<?php echo $data2['cap_grid']; ?>" >
							<div class="wdo-item-hover circle <?php echo $data2['cap_effect']; ?> <?php if ($data2['cap_effect']=='effect6') {
				                   	echo "scale_up";
				                   }elseif($data2['cap_effect']=='effect5'||$data2['cap_effect']=='effect21'){
				                   		echo "colored";
				                   }else{
				                   	
				                   	echo $data2['cap_direction'];
				                   }
				                    ?>">
								<a href="<?php if ($data2['cap_link'] != '') {
						                  	echo $data2['cap_link'];
						                  }else{echo "javascript:";}?>"> 
					                <div class="img" style="height:100%;width:100%;"><img style="height:100%;width:100%;" src="<?php if ($data2['cap_img']!='') {
						                      	echo $data2['cap_img'];
						                      } else {
						                      	echo "http://www.gemologyproject.com/wiki/images/5/5f/Placeholder.jpg";
						                      }
						                       ?>" alt="img">
						            </div>
						                       <?php if ($data2['cap_effect']=='effect8') { ?>
						                       	<div class="info-container">
						                       		
							                      <div class="info" style="width:100%;">
							                        <h3 style="color:<?php echo $data2['cap_headcolor']; ?>;">
								                        <?php if ($data2['cap_head'] !='') {
								                        	$heading= stripslashes($data2['cap_head']);
								                        	echo $heading;
								                        }
								                         ?>
							                         </h3>

							                        <p style="color:<?php echo $data2['cap_desccolor']; ?>;border-top:<?php if ($data2['cap_top_border']=='no') {
							                        	echo "none";
							                        } ?>!important;">
								                        <?php if ($data2['cap_desc'] != '') {
								                        	$content= stripslashes($data2['cap_desc']);
								                        	echo $content;
								                        }
								                         ?>
							                         </p>

							                      </div>
						                       	</div>
						                       <?php } elseif(($data2['cap_effect']=='effect1')|| ($data2['cap_effect']=='effect5') || ($data2['cap_effect']=='effect13') || $data2['cap_effect']=='effect18' || $data2['cap_effect']=='effect20' || ($data2['cap_effect']=='effect9') || ($data2['cap_effect']=='effect22')|| ($data2['cap_effect']=='effect24')) { ?>
						                       <div class="info" style="width:100%;">
						                       		<div class="info-back">
								                        <h3 style="color:<?php echo $data2['cap_headcolor']; ?>;">
									                        <?php if ($data2['cap_head'] !='') {
									                        	$heading= stripslashes($data2['cap_head']);
								                        		echo $heading;
									                        }
									                         ?>
								                         </h3>
								                        <p style="color:<?php echo $data2['cap_desccolor']; ?>;border-top:<?php if ($data2['cap_top_border']=='no') {
							                        	echo "none";
							                        } ?>!important;">
									                        <?php if ($data2['cap_desc'] != '') {
									                        	$content= stripslashes($data2['cap_desc']);
								                        		echo $content; 
									                        }
									                         ?>
								                         </p>
							                        </div>
						                      </div>
						                       	
						                       <?php } else{ ?>
												<div class="info" style="width:100%;">
							                        <h3 style="color:<?php echo $data2['cap_headcolor']; ?>;">
								                        <?php if ($data2['cap_head'] !='') {
								                        	$heading= stripslashes($data2['cap_head']);
								                        	echo $heading;
								                        }
								                         ?>
							                         </h3>
							                        <p style="color:<?php echo $data2['cap_desccolor']; ?>;border-top:<?php if ($data2['cap_top_border']=='no') {
							                        	echo "none";
							                        } ?> !important;">
								                        <?php if ($data2['cap_desc'] != '') {
								                        	$content= stripslashes($data2['cap_desc']);
								                        	echo $content; 
								                        }
								                         ?>
							                         </p>
						                      </div>


						                      <?php } ?>
				                </a>
			                </div>
		                </div>
	              		<?php } ?>  
	              	<?php } ?>  
	            <?php } ?>
				</div>
			<?php } ?>

	<?php 	return ob_get_clean(); 
		}

}
 ?>