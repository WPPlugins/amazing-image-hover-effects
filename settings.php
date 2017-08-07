
			<div class="wrapper" id="amazingcaption">
				<h2><?php _e('Amazing Image Hover Effects', $domain ); ?></h2>
				<h4 class="getpro"><a href="https://webdevocean.com/product/amazing-hover-effects-wordpress-plugin/" target="_blank">Get Pro Now to Get More Amazing Options</a></h4>
				<hr>
				<div id="faqs-container" class="accordian">
					<?php if (isset($saved_options['posts'])) { ?>
						<?php foreach ($saved_options['posts'] as $key => $data) { ?>

						<h3>
							<span class="dashicons dashicons-category"></span> <a href="#"><?php if ($data['cat_name'] !== '') {
				    			echo $data['cat_name']; 
					    	} else {
					    	echo "Image Caption Hover";
						    }
					    ?></a>
						</h3>
					     
					   	<div class="accordian content">
						<?php foreach ($data['allcapImages'] as $key => $data2) { ?>
					        <h3>
					        	 <a href="#"><?php if ($data2['img_name']!=='') {
					        	echo $data2['img_name'];
					        } else {
					        	echo "Image";
					        }
					         ?></a>
					        </h3>
					        <div>
					        	<table class="form-table">
					        		<tr>
					        			<td style="width:20%">
					        				<strong><?php _e( 'Category Name', 'wdo-amazing-hover' ); ?></strong>
					        			</td>

					        			<td style="width:30%">
					        				<input type="text" class="catname widefat form-control" value="<?php echo $data['cat_name']; ?>"> 
					        			</td>

					        			<td style="width:50%">
					        				<p class="description"><?php _e( 'Name the category for images.Category name should be same for everyimage', 'wdo-amazing-hover' ); ?></p>
					        			</td>
					        		</tr>
					        		<tr>
					        			<td >
					        				<strong><?php _e( 'Image Name', 'wdo-amazing-hover' ); ?></strong>
					        			</td>

					        			<td >
					        				<input type="text" class="imgname widefat form-control" value="<?php echo $data2['img_name']; ?>">
					        			</td>

					        			<td>
					        				<p class="description"><?php _e( 'Name the image.It will be for your reference', 'wdo-amazing-hover' ); ?></p>
					        			</td>
					        		</tr>
					        	</table>
					        	<button class="addimage button"><?php _e( 'Upload Image', 'wdo-amazing-hover' ); ?></button>
					        	<span class="image">
					        		<?php if ($data2['cap_img']!='') {
				        		
				        			echo '<span><img src="'.$data2['cap_img'].'"><span class="dashicons dashicons-dismiss"></span></span>'; } ?>

					        	</span><br>
					        	<h4><?php _e( 'Caption Settings', 'wdo-amazing-hover' ); ?></h4>
					        	<hr>
								<table class="form-table">

									<tr style="width:20%">
										<td>
											<strong><?php _e( 'Caption Heading', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td style="width:30%">
											<input type="text" class="widefat capheading form-control" value="<?php $heading= stripslashes($data2['cap_head']);
								                        	echo $heading; ?>">
										</td>
										<td style="width:50%">
											<p class="description"><?php _e( 'Type Caption heading', 'wdo-amazing-hover' ); ?></p>
										</td>
									</tr>
									<tr>
										<td>
											<strong><?php _e( 'Caption Description', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
											<textarea class="widefat capdesc form-control" cols="30" rows="10">
												<?php $content= stripslashes($data2['cap_desc']);
								                        	echo $content; ?>
											</textarea>
										</td>
										<td>
											<p class="description"><?php _e( 'Give description for the caption', 'wdo-amazing-hover' ); ?></p>
										</td>
									</tr>

									<tr>
										<td>
											<strong><?php _e( 'Caption Top Padding', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
											<input disabled="true" disabled="true" type="number" class="captoppadding form-control" placeholder="Available in Pro">
										</td>
										<td>
											<p class="description"><?php _e( 'Give padding for the caption from the top', 'wdo-amazing-hover' ); ?></p>
										</td>
									</tr>
									<tr>
										<td>
											<strong><?php _e( 'Show Border Below Heading', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
											<select name="" class="form-control captopborder">
												<option value="yes" <?php if ( $data2['cap_top_border'] == 'yes' ) echo 'selected="selected"'; ?>>Yes</option>
												<option value="no" <?php if ( $data2['cap_top_border'] == 'no' ) echo 'selected="selected"'; ?>>No</option>
											</select>
											
										</td>
										<td>
											<p class="description"><?php _e( 'Select want to show border below Caption Heading.', 'wdo-amazing-hover' ); ?></p>
										</td>
									</tr>
									
									<tr>
										<td>
											<strong><?php _e( 'Caption Link', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
											<input type="text" class="widefat caplink form-control" value="<?php echo $data2['cap_link'] ?>">
										</td>
										<td>
											<p class="description"><?php _e( 'Give link to caption', 'wdo-amazing-hover' ); ?></p>
										</td>
									</tr>
									<tr>
										<td>
											<strong><?php _e( 'Open Link in New Tab', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
											<select class="capnewtab form-control" disabled="true">
												<option <?php if ( $data2['cap_newtab'] == 'yes' ) echo 'selected="selected"'; ?> value="yes"><?php _e( 'Available in Pro', 'wdo-amazing-hover' ); ?></option>
											<option <?php if ( $data2['cap_newtab'] == 'no' ) echo 'selected="selected"'; ?> value="no"><?php _e( 'No', 'wdo-amazing-hover' ); ?></option>
											</select>
										</td>
										<td>
											<p class="description"><?php _e( 'Choose want to open link in new tab or not.', 'wdo-amazing-hover' ); ?></p>
										</td>
									</tr>
									<tr>
										<td>
											<strong><?php _e( 'Heading Font Size', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
											<input type="number" class="headfontsize form-control" disabled="true" placeholder="Available in Pro Version">
										</td>
										<td>
											<p class="description"><?php _e( 'Give the font size(it will be in px) of Caption Heading.(Default 22)', 'la_caption_hover' ); ?></p>
										</td>
									</tr>
									<tr>
										<td>
											<strong><?php _e( 'Description Font Size', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
											<input type="number" class="descfontsize form-control" disabled="true" placeholder="Available in Pro">
										</td>
										<td>
											<p class="description"><?php _e( 'Give the font size(it will be in px) of Caption Description.(Default 12)', 'la_caption_hover' ); ?></p>
										</td>
									</tr>

									<tr>
					  					<td>
					  						<strong><?php _e( 'Caption Heading Color', 'wdo-amazing-hover' ); ?></strong>
					  					</td>
					  					<td class="insert-picker">
					  						<input type="text" class="head-color" value="<?php echo $data2['cap_headcolor']; ?>">
					  					</td>
					  					<td>
					  						<p class="description"><?php _e( 'Choose font color for caption heading', 'wdo-amazing-hover' ); ?>.</p>
					  					</td>
				  					</tr>

									<tr>
					  					<td>
					  						<strong><?php _e( 'Caption Description Color', 'wdo-amazing-hover' ); ?></strong>
					  					</td>
					  					<td class="insert-picker">
					  						<input type="text" class="desc-color" value="<?php echo $data2['cap_desccolor']; ?>">
					  					</td>
					  					<td>
					  						<p class="description"><?php _e( 'Choose font color for caption description', 'wdo-amazing-hover' ); ?>.</p>
					  					</td>
				  					</tr>
								</table>
								<h4><?php _e( 'Hover Settings', 'wdo-amazing-hover' ); ?></h4>
								<hr>
								<table class="form-table">
									<tr>
										<td style="width:20%">
											<strong><?php _e( 'Thumbnail Width', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td style="width:30%">
											<input type="number" class="form-control thumbwidth" disabled="true" placeholder="Available in Pro" value="">
										</td>
										<td style="width:50%">
											<p class="description"><?php _e( 'Give thumbnail width.Default(220)', 'wdo-amazing-hover' ); ?></p>
										</td>
									</tr>

									<tr>
										<td>
											<strong><?php _e( 'Thumbnail Height', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
											<input type="number" class="form-control thumbheight" disabled="true" placeholder="Available in Pro" >
										</td>
										<td>
											<p class="description"><?php _e( 'Give thumbnail height for the thumbnail.Default(220)', 'wdo-amazing-hover' ); ?></p>
										</td>
									</tr>
									<tr>
										<td>
											<strong><?php _e( 'Select Hover Effect', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
											<select class="effectopt form-control widefat">
												  <option <?php if ( $data2['cap_effect'] == 'effect1' ) echo 'selected="selected"'; ?> value="effect1">Effect1</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect2' ) echo 'selected="selected"'; ?> value="effect2">Effect2</option>
											  	  <option <?php if ( $data2['cap_effect'] == 'effect3' ) echo 'selected="selected"'; ?> value="effect3">Effect3</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect4' ) echo 'selected="selected"'; ?> value="effect4">Effect4</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect5' ) echo 'selected="selected"'; ?> value="effect5">Effect5</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect6' ) echo 'selected="selected"'; ?> value="effect6">Effect6</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect7' ) echo 'selected="selected"'; ?> value="effect7">Effect7</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect8' ) echo 'selected="selected"'; ?> value="effect8">Effect8</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect9' ) echo 'selected="selected"'; ?> value="effect9">Effect9</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect10' ) echo 'selected="selected"'; ?> value="effect10">Effect10</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect11' ) echo 'selected="selected"'; ?> value="effect11">Effect11</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect12' ) echo 'selected="selected"'; ?> value="effect12">Effect12</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect13' ) echo 'selected="selected"'; ?> value="effect13">Effect13</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect14' ) echo 'selected="selected"'; ?> value="effect14">Effect14</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect15' ) echo 'selected="selected"'; ?> value="effect15">Effect15</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect16' ) echo 'selected="selected"'; ?> value="effect16">Effect16</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect17' ) echo 'selected="selected"'; ?> value="effect17">Effect17</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect18' ) echo 'selected="selected"'; ?> value="effect18">Effect18</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect19' ) echo 'selected="selected"'; ?> value="effect19">Effect19</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect20' ) echo 'selected="selected"'; ?> value="effect20">Effect20</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect21' ) echo 'selected="selected"'; ?> value="effect21">Effect21</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect22' ) echo 'selected="selected"'; ?> value="effect22">Effect22</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect23' ) echo 'selected="selected"'; ?> value="effect23">Effect23</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect24' ) echo 'selected="selected"'; ?> value="effect24">Effect24</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect25' ) echo 'selected="selected"'; ?> value="effect25">Effect25</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect26' ) echo 'selected="selected"'; ?> value="effect26">Effect26</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect27' ) echo 'selected="selected"'; ?> value="effect27">Effect27</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect28' ) echo 'selected="selected"'; ?> value="effect28">Effect28</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect29' ) echo 'selected="selected"'; ?> value="effect29">Effect29</option>
												  <option <?php if ( $data2['cap_effect'] == 'effect30' ) echo 'selected="selected"'; ?> value="effect30">Effect30</option>
										  
											   
											</select>
										</td>
										<td>
											<p class="description"><?php _e( 'Select caption hover effects', 'wdo-amazing-hover' ); ?></p>
										</td>
									</tr>
									<tr>
										<td>
											<strong><?php _e( 'Animation Direction', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
											<select class="directionopt form-control widefat">
												<option <?php if ( $data2['cap_direction'] == 'left_to_right' ) echo 'selected="selected"'; ?> value="left_to_right"><?php _e( 'Left To Right', 'wdo-amazing-hover' ); ?></option>
												<option <?php if ( $data2['cap_direction'] == 'right_to_left' ) echo 'selected="selected"'; ?> value="right_to_left"><?php _e( 'Right To Left', 'wdo-amazing-hover' ); ?></option>
												<option <?php if ( $data2['cap_direction'] == 'top_to_bottom' ) echo 'selected="selected"'; ?> value="top_to_bottom"><?php _e( 'Top To Bottom', 'wdo-amazing-hover' ); ?></option>
												<option <?php if ( $data2['cap_direction'] == 'bottom_to_top' ) echo 'selected="selected"'; ?> value="bottom_to_top"><?php _e( 'Bottom To Top', 'wdo-amazing-hover' ); ?></option>
											</select>
										</td>
										<td>
											<p class="description"><?php _e( 'Select caption direction for the image on hover', 'wdo-amazing-hover' ); ?></p>
										</td>
									</tr> 
									<tr>
										<td>
											<strong><?php _e( 'Thumbnail Border Width', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
											<input type="number" class="capborderwidthsq form-control" disabled="true" placeholder="Available in Pro" value="">
										</td>
										<td>
											<p class="description"><?php _e( 'Give border width(if want to hide border put 0) for the thumbnail.(Default 8)', 'wdo-amazing-hover' ); ?></p>
										</td>
									</tr>

									<tr>
										<td>
											<strong><?php _e( 'Border Color (Available in Pro)', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
											<input type="text" class="capbordercolor form-control" disabled="true" placeholder="Available in Pro" value="">
										</td>
										<td>
											<p class="description"><?php _e( 'Choose border color for the thumbnail', 'wdo-amazing-hover' ); ?></p>
										</td>
									</tr>
									
									<tr>
										<td>
											<strong><?php _e( 'Images Per Row', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
											<select class="capgrid form-control widefat">
												<option value="12" <?php if ( $data2['cap_grid'] == '12' ) echo 'selected="selected"'; ?>>1</option>
											  	<option value="6" <?php if ( $data2['cap_grid'] == '6' ) echo 'selected="selected"'; ?>>2</option>
											  	<option value="4" <?php if ( $data2['cap_grid'] == '4' ) echo 'selected="selected"'; ?>>3</option>
											  	<option value="3" <?php if ( $data2['cap_grid'] == '3' ) echo 'selected="selected"'; ?>>4</option>
											</select>
										</td>
										<td>
											<p class="description"><?php _e( 'Select how many images show in one row.Keep it same for every Image', 'wdo-amazing-hover' ); ?></p>
										</td>
									</tr>

									<tr> 
										<td> 
											<strong><?php _e( 'Caption Background Color  (Available in Pro)', 'wdo-amazing-hover' ); ?></strong>
										</td>
										<td>
					  						<input type="text" class="form-control custom capbgcolor" disabled="true" placeholder="Available in Pro" />
					  					</td>
										<td><p class="description"><?php _e( 'Choose background color for the caption.(Default #1a4a72)', 'wdo-amazing-hover' ); ?></p></td>
									</tr>

								</table> <br> <hr>
								<button class="button removeitem"><span class="dashicons dashicons-dismiss" title="Delete"></span><?php _e( 'Remove Image', 'wdo-amazing-hover' ); ?></button> 
									
					       	<span class="moreimages">
					    		<button class="button moreimg"><b title="Add New" class="dashicons dashicons-plus-alt"></b><?php _e( 'Add Image', 'wdo-amazing-hover' ); ?></button>
								<button class="button-primary addcat"><?php _e( 'Add Category', 'wdo-amazing-hover' ); ?></button>
								<button class="button-primary fullshortcode pull-right" id="<?php echo $data2['shortcode']; ?>"><?php _e( 'Get Shortcode', 'wdo-amazing-hover' ); ?></button>
								<button class="button removecat pull-right"><?php _e( 'Remove Category', 'wdo-amazing-hover' ); ?></button>
					    	</span>
					        </div>
						<?php } ?>
					   	</div>
					   	<?php } ?>
				   	<?php } else{ ?>

					<h3><a href="#">Image Caption Hover</a></h3>
				     
				   	<div class="accordian content">
					
				        <h3><a class=href="#">Image</a></h3>
				        <div>
				        	<table class="form-table">
				        		<tr>
				        			<td style="width:20%">
				        				<strong><?php _e( 'Category Name', 'wdo-amazing-hover' ); ?></strong>
				        			</td>

				        			<td style="width:30%">
				        				<input type="text" class="catname widefat form-control"> 
				        			</td>

				        			<td style="width:50%">
				        				<p class="description"><?php _e( 'Name the category for images.Category name should be same for everyimage', 'wdo-amazing-hover' ); ?></p>
				        			</td>
				        		</tr>
				        		<tr>
				        			<td >
				        				<strong><?php _e( 'Image Name', 'wdo-amazing-hover' ); ?></strong>
				        			</td>

				        			<td >
				        				<input type="text" class="imgname widefat form-control" value="">
				        			</td>

				        			<td>
				        				<p class="description"><?php _e( 'Name the image.It will be for your reference', 'wdo-amazing-hover' ); ?></p>
				        			</td>
				        		</tr>
				        	</table>
				        	<button class="addimage button"><?php _e( 'Upload Image', 'wdo-amazing-hover' ); ?></button>
				        	<span class="image">
				        		
				        	</span><br>
				        	<h4><?php _e( 'Caption Settings', 'wdo-amazing-hover' ); ?></h4>
				        	<hr>
							<table class="form-table">

								<tr style="width:20%">
									<td>
										<strong><?php _e( 'Caption Heading', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td style="width:30%">
										<input type="text" class="widefat capheading form-control">
									</td>
									<td style="width:50%">
										<p class="description"><?php _e( 'Type Caption heading', 'wdo-amazing-hover' ); ?></p>
									</td>
								</tr>
								<tr>
									<td>
										<strong><?php _e( 'Caption Description', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
										<textarea class="widefat capdesc form-control" cols="30" rows="10"></textarea>
									</td>
									<td>
										<p class="description"><?php _e( 'Give description for the caption', 'wdo-amazing-hover' ); ?></p>
									</td>
								</tr>

								<tr>
									<td>
										<strong><?php _e( 'Caption Top Padding', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
										<input disabled="true" type="number" class="captoppadding form-control" placeholder="Available in Pro" value="">
									</td>
									<td>
										<p class="description"><?php _e( 'Give padding for the caption from the top', 'wdo-amazing-hover' ); ?></p>
									</td>
								</tr>
								<tr>
									<td>
										<strong><?php _e( 'Show Border Below Heading', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
										<select name="" class="form-control captopborder">
											<option value="yes">Yes</option>
											<option value="no">No</option>
										</select>
										
									</td>
									<td>
										<p class="description"><?php _e( 'Select want to show border below Caption Heading.', 'wdo-amazing-hover' ); ?></p>
									</td>
								</tr>
								
								<tr>
									<td>
										<strong><?php _e( 'Caption Link', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
										<input type="text" class="widefat caplink form-control">
									</td>
									<td>
										<p class="description"><?php _e( 'Give link to caption', 'wdo-amazing-hover' ); ?></p>
									</td>
								</tr>
								<tr>
									<td>
										<strong><?php _e( 'Open Link in New Tab', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
										<select class="capnewtab form-control" disabled="true">
											<option value="yes"><?php _e( 'Available in Pro', 'wdo-amazing-hover' ); ?></option>
											<option value="no"><?php _e( 'No', 'wdo-amazing-hover' ); ?></option>
										</select>
									</td>
									<td>
										<p class="description"><?php _e( 'Choose want to open link in new tab or not.', 'wdo-amazing-hover' ); ?></p>
									</td>
								</tr>
								<tr>
									<td>
										<strong><?php _e( 'Heading Font Size', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
										<input type="number" class="headfontsize form-control" disabled="true" >
									</td>
									<td>
										<p class="description"><?php _e( 'Give the font size(it will be in px) of Caption Heading.(Default 22)', 'la_caption_hover' ); ?></p>
									</td>
								</tr>
								<tr>
									<td>
										<strong><?php _e( 'Description Font Size', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
										<input type="number" class="descfontsize form-control" disabled="true" placeholder="Available in Pro">
									</td>
									<td>
										<p class="description"><?php _e( 'Give the font size(it will be in px) of Caption Description.(Default 12)', 'la_caption_hover' ); ?></p>
									</td>
								</tr>

								<tr>
				  					<td>
				  						<strong><?php _e( 'Caption Heading Color', 'wdo-amazing-hover' ); ?></strong>
				  					</td>
				  					<td class="insert-picker">
				  						<input type="text" class="head-color" value="#fff">
				  					</td>
				  					<td>
				  						<p class="description"><?php _e( 'Choose font color for caption heading', 'wdo-amazing-hover' ); ?>.</p>
				  					</td>
			  					</tr>

								<tr>
				  					<td>
				  						<strong><?php _e( 'Caption Description Color', 'wdo-amazing-hover' ); ?></strong>
				  					</td>
				  					<td class="insert-picker">
				  						<input type="text" class="desc-color" value="#fff">
				  					</td>
				  					<td>
				  						<p class="description"><?php _e( 'Choose font color for caption description', 'wdo-amazing-hover' ); ?>.</p>
				  					</td>
			  					</tr>
							</table>
							<h4><?php _e( 'Hover Settings', 'wdo-amazing-hover' ); ?></h4>
							<hr>
							<table class="form-table">
								<tr>
									<td style="width:20%">
										<strong><?php _e( 'Thumbnail Width', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td style="width:30%">
										<input type="number" class="form-control thumbwidth" disabled="true" placeholder="Available in Pro">
									</td>
									<td style="width:50%">
										<p class="description"><?php _e( 'Give thumbnail width.Default(220)', 'wdo-amazing-hover' ); ?></p>
									</td>
								</tr>

								<tr>
									<td>
										<strong><?php _e( 'Thumbnail Height', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
										<input type="number" class="form-control thumbheight" disabled="true" placeholder="Available in Pro">
									</td>
									<td>
										<p class="description"><?php _e( 'Give thumbnail height for the thumbnail.Default(220)', 'wdo-amazing-hover' ); ?></p>
									</td>
								</tr>
								<tr>
									<td>
										<strong><?php _e( 'Select Hover Effect', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
										<select class="effectopt form-control widefat">
										  <option value="effect1">Effect1</option>
										  <option value="effect2">Effect2</option>
										  <option value="effect3">Effect3</option>
										  <option value="effect4">Effect4</option>
										  <option value="effect5">Effect5</option>
										  <option value="effect6">Effect6</option>
										  <option value="effect7">Effect7</option>
										  <option value="effect8">Effect8</option>
										  <option value="effect9">Effect9</option>
										  <option value="effect10">Effect10</option>
										  <option value="effect11">Effect11</option>
										  <option value="effect12">Effect12</option>
										  <option value="effect13">Effect13</option>
										  <option value="effect14">Effect14</option>
										  <option value="effect15">Effect15</option>
										  <option value="effect16">Effect16</option>
										  <option value="effect17">Effect17</option>
										  <option value="effect18">Effect18</option>
										  <option value="effect19">Effect19</option>
										  <option value="effect20">Effect20</option>
										  <option value="effect21">Effect21</option>
										  <option value="effect22">Effect22</option>
										  <option value="effect23">Effect23</option>
										  <option value="effect24">Effect24</option>
										  <option value="effect25">Effect25</option>
										  <option value="effect26">Effect26</option>
										  <option value="effect27">Effect27</option>
										  <option value="effect28">Effect28</option>
										  <option value="effect29">Effect29</option>
										  <option value="effect30">Effect30</option>
										   
										</select>
									</td>
									<td>
										<p class="description"><?php _e( 'Select caption hover effects', 'wdo-amazing-hover' ); ?></p>
									</td>
								</tr>
								<tr>
									<td>
										<strong><?php _e( 'Animation Direction', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
										<select class="directionopt form-control widefat">
										  <option value="left_to_right"><?php _e( 'Left To Right', 'wdo-amazing-hover' ); ?></option>
										  <option value="right_to_left"><?php _e( 'Right To Left', 'wdo-amazing-hover' ); ?></option>
										  <option value="top_to_bottom"><?php _e( 'Top To Bottom', 'wdo-amazing-hover' ); ?></option>
										  <option value="bottom_to_top"><?php _e( 'Bottom To Top', 'wdo-amazing-hover' ); ?></option>
										</select>
									</td>
									<td>
										<p class="description"><?php _e( 'Select caption direction for the image on hover', 'wdo-amazing-hover' ); ?></p>
									</td>
								</tr>
								<tr>
									<td>
										<strong><?php _e( 'Thumbnail Border Width', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
										<input type="number" class="capborderwidthsq form-control" disabled="true" placeholder="Available in Pro" value="">
									</td>
									<td>
										<p class="description"><?php _e( 'Give border width(if want to hide border put 0) for the thumbnail of square style.(Default 16)', 'wdo-amazing-hover' ); ?></p>
									</td>
								</tr>
								<tr>
									<td>
										<strong><?php _e( 'Border Color (Available in Pro)', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
										<input type="text" class="capbordercolor form-control" disabled="true" placeholder="Available in Pro" value="#fff">
									</td>
									<td>
										<p class="description"><?php _e( 'Choose border color for the thumbnail(Only for the Square Style) ', 'wdo-amazing-hover' ); ?></p>
									</td>
								</tr>
								
								<tr>
									<td>
										<strong><?php _e( 'Images Per Row', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
										<select class="capgrid form-control widefat">
										  <option value="12">1</option>
										  <option value="6">2</option>
										  <option value="4">3</option>
										  <option value="3">4</option>  
										</select>
									</td>
									<td>
										<p class="description"><?php _e( 'Select how many images show in one row.Keep it same for every Image', 'wdo-amazing-hover' ); ?></p>
									</td>
								</tr>

								<tr> 
									<td> 
										<strong><?php _e( 'Caption Background Color (Available in Pro)', 'wdo-amazing-hover' ); ?></strong>
									</td>
									<td>
				  						<input type="text" class="form-control custom capbgcolor" disabled="true" placeholder="Available in Pro" value="#fff" />
				  					</td>
									<td><p class="description"><?php _e( 'Choose background color for the caption.(Default #1a4a72)', 'wdo-amazing-hover' ); ?></p></td>
								</tr>

							</table> <br> <hr>
							<button class="button removeitem"><span class="dashicons dashicons-dismiss" title="Delete"></span><?php _e( 'Remove Image', 'wdo-amazing-hover' ); ?></button> 
								
				       	<span class="moreimages">
				    		<button class="button moreimg"><b title="Add New" class="dashicons dashicons-plus-alt"></b><?php _e( 'Add Image', 'wdo-amazing-hover' ); ?></button>
							<button class="button-primary addcat"><?php _e( 'Add Category', 'wdo-amazing-hover' ); ?></button>
							<button class="button-primary fullshortcode pull-right" id="1"><?php _e( 'Get Shortcode', 'wdo-amazing-hover' ); ?></button>
							<button class="button removecat pull-right"><?php _e( 'Remove Category', 'wdo-amazing-hover' ); ?></button>
				    	</span>
				        </div>

				   	</div>
				   	<?php } ?>
				</div>
				<hr>
				<button class="button-primary save-meta pull-right"><?php _e( 'Save Data', 'wdo-amazing-hover' ); ?></button>
				<span id="la-loader" class="pull-right"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>images/ajax-loader.gif"></span>
				<span id="la-saved"><strong><?php _e( 'Changes Saved!', 'la-portfolio' ); ?></strong></span>
			</div>	