<div class="vc_row-full-width"></div>

<div class="vc_row wpb_row vc_row-fluid" id="content_sukien">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				<div class="vc_empty_space" style="height: 2.4em" >
					<span class="vc_empty_space_inner"></span>
				</div>
				<div id="sc_blogger_984584656" class="sc_blogger layout_classic_3 template_masonry margin_top_huge margin_bottom_huge  sc_blogger_horizontal">
					<!-- <h6 class="sc_blogger_subtitle sc_item_subtitle">News & Events</h6> -->
					<h2 class="sc_blogger_title sc_item_title sc_item_title_without_descr"><?php thachpham_tintuc_sukien();?></h2>
					<div class="isotope_wrap" data-columns="3">		
						

						  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 				<div class=" isotope_item isotope_item_classic isotope_item_classic_3 isotope_column_3">
								<div class="post_item post_item_classic post_item_classic_3 post_format_standard odd">
									<div class="post_featured">
										<div class="post_thumb"  data-title="<?php the_title();?>">
											<a  href="<?php the_permalink(); ?>">	
												<?php thachpham_thumbnail( 'thumbnail' ); ?>													
											</a>
										</div>
									</div>
									<div class="post_content isotope_item_content">
										<div id="content_sk_title">
											<h5 class="post_title">
												<a href="<?php the_permalink(); ?>">
													<?php the_title();?>
												</a>
											</h5>
										</div>
										<div class="post_info" id="content_sk_info">
											<span class="post_info_item post_info_posted icon-clock-empty"> 
												<?php thachpham_entry_meta() ?>
											</span>
											<span class="post_info_item post_info_counters">	
												
													<span class="post_counters_item post_counters_views icon-eye"><?php echo "Lượt xem ". wp_statistics_pages( 'total' , get_permalink($post->ID), $post->ID); ?></span>
												
											</span>
										</div>
										<div class="post_descr" id="content_sk_noidung">
											<p><?php the_content(); ?></p>
																
										</div>
										<div id="content_sk_xt">
											<a href="<?php the_permalink(); ?>" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small sc_button_style_color_style2">Xem thêm</a>
										</div>
									</div>
									<?php thachpham_pagination(); ?>	
								</div>	
							</div>	
				        <?php endwhile; ?>
				        <?php else : ?>
				 			<?php get_template_part( 'content', 'none' ); ?>
				        <?php endif; ?> 
						 
						
					</div>
				</div>
				<div class="vc_empty_space"  style="height: 1.3em" >
					<span class="vc_empty_space_inner"></span>
				</div>
			</div>
		</div>
	</div>
</div>

