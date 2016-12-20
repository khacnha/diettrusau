
<div class="vc_row wpb_row vc_row-fluid" id="content_dichvu">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner ">
			
				<div class="vc_empty_space"  style="height: 3em" >
					<span class="vc_empty_space_inner"></span>
				</div>
				<div id="sc_services_1415670211_wrap" class="sc_services_wrap">
					<div id="sc_services_1415670211" class="sc_services sc_services_style_services-5 sc_services_type_icons  margin_top_huge margin_bottom_huge" style="width:100%;">
						<h2 class="sc_services_title sc_item_title sc_item_title_without_descr"><?php thachpham_slogan_dichvu();?></h2>
						<h6 class="sc_services_subtitle sc_item_subtitle"><?php thachpham_title_dichvu();?></h6>
						<div class="sc_service_container sc_align_">
							<div class="sc_services_image">
								<img src="<?php body_image_dv();?>" id="chuyengia">
							</div>
							<div class="sc_columns columns_wrap">


							<?php 
							// args
							$args = array(
								'numberposts'	=> 4,
								'post_type'		=> 'dichvu',
								'meta_query'	=> array(
									array(
										'key'		=> 'tieu_bieu',
										'value'		=> '1',
										'compare'	=> '='
									),
								)
							);

							// query
							$so_sanh = new WP_Query( $args );

							?>

							<?php if( $so_sanh->have_posts() ): ?>
								
							<?php while ( $so_sanh->have_posts() ) : $so_sanh->the_post(); ?>

							<div class="column-1_2 column_padding_bottom">			
								<div id="sc_services_1415670211_1" class="sc_services_item sc_services_item_1 odd first">	
									<a href="<?php the_permalink(); ?>">			
										
											<img class="wp-post-image ruoimuoi" src="<?php echo get_field('image')["sizes"]["medium_large"]; ?>" />	
												
									</a>			
									<div class="sc_services_item_content">
										<h4 class="sc_services_item_title">
											<a href="<?php the_permalink(); ?>">	
												<?php the_title(); ?>
											</a>
										</h4>
										<div class="sc_services_item_description">
											<p><?php the_content(); ?></p>	
										</div>
									</div>
								</div>
							</div>

							<?php endwhile; ?>
																	
							<?php endif; ?>

							<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
		
							</div>
						</div>

					</div><!-- /.sc_services -->
				</div><!-- /.sc_services_wrap -->
				<div class="vc_empty_space"  style="height: 2.7em" ><span class="vc_empty_space_inner"></span></div>
			
		</div>
	</div>
</div>
