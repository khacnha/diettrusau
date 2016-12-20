<div id="content-thongtin" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1473086213730 vc_row-no-padding">
		<div class="wpb_column vc_column_container vc_col-sm-12">
			<div class="vc_column-inner ">
				<div class="wpb_wrapper">
					<div class="sc_content content_wrap">
						<div class="vc_empty_space"  style="height: 0.55em" >
							<span class="vc_empty_space_inner"></span>
						</div>
						<div id="sc_services_1503151356_wrap" class="sc_services_wrap">
							<div id="sc_services_1503151356" class="sc_services sc_services_style_services-1 sc_services_type_icons  margin_top_medium margin_bottom_tiny" style="width:100%;">
								<div class="sc_columns columns_wrap">
									

									<?php 

									// args
									$args = array(
										'numberposts'	=> 4,
										'post_type'		=> 'tin_tuc',
										'meta_query'	=> array(
											array(
												'key'		=> 'tieu_bieu',
												'value'		=> '1',
												'compare'	=> '='
											),
										)
									);


									// query
									$tin_tuc = new WP_Query( $args );

									?>

									
									<?php if( $tin_tuc->have_posts() ): ?>
										
										<?php while ( $tin_tuc->have_posts() ) : $tin_tuc->the_post(); ?>
											
											<div class="column-1_4 column_padding_bottom">			
												<div id="sc_services_1503151356_1" class="sc_services_item sc_services_item_1 odd first">
													<a href="<?php the_permalink(); ?>">
														<span class="sc_icon"><?php thachpham_thumbnail( 'thumbnail' ); ?></span>	
													</a>				
													<div class="sc_services_item_content">
														<div id="title_information">
															<h4 class="sc_services_item_title">
																<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
															</h4>
														</div>
															
														<div>
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
						</div>	
					</div>
				</div>
			</div>
		</div><!-- /.sc_services -->
	</div><!-- /.sc_services_wrap -->