<?php get_header(); ?>


<div id="page-gioithieu">
	<div class="title-page">		
			<?php
				$page_id = 2207; 
			    $page_data = get_page( $page_id ); 
			?>
			<h1><?php echo $page_data->post_title;?></h1>
	</div>
	<div class="content">
 
        <section id="main-content">
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
						 
        </section>
        <section id="sidebar">
 
        </section>
 
	</div>

</div>


<?php get_footer(); ?>

			
	
	
	<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
	<div class="custom_html_section"></div>
	






<!-- Code này có tác dụng làm lại menu khi responsive -->
<script type='text/javascript'>
/* <![CDATA[ */
var AIRSUPPLY_STORAGE = {"system_message":{"message":"","status":"","header":""},"theme_font":"encode_sans","theme_color":"#0a1f54","theme_bg_color":"#ffffff","strings":{"ajax_error":"Invalid server answer","bookmark_add":"Add the bookmark","bookmark_added":"Current page has been successfully added to the bookmarks. You can see it in the right panel on the tab &#039;Bookmarks&#039;","bookmark_del":"Delete this bookmark","bookmark_title":"Enter bookmark title","bookmark_exists":"Current page already exists in the bookmarks list","search_error":"Error occurs in AJAX search! Please, type your query and press search icon for the traditional search way.","email_confirm":"On the e-mail address &quot;%s&quot; we sent a confirmation email. Please, open it and click on the link.","reviews_vote":"Thanks for your vote! New average rating is:","reviews_error":"Error saving your vote! Please, try again later.","error_like":"Error saving your like! Please, try again later.","error_global":"Global error text","name_empty":"The name can&#039;t be empty","name_long":"Too long name","email_empty":"Too short (or empty) email address","email_long":"Too long email address","email_not_valid":"Invalid email address","subject_empty":"The subject can&#039;t be empty","subject_long":"Too long subject","text_empty":"The message text can&#039;t be empty","text_long":"Too long message text","send_complete":"Send message complete!","send_error":"Transmit failed!","geocode_error":"Geocode was not successful for the following reason:","googlemap_not_avail":"Google map API not available!","editor_save_success":"Post content saved!","editor_save_error":"Error saving post data!","editor_delete_post":"You really want to delete the current post?","editor_delete_post_header":"Delete post","editor_delete_success":"Post deleted!","editor_delete_error":"Error deleting post!","editor_caption_cancel":"Cancel","editor_caption_close":"Close"},"ajax_url":"http:\/\/airsupply.themerex.net\/wp-admin\/admin-ajax.php","ajax_nonce":"18abe852fa","site_url":"http:\/\/airsupply.themerex.net","site_protocol":"http","vc_edit_mode":"","accent1_color":"#11224d","accent1_hover":"#e5631b","slider_height":"100","user_logged_in":"","toc_menu":"float","toc_menu_home":"1","toc_menu_top":"1","menu_fixed":"1","menu_mobile":"1024","menu_hover":"fade","button_hover":"fade","input_hover":"iconed","demo_time":"0","media_elements_enabled":"1","ajax_search_enabled":"1","ajax_search_min_length":"3","ajax_search_delay":"200","css_animation":"1","menu_animation_in":"bounceIn","menu_animation_out":"fadeOutDown","popup_engine":"magnific","email_mask":"^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$","contacts_maxlength":"1000","comments_maxlength":"1000","remember_visitors_settings":"","admin_mode":"","isotope_resize_delta":"0.3","error_message_box":null,"viewmore_busy":"","video_resize_inited":"","top_panel_height":"0"};
/* ]]> */
</script>



</body>
</html>




